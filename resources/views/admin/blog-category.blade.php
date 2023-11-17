@extends('admin.main')
@push('title')
    <title>Blog Category</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Blog Category</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Add Blog Category</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 mb-3">

                                        <form method="POST" id="blog-cat-form"
                                            onsubmit="uploadData1('blog-cat-form', '{{ route('admin.adminBlogCategorySave') }}', 'alert-box', 'btn-box-1', event)"
                                            class="shadow mx-3 p-3">
                                            @csrf
                                            <div id="alert-box"></div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Category Name</label>
                                                <input type="text" name="category_name" class="form-control" required
                                                    placeholder="Category Name">
                                                <p class="form-feedback invalid-feedback" data-name="category_name"></p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Category Slug</label>
                                                <input type="text" name="slug" class="form-control" required
                                                    placeholder="Slug">
                                                <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                            </div>
                                            <div class="mb-3" id="btn-box-1">
                                                <button class="btn btn-primary " type="submit" name="create"
                                                    style="width:100% ; font-size:15px"> Add </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div
                                        class="col-md-4 mb-md-0 mb-2 d-flex justify-content-md-start justify-content-center align-items-center">
                                        <h6 class="text-primary" style="font-size: 16px">All Category Details</h6>
                                    </div>
                                    <div
                                        class="col-md-8 d-flex justify-content-md-end justify-content-center align-items-center">
                                        <div class="d-flex justify-content-end align-items-center"
                                            id="category-table-action">
                                            <div class="d-flex justify-content-center align-items-center checkbox-selected"
                                                id="category-selected">
                                                {{-- No. of Selected Item will show here  --}}
                                            </div>

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                
                                                <button type="button" class="btn btn-danger disabled-btn"
                                                    data-bs-toggle="tooltip" data-bs-placement="auto" data-bs-title="Delete"
                                                    disabled
                                                    onclick="deleteConfirm('category-delete-all','blog_category', 'false','','')"><i
                                                        class="fa-regular fa-trash"></i>
                                                    <input type="hidden" value="" id="category-delete-all">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="mt-2 mx-2 mb-3">
                                    <table id="category-table"
                                        class="table table-hover table-borderless w-100 border-bottom"
                                        style="min-width: 500px">
                                        <thead class="bg-light border-0">
                                            <tr>
                                                <th></th>
                                                <th class="text-center text-nowrap">Category Id</th>
                                                <th class="text-center text-nowrap">Category Name</th>
                                                <th class="text-center text-nowrap">Category Slug</th>
                                                <th class="text-center text-nowrap">Created At</th>
                                                <th class="text-center text-nowrap">Updated At</th>
                                                <th class="text-center text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- Data will load here using ajax server side . --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    @push('scripts')
        <script>
            let blog_category = ['cat_id', 'cat_name', 'slug'];
            initServerSideDataTable(
                "category-table",
                "/admin/show-blog-category",
                "category-selected",
                createColumn(blog_category),
                "category-table-action"
            );
        </script>
    @endpush
@endsection
