<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserAccountController extends Controller
{
    public function userAccount()
    {
        return view('frontend.user-account');
    }

    public function logout()
    {
        session()->forget('abcdefgh');
        return redirect()->route('user_account.userLogoutPage');
    }
    public function userLogoutPage()
    {
        return view('frontend.logout');
    }

    public function editAccount(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => ['required',],
            "prefix" => ['required',],
            "full_name" => ['required',],
            "email" => ['required', 'email', "unique:users,email,$id"],
            "phone" => ['required', 'numeric'],
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update account details',
                'redirect' => '0'
            ]);
        } else {
            $user_id = sanitizeInput($request->user_id);
            $email = sanitizeInput($request->email);

            $userData = User::find($id);
            $userData->prefix = sanitizeInput($request->prefix);
            $userData->name = sanitizeInput($request->full_name);
            $userData->email = $email;
            $userData->phone = sanitizeInput($request->phone);

            if ($userData->save()) {
                // reset email in login session

                $data = json_encode(['user_id' => $user_id, 'email' => $email, 'role' => 'user']);
                $abcdefgh = encodeData($data);
                session()->put('abcdefgh', $abcdefgh);

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Account details updated successfully',
                    'redirect' => ''
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update account details',
                    'redirect' => '0'
                ]);
            }
        }
    }
}
