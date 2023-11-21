<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CommentController extends Controller
{
    public function saveComment(Request $request, $user_id, $post_id)
    {
        $validator = Validator::make($request->all(), [
            'reply' => "required",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to save reply',
                'redirect' => '0'
            ]);
        } else {

            $data = new Comment();
            $data->user_id = $user_id;
            $data->post_id = $post_id;
            $data->comment = sanitizeInput($request->reply);
            try {
                $data->save();

                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Reply saved successfully',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => 'Throwable',
                    'message' => 'Failed to save reply',
                    'redirect' => '0'
                ]);
            }


        }
    }
}
