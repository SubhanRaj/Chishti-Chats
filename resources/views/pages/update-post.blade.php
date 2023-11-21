<x-layout>
    <x-slot:title>
        Update Post
    </x-slot:title>

    <!--================Banner Area =================-->
    <section class="banner-area-7 pt-lg-120 pt-90 pb-80 pb-lg-90 user-details-banner">
        <div class="banner-shapes">
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}'
                    src="{{ asset('assets/img/add-question/banner-shape-1.png') }}" alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}'
                    src="{{ asset('assets/img/add-question/banner-shape-2.png') }}" alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}'
                    src="{{ asset('assets/img/add-question/banner-shape-3.png') }}" alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}'
                    src="{{ asset('assets/img/add-question/banner-shape-4.png') }}" alt="shape" />
            </div>
        </div>
        <div class="container">
            <div class="row gy-3 pt-70 align-items-center">
                <div class="col-lg-8 d-sm-flex flex-lg-row flex-column align-items-center text-center text-sm-start">

                    <span class="user-profile-page-icon">
                        @php
                            $user_first_letter = firstLetter($user_id);
                        @endphp
                        @if ($user_first_letter != false)
                            {{ $user_first_letter }}
                        @endif
                    </span>
                    <div class="user-info ml-lg-60 ms-sm-5 mt-4 mt-lg-0">
                        <h3 class="mb-2">
                            @if ($user_id != false)
                                @php
                                    $user_data = userData($user_id);
                                @endphp
                                {{ $user_data->name }}
                            @endif
                        </h3>

                        <a class="btn follow_btn" href="#">@php
                            echo DB::table('posts')
                                ->where('user_id', '=', $user_id)
                                ->count();
                        @endphp Posts</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Area =================-->

    <section class="page_breadcrumb">
        <div class="container-fluid pl-60 pr-60">
            <div class="row">
                <div class="col-sm-7">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">User</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-5">

                </div>
            </div>
        </div>
    </section>

    <!--================End Forum Breadcrumb Area =================-->

    <!--================Add Question Area =================-->
    <section class=" user-details-area bg-disable pt-100 pb-120">
        <div class="container">

            @if ($user_id != false)

                <div class="row">
                    <!-- Nav tabs -->
                    <div class="col-12 mb-3">
                        <h4>Update Post</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" id="create-post-form"
                                    onsubmit="uploadData2('create-post-form','{{ route('user_account.updatePost', ['user_id' => $user_id, 'post_id' => $postData->id]) }}','create-posts-alert','create-posts-btn', event)">
                                    @csrf
                                    <div class="row">
                                        <div id="create-posts-alert"></div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Category <span class="text-danger">
                                                    *</span> </label>
                                            <select name="category_name" class="form-control" required>
                                                <option value="{{ $postData->category_id }}">
                                                    {{ getPostCategoryName($postData->category_id) }}</option>
                                                @php
                                                    $postCategory = DB::table('categories')
                                                        ->orderBy('category_name', 'asc')
                                                        ->get();
                                                @endphp
                                                @if (count($postCategory) > 0)
                                                    @foreach ($postCategory as $single_post_cat)
                                                        <option value="{{ $single_post_cat->id }}">
                                                            {{ $single_post_cat->category_name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <p class="form-feedback invalid-feedback" data-name="category_name"></p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Title <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="title" value="{{ $postData->title }}"
                                                class="form-control" required>
                                            <p class="form-feedback invalid-feedback" data-name="title"></p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Short Description <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="short_description"
                                                value="{{ $postData->short_des }}" class="form-control" required
                                                maxlength="255">
                                            <p class="form-feedback invalid-feedback" data-name="short_description"></p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Post Content <span class="text-danger">*</span>
                                            </label>
                                            <textarea name="post_content" id="editor" cols="30" rows="10" class="form-control">@phpecho html_entity_decode($postData->content);
                                                                                                                                                                                @endphp ?> ?> ?></textarea>
                                            <p class="form-feedback invalid-feedback" data-name="post_content"></p>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="create-posts-btn"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>



                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body py-4">
                                <h4 class="text-danger text-center">You are logout !</h4>
                                <p class="text-center"> Please login again to access your account.</p>
                                <p class="text-center pt-3">
                                    <button class="action_btn btn_small_two btn-text-medium round-btn-2" type="button"
                                        onclick="show_modal('login-modal')">Sign In</button>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </div>
    </section>
    <!--================End Add Question Area =================-->



</x-layout>
