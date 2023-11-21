<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        return redirect()->back();
    }


    public function editAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => ['required',],
            "name" => ['required',],
            "email" => ['required', 'email'],
            "phone" => ['required'],
            "address" => ['required'],
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

            $userData = User::where('user_id', '=', $user_id)->first();

            $userData->name = sanitizeInput($request->name);
            $userData->email = $email;
            $userData->phone = sanitizeInput($request->phone);
            $userData->address = sanitizeInput($request->address);

            try {
                $userData->save();
                $data = json_encode(['user_id' => $user_id, 'email' => $email, 'role' => 'user']);
                $abcdefgh = encodeData($data);
                session()->put('abcdefgh', $abcdefgh);

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Account details updated successfully',
                    'redirect' => ''
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update account details',
                    'redirect' => '0'
                ]);
            }

        }
    }

    public function createPost(Request $request, $user_id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'short_description' => "required",
            'post_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add post',
                'redirect' => '0'
            ]);
        } else {
            $content = htmlentities(trim( $request->post_content));

            $title = sanitizeInput($request->title);

            $saveData = new Post();
            $saveData->user_id = $user_id;
            $saveData->category_id = sanitizeInput($request->category_name);
            $saveData->title = $title;
            $saveData->slug = seo_friendly_url($title);

            $saveData->short_des = sanitizeInput($request->short_description);
            $saveData->content = $content;

            try {
                $saveData->save();

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Post added successfully',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => 'Throwable',
                    'message' => 'Failed to add post',
                    'redirect' => '0'
                ]);
            }


        }
    }

    public function deletePost(Request $request, $post_id)
    {
        try {
            //code...
            Post::where('id', '=', $post_id)->delete();
            return response()->json([
                'status' => true,
                'errors' => '',
                'message' => 'Post deleted successfully',
                'redirect' => '0'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'errors' => $th,
                'errors_type' => 'Throwable',
                'message' => 'Failed to delete post',
                'redirect' => '0'
            ]);
        }

    }
    public function editPost(Request $request, $user_id, $post_id)
    {
        $postData = Post::where([
            ['user_id', '=', $user_id],
            ['id', '=', $post_id],
        ])->first();
        if (!is_null($postData)) {
            return view('pages.update-post')->with(compact('postData'));
        } else {
            abort('404', 'Post not found');
        }
    }
    public function updatePost(Request $request, $user_id, $post_id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'short_description' => "required",
            'post_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update post',
                'redirect' => '0'
            ]);
        } else {
            $content = htmlentities(trim( $request->post_content));

            $title = sanitizeInput($request->title);

            $saveData = Post::where([
                ['user_id', '=', $user_id],
                ['id', '=', $post_id],
            ])->first();

            $saveData->category_id = sanitizeInput($request->category_name);
            $saveData->title = $title;
            $saveData->slug = seo_friendly_url($title);

            $saveData->short_des = sanitizeInput($request->short_description);
            $saveData->content = $content;

            try {
                $saveData->save();

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Post updated successfully',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => 'Throwable',
                    'message' => 'Failed to update post',
                    'redirect' => '0'
                ]);
            }


        }
    }

}
