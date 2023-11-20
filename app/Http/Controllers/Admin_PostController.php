<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use App\Models\PostTagModel;
use App\Models\TagsModel;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class Admin_PostController extends Controller
{

    public function addPostIndex()
    {
        $postCategory = Category::orderBy('category_name', 'desc')->get();
        return view('admin.add-post')->with(compact('postCategory'));
    }

    public function addPostSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => "required",
            'title' => "required",
            'slug' => "required|unique:posts,slug",
            'file' => "required",
            'short_description' => "required",
            'content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add post',
                'redirect' => '0'
            ]);
        } else {
            $content = htmlentities($request->content);

            $saveData = new Post();
            $saveData->user_id = 'Admin';
            $saveData->category_id = $request->category_id;
            $saveData->title = sanitizeInput($request->title);
            $saveData->slug = sanitizeInput($request->slug);
            $saveData->file = sanitizeInput($request->file);
            $saveData->short_des = sanitizeInput($request->short_description);
            $saveData->content = $content;

            try {
                $saveStatus = $saveData->save();

                $post_id_data = Post::orderBy('id', 'desc')->limit(1)->first();
                $post_id = $post_id_data->id;
                $tags = $request->tags;
                foreach ($tags as $tag) {
                    $data = new PostTagModel();
                    $data->tag_id = $tag;
                    $data->post_id = $post_id;

                    try {
                        $data->save();
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                }

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

    public function viewPosts()
    {
        $data = Post::orderBy('id', 'desc')->get();
        return view('admin.view-post')->with(compact('data'));
    }

    public function editPost($id)
    {
        $data = Post::with('tags')->where('id', '=', $id)->first();
        
        $postCategory = Category::orderBy('category_name', 'desc')->get();
        return view('admin.edit-post')->with(compact('data', 'postCategory'));
    }

    public function updatePost(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => "required",
            'title' => "required",
            'slug' => "required|unique:posts,slug,$id",
            'file' => "required",
            'short_description' => "required",
            'tags' => "required",
            'content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update post',
                'redirect' => '0'
            ]);
        } else {



            $saveData = Post::where('id', '=', "$id")->get();



            PostTagModel::where('post_id', '=', $id)->delete();

            $content = htmlentities($request->content);

            $saveData[0]->category_id = $request->category_id;
            $saveData[0]->slug = sanitizeInput($request->slug);
            $saveData[0]->title = sanitizeInput($request->title);
            $saveData[0]->file = sanitizeInput($request->file);
            $saveData[0]->content = $content;
            $saveData[0]->short_des = sanitizeInput($request->short_description);


            try {
                $saveStatus = $saveData[0]->save();

                $tags = $request->tags;
                foreach ($tags as $tag) {
                    $data = new PostTagModel();
                    $data->tag_id = $tag;
                    $data->post_id = $id;

                    try {
                        $data->save();
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                }

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


    function getPostData(Request $request)
    {

        if ($request->ajax()) {
            $data = Post::orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit_url = route('admin.editPost', $id);
                    $btn = "
                    <div class='dropdown action-dropdown'>
                            <button class='btn dropdown-toggle' type='button'
                                data-bs-toggle='dropdown'>
                                <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                            </button>
                            <div class='dropdown-menu border py-2'>
                                <a class='dropdown-item'
                                    href='$edit_url'><i
                                        class='fas fa-edit text-primary'></i> Edit</a>
                                <a class='dropdown-item' href='#!'
                                    onclick=single_deleteConfirm('posts',[$id],'false','','')><i
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

                ->editColumn('file', function ($data) {
                    $file = json_decode($data->file, true);
                    return getMediaFile($file[0]['file_id']);
                })
                ->editColumn('created_at', function ($data) {
                    return showDateTime($data->created_at);
                })
                ->editColumn('updated_at', function ($data) {
                    return showDateTime($data->updated_at);
                })
                ->rawColumns(['action', 'checkbox', 'file', 'title'])
                ->toJson();
        }

        return view('admin.view-post');
    }
}
