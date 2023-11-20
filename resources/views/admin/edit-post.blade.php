@extends('admin.main')
@push('title')
    <title>Edit Post</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Post</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            @php
                $tags_arr = [];

                $post_id = $data->id;
                $post_tags = DB::table('post_tags')
                    ->where('post_id', '=', $post_id)
                    ->get();
                foreach ($post_tags as $key => $single_tag) {
                    array_push($tags_arr, $single_tag->tag_id);
                }
                
                
            @endphp

            <div class="col-12 p-0 mt-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-primary" style="font-size: 16px">Edit Post</h6>
                    </div>
                    <div class="card-body">


                        <form method="POST" id="post-form"
                            onsubmit="uploadData2('post-form','{{ route('admin.updatePost', $data->id) }}', 'alert-box', 'btn-box-1', event)"
                            class="mx-3 p-3" enctype="multipart/form-data">
                            @csrf
                            <div id="alert-box"></div>
                            <div class="row">

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Category <span class="text-danger">*</span> </label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="{{ $data->category_id }}">
                                            {{ getPostCategoryName($data->category_id) }}
                                        </option>
                                        @foreach ($postCategory as $singleblogCat)
                                            <option value="{{ $singleblogCat->id }}">{{ $singleblogCat->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <p class="form-feedback invalid-feedback" data-name="category_id"></p>

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" required
                                        placeholder="Enter Blog Title" value="{{ $data->title }}">
                                    <p class="form-feedback invalid-feedback" data-name="title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Slug <span class="text-danger">*</span></label>
                                    <input type="text" name="slug" class="form-control" required placeholder="Slug"
                                        value="{{ $data->slug }}">
                                    <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Tags <span class="text-danger">*</span>
                                    </label>
                                    <div class="border p-2 overflow-auto" style="max-height:300px">
                                        <!-- Hover added -->
                                        <div class="list-group">
                                            @php
                                                $tag_data = DB::table('tags')
                                                    ->orderBy('tag')
                                                    ->get();
                                            @endphp

                                            @foreach ($tag_data as $single_tag)
                                                @if (!in_array($single_tag->id, $tags_arr))
                                                    <label class='list-group-item'>
                                                        <input class='form-check-input me-1' type='checkbox'
                                                            value='{{ $single_tag->id }}' name='tags[]'>
                                                        {{ $single_tag->tag }}
                                                    </label>
                                                @else
                                                    <label class='list-group-item'>
                                                        <input class='form-check-input me-1' type='checkbox' checked
                                                            value='{{ $single_tag->id }}' name='tags[]'>
                                                        {{ $single_tag->tag }}
                                                    </label>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Feature Image<span class="text-danger">*</span></label>
                                    <div class="border border-dashed p-3">
                                        <div class="selected-media-box" id="selected-media-box">
                                            <input type="hidden" id="final-selected-media-input" name="file"
                                                value="{{ $data->file }}">
                                            @php
                                                $file = json_decode($data->file, true);
                                                echo getMediaFile($file[0]['file_id']);
                                            @endphp
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mt-2">
                                            <a style="background-color: transparent" href="javascript:;"
                                                data-bs-toggle="modal" data-bs-target="#media-modal-one"
                                                onclick="setMediaSelection('final-selected-media-input','selected-media-box',false)">
                                                <img src="{{ asset('admin-assets/assets/images/icons/attachment.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label"> Short Description ( Max: 255 ) <span
                                            class="text-danger">*</span></label>
                                    <textarea name="short_description" rows="5" class="form-control" maxlength="255" placeholder="Short Description">{{ $data->short_des }} </textarea>
                                    <p class="form-feedback invalid-feedback" data-name="short_description"></p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label"> Blog Content <span class="text-danger">*</span></label>
                                    <textarea name="content" id="editor" cols="30" rows="10" class="form-control">
                                    {{ html_entity_decode($data->content) }}
                                </textarea>
                                    <p class="form-feedback invalid-feedback" data-name="content"></p>
                                </div>
                            </div>

                            <div class="mb-3" id="btn-box-1">
                                <button class="btn btn-primary" type="submit" name="create"
                                    style="width:100% ; font-size:15px"> Update </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
