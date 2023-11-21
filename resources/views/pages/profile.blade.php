<x-layout>
    <x-slot:title>
        User Profile
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
<<<<<<< HEAD
                        <h3>Chishti Chats</h3>
                        <ul class="list-unstyled mb-4">
                            <li>Web Developer</li>
                            <li>Lucknow, UP, India</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <div class="social-widget text-lg-end">
                        <a class="wow fadeInUp" href="#"><i class="social_facebook"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.3s" href="#"><i class="social_linkedin"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.5s" href="#"><i class="social_instagram"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.7s" href="#"><i class="social_twitter"></i></a>
=======
                        <h3 class="mb-2">
                            @if ($user_id != false)
                                @php
                                    $user_data = userData($user_id);
                                @endphp
                                {{ $user_data->name }}
                            @endif
                        </h3>

                        <a class="btn follow_btn" href="#">
                            @php
                                echo DB::table('posts')
                                    ->where('user_id', '=', $user_id)
                                    ->count();
                            @endphp
                            Posts</a>
>>>>>>> 94ad20ce68054f9d3915b5b5f5bc350c9a6d473b
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
            {{-- <div class="row gy-4 gy-lg-0">
                <div class="col-lg-12 col-xl-12">
                    <div class="user-details-widget">
                        <div class="widget-header">
                            <div class="filter-tab flex-wrap">
                                <ul class="flex-wrap mb-0">
                                    <li><a class="active" href="javascript:void(0)">About</a></li>
                                    <!-- <li><a href="javascript:void(0)">Polls</a></li>
                                    <li><a href="javascript:void(0)">Questions</a></li>
                                    <li><a href="javascript:void(0)">Answers</a></li>
                                    <li><a href="javascript:void(0)">Best Answers</a></li>
                                    <li><a href="javascript:void(0)">Asked Questions</a></li>
                                    <li>
                                        <select class="custom-select" id="filter-tab-more">
                                            <option value="More">More</option>
                                            <option value="More">More</option>
                                            <option value="More">More</option>
                                        </select>

                                    </li> -->

                                </ul>
                            </div>
                        </div>
                        <div class="widget-body">
                            <p class="user-text">I am a Graphic Designer based in New York, specializing in User
                                Interface Design and Development. I build clean, appealing, and functional
                                interfaces which comply with the latest web standards. But that’s just a part of it.
                                Design is my life. It’s my five-star spa. It’s my roller-coaster. It’s something I
                                do before going to bed, and something I can’t wait to do in the mornings. Without
                                it, my world would be black and white.”</p>

                            <h4>Basic Information</h4>
                            <div class="row mt-3">
<<<<<<< HEAD
                                <!-- <div class="col-md-4">
                                    <h6><img src="{{asset('assets/img/user_details/calendar.png')}}" alt=""> Age</h6>
                                    <p>25 Years</p>
                                </div> -->
                                <!-- <div class="col-md-4">
                                    <h6><img src="{{asset('assets/img/user_details/badge.png')}}" alt=""> Experience</h6>
                                    <p>5 Years</p>
                                </div> -->
                                <!-- <div class="col-md-4">
                                    <h6><img src="{{asset('assets/img/user_details/phone.png')}}" alt=""> Phone</h6>
=======
                                <div class="col-md-4">
                                    <h6><img src="{{ asset('assets/img/user_details/calendar.png') }}" alt="">
                                        Age</h6>
                                    <p>25 Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{ asset('assets/img/user_details/badge.png') }}" alt="">
                                        Experience</h6>
                                    <p>5 Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{ asset('assets/img/user_details/phone.png') }}" alt="">
                                        Phone</h6>
>>>>>>> 94ad20ce68054f9d3915b5b5f5bc350c9a6d473b
                                    <p> <a href="tel:12345679">+1 (202) 456 789</a> </p>
                                </div> -->
                                <div class="col-md-4">
