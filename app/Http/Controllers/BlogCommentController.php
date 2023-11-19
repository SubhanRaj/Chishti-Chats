<?php

namespace App\Http\Controllers;

use App\Models\BlogComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BlogCommentController extends Controller
{
    public function addComment(Request $request)
    {

        // $req = $request->all();
        // $gCaptcha = $req['g-recaptcha-response'];
        // $gCaptchaStatus = verify_captcha($gCaptcha);
        // if ($gCaptchaStatus) {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:50',
            'email' => 'required|email',
            'comment' => 'required|max:250'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to submit comment. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data = new BlogComments();
            $data->blog_id = trim($request->blog_id);
            $data->full_name = trim($request->full_name);
            $data->email = trim($request->email);
            $data->website = trim($request->website);
            $data->comment = trim($request->comment);

            $save_status =   $data->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Comment Submitted Successfully. Your comment will show after validation',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to submit comment. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
        // } else {
        //     return response()->json([
        //         'status' => false,
        //         'errors' => '',
        //         'message' => 'Captcha verification failed.',
        //         'redirect' => '0'
        //     ]);
        // }
    }



    public function showComment()
    {
        return view('admin.show-comments');
    }

    public function getCommentData(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('comments')->orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $url = route('admin.ajaxRequest');
                    if ($data->status == 0) {
                        $status_link = " <a class='dropdown-item' href='#' onclick=commentStatus('$url','$id')><i class='fas fa-check text-primary'></i> Mark Verify</a>";
                    } else {
                        $status_link = " <a class='dropdown-item' href='#' onclick=commentStatus('$url','$id')><i class='fas fa-times text-primary'></i> Mark Unverify</a>";
                    }
                    $btn = "
                        <div class='font-sans-serif position-static d-inline-block'>
                             <button class='btn dropdown-toggle' type='button'
                                 data-bs-toggle='dropdown'>
                                 <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                              </button>
                                <div class='dropdown-menu border py-2'>
                                 $status_link
                                    <a class='dropdown-item' href='#!'
                                        onclick=single_deleteConfirm('comments',[$id],'false','','')><i
                                            class='fas fa-trash text-danger'></i>
                                        Delete</a>
                                </div>
                            </div>
                    ";
                    return $btn;
                })
                ->addColumn('checkbox', function ($data) {
                    $checkbox = $data->id;
                    return $checkbox;
                })
                ->editColumn('blog', function ($data) {
                    $blogData = DB::table('blogs')->where('blog_id', '=', $data->blog_id)->get();
                    if (count($blogData) != 0) {
                        $blogTitle = $blogData[0]->title;
                        $route_name = $blogData[0]->route_name;
                        $blog_url = route('frontend.blogDetails', $route_name);
                        return "<a href='$blog_url' target='_blank'>$blogTitle</a>";
                    } else {
                        return "<span class='badge text-bg-danger'>Not Found</span>";
                    }
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == 0) {
                        return  "<span class='badge text-bg-danger'>Unverified</span>";
                    } else {
                        return  "<span class='badge text-bg-success'>Verified</span>";
                    }
                })
                ->editColumn('created_at', function ($data) {
                    return showDateTime($data->created_at);
                })
                ->editColumn('updated_at', function ($data) {
                    return showDateTime($data->updated_at);
                })


                ->rawColumns(['action', 'checkbox', 'blog', 'status'])
                ->toJson();
        }
    }
}
