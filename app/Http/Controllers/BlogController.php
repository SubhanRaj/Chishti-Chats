<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Models\BlogCategoryModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    public function index(Request $request)
    {

        $popular_blog = BlogModel::where([
            ['popular', '=', '1'],
            ['status', '=', 'published'],
        ])->get();


        $query = $request->all();
        if (count($query) != 0) {
            $category = sanitizeInput(strtolower($request->category));
            $cat_data = BlogCategoryModel::where('slug', '=', $category)->get();
            if (count($cat_data) != 0) {
                $cat_id = $cat_data[0]->cat_id;
                $blog_data = BlogModel::where([
                    ['cat_id', '=', $cat_id],
                    ['status', '=', 'published']
                ])
                    ->orderBy("id", 'desc')
                    ->get();
                return view('frontend.blog')->with(compact('blog_data', 'popular_blog'));
            } else {
                $blog_data  = [];
                return view('frontend.blog')->with(compact('blog_data', 'popular_blog'));
            }
        } else {
            $blog_data = BlogModel::where('status', '=', 'published')->orderBy("id", 'desc')->get();
            return view('frontend.blog')->with(compact('blog_data', 'popular_blog'));
        }
    }
    public function blogDetails($blogname)
    {
        $popular_blog = BlogModel::where([
            ['popular', '=', '1'],
            ['status', '=', 'published'],
        ])
            ->orderBy("id", 'desc')
            ->get();
        $blog_name = strtolower($blogname);
        $blogData = BlogModel::where([
            ['route_name', '=', "$blog_name"],
            ['status', '=', "published"],
        ])->get();

        return view('frontend.blog-details')->with(compact('blogData', 'popular_blog'));
    }

    public function addBlogIndex()
    {
        $blogCategory = BlogCategoryModel::orderBy('cat_name', 'desc')->get();
        return view('admin.add-blogs')->with(compact('blogCategory'));
    }

    public function addBlogSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'slug' => "required|unique:blogs,route_name",
            'file' => "required",
            'short_description' => "required",
            'blog_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add blog',
                'redirect' => '0'
            ]);
        } else {
            $blog_content = htmlentities($request->blog_content);

            $file = json_decode($request->file, true);
            $file_id = $file[0]['file_id'];


            $saveData = new BlogModel();
            $saveData->cat_id = $request->category_name;
            $saveData->blog_id = uid_generator();
            $saveData->route_name = trim($request->slug);
            $saveData->title = trim($request->title);
            $saveData->main_pic = $file_id;
            $saveData->popular = $request->popular;
            $saveData->short_des = sanitizeInput($request->short_description);
            $saveData->blog_content = $blog_content;
            $saveStatus = $saveData->save();
            if ($saveStatus === true) {
                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Blog added successfully',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to add blog',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function viewBlogs()
    {
        $data = BlogModel::orderBy('id', 'desc')->get();
        return view('admin.view-blog')->with(compact('data'));
    }

    public function editBlog($id)
    {
        $data = BlogModel::where('id', '=', $id)->get();
        $blogCategory = BlogCategoryModel::orderBy('cat_name', 'desc')->get();
        return view('admin.edit-blog')->with(compact('data', 'blogCategory'));
    }

    public function updateBlog(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'short_description' => "required",
            'blog_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add blog',
                'redirect' => '0'
            ]);
        } else {
            $saveData =  BlogModel::where('id', '=', "$id")->get();
            if ($request->has('file') && $request->file != '') {
                $files = json_decode($request->file, true);
                $file_id = $files[0]['file_id'];
            } else {
                $file_id = $saveData[0]->main_pic;
            }
            $blog_content = htmlentities($request->blog_content);

            $saveData[0]->cat_id = $request->category_name;
            $saveData[0]->route_name = trim($request->slug);
            $saveData[0]->title = trim($request->title);
            $saveData[0]->main_pic = $file_id;
            $saveData[0]->blog_content = $blog_content;
            $saveData[0]->popular = $request->popular;
            $saveData[0]->short_des = sanitizeInput($request->short_description);
            $saveData[0]->status = $request->status;
            $saveStatus = $saveData[0]->save();

            if ($saveStatus === true) {
                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Blog updated successfully',
                    'redirect' =>  '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update blog',
                    'redirect' =>  '0'
                ]);
            }
        }
    }


    function getBlogData(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('blogs')->orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit_url =  route('admin.editBlog', $id);
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
                                    onclick=single_deleteConfirm('blogs',[$id],'false','','')><i
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
                ->editColumn('cat_id', function ($data) {
                    return getBlogCategoryName($data->cat_id);
                })
                ->editColumn('main_pic', function ($data) {
                    return getMediaFile($data->main_pic);
                })
                ->editColumn('title', function ($data) {
                    $href = route('frontend.blogDetails', $data->route_name);
                    return  "<a href='$href' target='_blank' class='text-primary'>View</a>";
                })
                ->rawColumns(['action', 'checkbox', 'main_pic', 'title'])
                ->toJson();
        }

        return view('admin.view-blog');
    }
}