<<<<<<< HEAD
                                    <h6><img src="{{asset('assets/img/user_details/location.png')}}" alt=""> Location</h6>
                                    <p>Lucknow, UP, India</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{asset('assets/img/user_details/envelope.png')}}" alt=""> Email</h6>
                                    <p><a href="mailto:someone@example.com">someone@example.com</a></p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{asset('assets/img/user_details/link.png')}}" alt=""> Visit site</h6>
                                    <p> <a href="https://www.kmclu.ac.in/">www.kmclu.ac.in</a> </p>
=======
                                    <h6><img src="{{ asset('assets/img/user_details/location.png') }}" alt="">
                                        Location</h6>
                                    <p>Boston, MA, United States</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{ asset('assets/img/user_details/envelope.png') }}" alt="">
                                        Email</h6>
                                    <p><a href="mailto:gustavo@ama.com">gustavo@ama.com</a></p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="{{ asset('assets/img/user_details/link.png') }}" alt="">
                                        Visit site</h6>
                                    <p> <a href="https://www.ama.com/">www.ama.com</a></p>
>>>>>>> 94ad20ce68054f9d3915b5b5f5bc350c9a6d473b
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-30 gy-4 gy-xl-0">
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="{{ asset('assets/img/user_details/help-button.png') }}" alt="">
                                </div>
                                <div>
                                    <p>Questions</p>
                                    <h5 class="counter">15</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="{{ asset('assets/img/user_details/comment.png') }}" alt="">
                                </div>
                                <div>
                                    <p>Answers</p>
                                    <h5 class="counter">9</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="{{ asset('assets/img/user_details/crown.png') }}" alt="">
                                </div>
                                <div>
                                    <p>Best Answers</p>
                                    <h5 class="counter">299</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="{{ asset('assets/img/user_details/star.png') }}" alt="">
                                </div>
                                <div>
                                    <p>Points</p>
                                    <h5 class="counter">5</h5>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div> --}}

            @if ($user_id != false)
                @php
                    $user_data = userData($user_id);
                @endphp
                <div class="row">
                    <!-- Nav tabs -->
                    <div class="col-lg-3 mb-3">
                        <ul class="nav nav-tabs profile-tab" id="myTab" role="tablist">
                            <li class="nav-item profile-tab-nav" role="presentation">
                                <a class="nav-link text-dark active"
                                    onclick="setTabToLocalStorage('#profile' , 'profile-tab')" id="profile-tab"
                                    data-bs-toggle="tab" href="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item profile-tab-nav" role="presentation">
                                <a class="nav-link text-dark" id="create-posts-tab"
                                    onclick="setTabToLocalStorage('#create-posts' , 'profile-tab')" data-bs-toggle="tab"
                                    href="#create-posts" type="button" role="tab" aria-controls="create-posts"
                                    aria-selected="false">New Post</a>
                            </li>
                            <li class="nav-item profile-tab-nav" role="presentation">
                                <a class="nav-link text-dark" id="posts-tab"
                                    onclick="setTabToLocalStorage('#posts' , 'profile-tab')" data-bs-toggle="tab"
                                    href="#posts" type="button" role="tab" aria-controls="posts"
                                    aria-selected="false">All Posts</a>
                            </li>
                            <li class="nav-item profile-tab-nav" role="presentation">
                                <a href="{{ route('user_account.logout') }}" class="nav-link text-dark"
                                    aria-selected="false">Logout</a>

                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content profile-tab-content">
                                    <div class="tab-pane active" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <form method="post" id="profile-update-form"
                                            onsubmit="uploadData1('profile-update-form', '{{ route('user_account.editAccount') }}','profile-update-alert','profile-update-btn', event)">
                                            <div class="row">
                                                <div id="profile-update-alert"></div>
                                                <input type="hidden" name="user_id" value="{{ $user_id }}">
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Your Name</label>
                                                    <input type="text" name="name"
                                                        value="{{ $user_data->name }}" class="form-control" required>
                                                    <p class="form-feedback invalid-feedback" data-name="name"></p>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email"
                                                        value="{{ $user_data->email }}" class="form-control"
                                                        required>
                                                    <p class="form-feedback invalid-feedback" data-name="email"></p>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input type="number" name="phone"
                                                        value="{{ $user_data->phone }}" class="form-control"
                                                        required>
                                                    <p class="form-feedback invalid-feedback" data-name="phone"></p>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address"
                                                        value="{{ $user_data->address }}" class="form-control"
                                                        required>
                                                    <p class="form-feedback invalid-feedback" data-name="address"></p>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" id="profile-update-btn"
                                                        class="action_btn btn_small_two btn-text-medium round-btn-2">Update</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="create-posts" role="tabpanel"
                                        aria-labelledby="create-tab">

                                        {{-- <form method="post" id="create-post-form"
                                           action="{{ route('user_account.createPost', $user_id) }}" > --}}
                                        <form method="post" id="create-post-form"
                                            onsubmit="uploadData2('create-post-form','{{ route('user_account.createPost', $user_id) }}','create-posts-alert','create-posts-btn', event)">
                                            @csrf
                                            <div class="row">
                                                <div id="create-posts-alert"></div>

                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Category <span class="text-danger">
                                                            *</span> </label>
                                                    <select name="category_name" class="form-control" required>
                                                        <option value="">Select Category</option>
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
                                                    <p class="form-feedback invalid-feedback"
                                                        data-name="category_name"></p>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Title <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="title" class="form-control"
                                                        required>
                                                    <p class="form-feedback invalid-feedback" data-name="title"></p>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Short Description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="short_description"
                                                        class="form-control" required maxlength="255">
                                                    <p class="form-feedback invalid-feedback"
                                                        data-name="short_description"></p>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Post Content <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <textarea name="post_content" id="editor" cols="30" rows="10" class="form-control"></textarea>
                                                    <p class="form-feedback invalid-feedback"
                                                        data-name="post_content"></p>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" id="create-posts-btn"
                                                        class="action_btn btn_small_two btn-text-medium round-btn-2">Save</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane" id="posts" role="tabpanel"
                                        aria-labelledby="posts-tab">

                                        <div class="row">
                                            <h3>All Your Posts</h3>
                                            <div id="all-post-alert"></div>

                                            @php
                                                $all_posts = DB::table('posts')
                                                    ->where('user_id', '=', $user_id)
                                                    ->get();

                                            @endphp

                                            @if (count($all_posts) > 0)
                                                @foreach ($all_posts as $single_posts)
                                                    <div class="col-12 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5>{{ $single_posts->title }}</h5>

                                                                <p> {{ $single_posts->short_des }}</p>
                                                            </div>
                                                            <div class="card-footer d-flex">
                                                                <a href="{{ route('user_account.editPost', ['user_id' => $user_id, 'post_id' => $single_posts->id]) }}"
                                                                    class="btn btn-success">Edit</a>
                                                                <form method="POST" class="ms-3"
                                                                    id="delete-post{{ $single_posts->id }}"
                                                                    onsubmit="uploadData1('delete-post{{ $single_posts->id }}','{{ route('user_account.deletePost', $single_posts->id) }}','all-post-alert', 'delete-post-btn{{ $single_posts->id }}', event)">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger"
                                                                        id="delete-post-btn{{ $single_posts->id }}">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-12">
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>You have 0 post.</strong>
                                                    </div>

                                                </div>
                                            @endif


                                        </div>

                                    </div>

                                </div>
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
                                    <button class="action_btn btn_small_two btn-text-medium round-btn-2"
                                        type="button" onclick="show_modal('login-modal')">Sign In</button>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </div>
    </section>
    <!--================End Add Question Area =================-->

    @push('scripts')
        <script>
            let tab = localStorage.getItem('profile-tab')
            if (tab != null) {
                console.log(tab)
                $(".profile-tab .nav-link").removeClass('active');
                $(".profile-tab .nav-link[href='" + tab + "']").addClass('active')
                $('.profile-tab-content .tab-pane').removeClass('show active');
                $('.profile-tab-content ' + tab).addClass('show active');
            }
        </script>
    @endpush

</x-layout>
