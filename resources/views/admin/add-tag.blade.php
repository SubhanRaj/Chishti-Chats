@extends('admin.main')
@push('title')
    <title>Add Tags</title>
@endpush
@section('main-sec')
    <div class="container-fluid">
        <div class="row">
            {{-- *********** Breadcrumb Area Start *************** --}}
            <div class="col-12 p-0 mb-4">
                <div class="card p-0">
                    <div class="card-body m-0">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-2 text-md-start text-center">
                                <h5 style="font-size:18px" class="text-uppercase">Add Tags</h5>
                            </div>
                            <div class="col-md-6 col-12 mb-2 d-flex justify-content-center justify-content-md-end">
                                <nav style="--vaibhavCss-breadcrumb-divider: '»';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tags</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- *********** Breadcrumb Area End *************** --}}

            <div class="col-12 p-0 mt-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-primary" style="font-size: 16px">Add Tags</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="Tags-form"
                            onsubmit="uploadData1('Tags-form','{{ route('admin.saveTag') }}', 'alert-box', 'btn-box-1', event)"
                            class="mx-3 p-3" enctype="multipart/form-data">
                            @csrf
                            <div id="alert-box"></div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="tag" class="form-control" required
                                        placeholder="Enter Name">
                                    <p class="form-feedback invalid-feedback" data-name="tag"></p>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" required placeholder="Slug">
                                    <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                </div>
                            </div>

                            <div class="mb-3" id="btn-box-1">
                                <button class="btn btn-primary" type="submit" name="create"
                                    style="width:100% ; font-size:15px"> Add </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
