<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class Admin_PostCategoryController extends Controller
{
    public function index()
    {
        $data = Category::orderBy('id', 'desc')->get();
        return view('admin.post-category')->with(compact('data'));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => 'required|unique:categories,slug'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add  category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $category_name = trim($request->category_name);
            $checkCat = Category::where('category_name', '=', "$category_name")->get();
            if (count($checkCat) != 0) {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'This category already added.',
                    'redirect' => '0'
                ]);
            } else {
                $data = new Category();

                $data->category_name = strtolower(trim($request->category_name));
                $data->slug = strtolower(trim($request->slug));

                $save_status = $data->save();

                if ($save_status === true) {
                    return response()->json([
                        'status' => true,
                        'errors' => "",
                        'message' => ' category added successfully.',
                        'redirect' => '0'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'errors' => '',
                        'message' => 'Failed to add  category. Please try again.',
                        'redirect' => '0'
                    ]);
                }
            }
        }
    }

    public function show($id)
    {
        $data = Category::where('id', '=', $id)->get();
        return view('admin.post-edit-category')->with(compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => "required|unique:categories,slug,$id"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update  category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data = Category::where('id', '=', $id)->get();

            $data[0]->category_name = strtolower(trim($request->category_name));
            $data[0]->slug = strtolower(trim($request->slug));

            $save_status = $data[0]->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => ' category updated successfully.',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update  category. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function showPostCategory(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit = route('admin.adminPostCategoryShow', $id);
                    $btn = "
                    <div class='dropdown action-dropdown'>
                            <button class='btn dropdown-toggle' type='button'
                                data-bs-toggle='dropdown'>
                                <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                            </button>
                            <div class='dropdown-menu border py-2'>
                                <a class='dropdown-item'
                                    href='$edit'><i
                                        class='fas fa-edit text-primary'></i> Edit</a>
                                <a class='dropdown-item' href='#!'
                                    onclick=single_deleteConfirm('categories',[$id],'false','','')><i
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
                ->editColumn('created_at', function ($data) {
                    return showDateTime($data->created_at);
                })
                ->editColumn('updated_at', function ($data) {
                    return showDateTime($data->updated_at);
                })
                ->rawColumns(['action', 'checkbox'])
                ->toJson();
        }
        return view('admin.post-category');
    }
}
