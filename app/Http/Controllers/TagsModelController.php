<?php

namespace App\Http\Controllers;

use App\Models\TagsModel;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;



class TagsModelController extends Controller
{
    public function addTagIndex()
    {
        return view('admin.add-tag');
    }
    public function saveTag(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag' => "required|unique:tags,tag",
            'slug' => "required|unique:tags,slug"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add tag. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data = new TagsModel();
            $data->tag = strtolower(trim($request->tag));
            $data->slug = strtolower(trim($request->slug));

            $save_status = $data->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Tag added successfully.',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to add tag. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function editTag($id)
    {
        $data = TagsModel::find($id);
        return view('admin.edit-tag')->with(compact('data'));
    }

    public function updateTag(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tag' => "required|unique:tags,tag,$id",
            'slug' => "required|unique:tags,slug,$id"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update tag. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data = TagsModel::find($id);
            $data->tag = strtolower(trim($request->tag));
            $data->slug = strtolower(trim($request->slug));

            $save_status = $data->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Tag updated successfully.',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update tag. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function showTag(Request $request)
    {


        if ($request->ajax()) {
            $data = TagsModel::orderBy('tag', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit = route('admin.editTag', $id);
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
                            onclick=single_deleteConfirm('tags',[$id],'false','','')><i
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

        return view('admin.view-tag');
    }
}
