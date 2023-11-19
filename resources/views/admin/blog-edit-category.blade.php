@extends('admin.main')
@push('title')
    <title>Edit Blog Category</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Edit Blog Category</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Blog Category</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Edit Blog Category</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">

                                        <form method="POST" id="blog-cat-form"
                                            onsubmit="uploadData1('blog-cat-form', '{{ route('admin.adminBlogCategoryUpdate', $data[0]->id) }}', 'alert-box', 'btn-box-1', event)"
                                            class="shadow mx-3 p-3">
                                            @csrf
                                            <div id="alert-box"></div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Category Name</label>
                                                <input type="text" name="category_name" class="form-control" required
                                                    placeholder="Category Name" value=" {{ $data[0]->cat_name }}">
                                                <p class="form-feedback invalid-feedback" data-name="category_name"></p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Slug</label>
                                                <input type="text" name="slug" class="form-control" required
                                                    placeholder="Slug" value=" {{ $data[0]->slug }}">
                                                <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                            </div>
                                            <div class="mb-3" id="btn-box-1">
                                                <button class="btn btn-primary " type="submit" name="create"
                                                    style="width:100% ; font-size:15px"> Update </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
