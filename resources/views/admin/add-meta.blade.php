@extends('admin.main')
@push('title')
    <title>Add Meta</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Meta</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Meta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <form method="POST" id="Meta-form"
                            onsubmit="uploadData1('Meta-form','{{ route('admin.addMetaSave') }}', 'alert-box', 'btn-box-1', event)"
                            class="mx-3 p-3" enctype="multipart/form-data">
                            @csrf
                            <div id="alert-box"></div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Page Name</label>
                                    <input type="text" name="page_name" class="form-control" required
                                        placeholder="Enter Page Name">
                                    <p class="form-feedback invalid-feedback" data-name="page_name"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Url</label>
                                    <input type="text" name="url" class="form-control" required
                                        placeholder="Enter url">
                                    <p class="form-feedback invalid-feedback" data-name="url"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" required
                                        placeholder="Page Title">
                                    <p class="form-feedback invalid-feedback" data-name="title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Keywords</label>
                                    <input type="text" name="Keywords" class="form-control" required
                                        placeholder="Keywords">
                                    <p class="form-feedback invalid-feedback" data-name="Keywords"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Page Type / Page Topic</label>
                                    <input type="text" name="page_topic" class="form-control" required
                                        placeholder="Page Topic">
                                    <p class="form-feedback invalid-feedback" data-name="page_topic"></p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Distribution</label>
                                    <select name="distribution" class="form-control" required>
                                        <option value="Global">Global</option>
                                        <option value="Local">Local</option>
                                        <option value="IU">IU</option>
                                    </select>
                                    <p class="form-feedback invalid-feedback" data-name="language"></p>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Og Url</label>
                                    <input type="text" name="og_url" class="form-control" required placeholder="Og Url">
                                    <p class="form-feedback invalid-feedback" data-name="og_url"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Og Title</label>
                                    <input type="text" name="og_title" class="form-control" required
                                        placeholder="Og Title">
                                    <p class="form-feedback invalid-feedback" data-name="og_title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Og Image Url</label>
                                    <input type="text" name="og_img_url" class="form-control" required
                                        placeholder="Og Image Url">
                                    <p class="form-feedback invalid-feedback" data-name="og_img_url"></p>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Twitter Title</label>
                                    <input type="text" name="twitter_title" class="form-control" required
                                        placeholder="Twitter Title">
                                    <p class="form-feedback invalid-feedback" data-name="twitter_title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Twitter Image Url</label>
                                    <input type="text" name="twitter_img_url" class="form-control" required
                                        placeholder="Twitter Image Url">
                                    <p class="form-feedback invalid-feedback" data-name="twitter_img_url"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Decription</label>
                                    <textarea name="decription" class="form-control" required></textarea>
                                    <p class="form-feedback invalid-feedback" data-name="decription"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Og Description</label>
                                    <textarea name="og_decription" class="form-control" required></textarea>
                                    <p class="form-feedback invalid-feedback" data-name="og_description"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Twitter Description</label>
                                    <textarea name="twitter_description" class="form-control" required></textarea>
                                    <p class="form-feedback invalid-feedback" data-name="twitter_description"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Schema</label>
                                    <textarea name="schema" class="form-control"></textarea>
                                    <p class="form-feedback invalid-feedback" data-name="schema"></p>
                                </div>
                            </div>

                            <div class="mb-3" id="btn-box-1">
                                <button class="btn btn-primary" type="submit" name="create"
                                    style="width:100% ; font-size:15px"> Add
                                </button>
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
