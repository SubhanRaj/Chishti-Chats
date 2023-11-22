<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Register()
    {
        return view('frontend.register');
    }
    public function saveRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "full_name" => ["required", 'string'],
            "email" => ["required", 'email', 'unique:users,email'],
            "password" => ["required", "confirmed"],
            "password_confirmation" => ["required"],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Registration Failed. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $token = Str::random(32);

            $checkToken = User::where('token', '=',  $token)->count();

            if ($checkToken > 0) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                    'message' => 'Registration Failed. Please try again',
                    'redirect' => '0'
                ]);
            } else {
                $email  = sanitizeInput($request->email);
                $name = sanitizeInput($request->full_name);
                $saveData = new User();

                $saveData->user_id = uid_generator() . mt_rand(10000, 1000000);
                $saveData->name = sanitizeInput($request->full_name);
                $saveData->email = sanitizeInput($request->email);
                $saveData->password = Hash::make(sanitizeInput($request->password));
                $saveData->token = $token;

                if ($saveData->save()) {
                    $mailData = $request->toArray();
                    $mailData['token'] = $token;
                    $mailData['name'] = $name;
                    $mail_data = [
                        "subject" => "Please  verify your email",
                        "data" => $mailData,
                        "path" => array(),
                        "view" => 'emails.registration-email-verification'
                    ];

                    Mail::to($email)->send(new SendMail($mail_data));
                    return response()->json([
                        'status' => true,
                        'errors' => '',
                        'message' => 'Registration successfull. Please verify your email.',
                        'redirect' => '0'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'errors' => '',
                        'message' => 'Registration Failed. Please try again',
                        'redirect' => ''
                    ]);
                }
            }
        }
    }
    public function emailVerification($token)
    {
        $response_arr = [];

        $checkToken = User::where('token', '=', sanitizeInput($token))->get();
        if (count($checkToken) > 0) {
            $status = $checkToken[0]->status;
            if ($status == 0) {
                // update status 
                $checkToken[0]->status = 1;
                if ($checkToken[0]->save()) {
                    $response_arr['status'] = true;
                    $response_arr['message'] = "Verification Successfull";
                    return  view('pages.email-verification')->with(compact('response_arr'));
                } else {
                    $response_arr['status'] = false;
                    $response_arr['message'] = "Verification Failed";
                    return  view('pages.email-verification')->with(compact('response_arr'));
                }
            } else {
                $response_arr['status'] = true;
                $response_arr['message'] = "Already Verified";
                return  view('pages.email-verification')->with(compact('response_arr'));
            }
        } else {
            $response_arr['status'] = false;
            $response_arr['message'] = "Invalid verification token";
            return  view('pages.email-verification')->with(compact('response_arr'));
        }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => ["required", 'email'],
            "password" => ["required"],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Invalid entry. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $email  = sanitizeInput($request->email);
            $password  = sanitizeInput($request->password);

            $getLogin = User::where([
                ['email', '=', $email],
            ])->get();

            if (count($getLogin) > 0) {
                $status = $getLogin[0]->status;
                if ($status == 1) {
                    // user verified
                    if (password_verify($password, $getLogin[0]['password'])) {
                        $email = $getLogin[0]['email'];

                        $email_char_arr = str_split($email);
                        $email_hash = $email_char_arr[0];
                        for ($i = 1; $i <= count($email_char_arr); $i++) {
                            if ($email_char_arr[$i] == "@") {
                                $email_hash .= '@gmail.com';
                                break;
                            } else {
                                $email_hash .= '*';
                            }
                        }
                        $msg = "We just sent your authentication code via email to <b>$email_hash</b>. The code will expire in 10 minute.";
                        // otp
                        $otp = mt_rand(100000, 1000000);
                        session()->put('otp', $otp);
                        session()->put('msg', $msg);
                        session()->put('email', $email);

                        $mail_data = [
                            "subject" => "Otp for device verification",
                            "otp" => $otp,
                            "path" => array(),
                            "view" => 'emails.login-email'
                        ];
                        Mail::to($email)->send(new SendMail($mail_data));

                        return response()->json([
                            'status' => true,
                            'errors' => '',
                            'message' => 'Please verify your device',
                            'redirect' => '0'
                        ]);
                    } else {
                        return response()->json([
                            'status' => false,
                            'errors' => array('password' => array('Password Incorrect')),
                            'message' => 'Incorrect Password',
                            'redirect' => '0'
                        ]);
                    }
                } else {
                    // user not verified
                    $token = $getLogin[0]->token;
                    return response()->json([
                        'status' => false,
                        'errors' => '',
                        'message' => "Email not verified. Please verify your email.<br> <a href='javascript:;' class='text-dark font-weight-bold' id='re-send-verification' onclick=resendVerificationEmail()><b> re-send verification email </b></a>",
                        'redirect' => '0'
                    ]);
                }
            } else {
                // user not exsits 
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => "User not registered.",
                    'redirect' => '0'
                ]);
            }
        }
    }
   
    function sendReEmailVerificationLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => ["required", 'email'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Email not registered. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $email  = sanitizeInput($request->email);

            $getLogin = User::where([
                ['email', '=', $email],
            ])->get();

            $token = $getLogin[0]->token;
            $name = $getLogin[0]->name;

            $mailData['token'] = $token;
            $mailData['name'] = $name;
            $mail_data = [
                "subject" => "Please verify your email",
                "data" => $mailData,
                "path" => array(),
                "view" => 'emails.registration-email-verification'
            ];

            $sendMail = Mail::to($email)->send(new SendMail($mail_data));
            if ($sendMail) {
                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Verification link sent successfully. Please verify your email',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Faild to send verification link. Please try again later.',
                    'redirect' => '0'
                ]);
            }
        }
    }



    public function loginOtpVerification(Request $request)
    {
        $validator = $request->validate([
            'otp' => 'required|integer '
        ]);

        $Session_otp = session()->get('otp');
        $email = session()->get('email');
        $form_otp   = sanitizeInput($request->otp);

        if ($Session_otp == $form_otp) {
            $get_user_data =  User::where('email', '=', $email)->get();
            if (count($get_user_data) != 0) {
                $user_data = $get_user_data->toArray();
                $role = $user_data[0]['role'];
                $user_id = $user_data[0]['user_id'];

                $data = json_encode(['user_id' => $user_id, 'email' => $email, 'role' => $role]);
                $abcdefgh = encodeData($data);
                session()->put('abcdefgh', $abcdefgh);

                session()->forget(['otp', 'msg', 'email']);

                return response()->json([
                    'status' => true,
                    'message' => 'Login Successfully',
                    'redirect' => ''
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to login',
                    'redirect' => '0'
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Invalid OTP. Please enter a valid otp',
                'redirect' => '0'
            ]);
        }
    }

    public function passwordResetCheckUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Email Not Registered',
                'redirect' => '0'
            ]);
        } else {
            $email = sanitizeInput($request->email);
            $get_user_data =  User::where('email', '=', $email)->get();

            if (count($get_user_data) != 0) {

                $otp = mt_rand(100000, 1000000);
                $mail_data = [
                    "subject" => "Otp for device verification",
                    "otp" => $otp,
                    "path" => array(),
                    "view" => 'emails.login-email'
                ];
                Mail::to($email)->send(new SendMail($mail_data));

                session()->put('reset_otp', $otp);
                session()->put('email', $email);


                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'We just sent an opt to your registered email. Please verify your device',
                    'redirect' => ''
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Email Not Registered',
                    'redirect' => '0'
                ]);
            }
        }
    }
    public function passwordResetOtpCheck(Request $request)
    {
        $validator = $request->validate([
            'otp' => 'required|integer '
        ]);

        $Session_otp = session()->get('reset_otp');
        $form_otp  = $request->otp;

        if ($Session_otp == $form_otp) {
            return response()->json([
                'status' => true,
                'errors' => '',
                'message' => 'Create New Password',
                'redirect' => ''
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => '',
                'message' => 'Incorrect otp',
                'redirect' => '0'
            ]);
        }
    }
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "password" => ["required", "confirmed"],
            "password_confirmation" => ["required"],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Faild to updated password',
                'redirect' => '0'
            ]);
        } else {
            $newPassword =  Hash::make($request->password);
            $email = session()->get('email');
            $getUser = User::where('email', '=', $email)->get();
            $getUser[0]->password = $newPassword;
            $saveStatus = $getUser[0]->save();
            if ($saveStatus === true) {
                session()->forget(['reset_otp', 'email',]);

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Password updated successfully',
                    'redirect' =>  '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update password',
                    'redirect' => '0'
                ]);
            }
        }
    }


    // if user not login 

    public function notLogin()
    {
        return view('frontend.not-login');
    }
}
