<x-layout>
    <x-slot:title>Home </x-slot:title>
    <x-banner />

    <!--================Ama Statistics Area =================-->
    <section class="forum-statistics">
        <div class="container">
            <div class="row align-items-center gy-lg-0 gy-4">
                <div class="col-lg-8">
                    <div class="row gy-4 gy-sm-0">
                        <div class="col-sm-4">
                            <div
                                class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start">
                                <img src="{{ asset('assets/img/home_two/icon-1.svg') }}" alt="icon">
                                <div>
                                    <h4>
                                        <span class="counter d-inline-block">
                                            @php
                                                echo DB::table('users')
                                                    ->where('status', '=', 1)
                                                    ->count();
                                            @endphp

                                        </span>+
                                    </h4>
                                    <p>members</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start"
                                data-wow-delay="0.3s">
                                <img src="{{ asset('assets/img/home_two/icon-2.svg') }}" alt="icon">
                                <div>
                                    <h4 class="counter">

                                        {{ $total_posts }}
                                    </h4>
                                    <p>posts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start"
                                data-wow-delay="0.6s">
                                <img src="{{ asset('assets/img/home_two/category.png') }}" width="50px"
                                    alt="icon">
                                <div>
                                    <h4 class="counter">
                                        {{ $total_categories }}
                                    </h4>
                                    <p>
                                        categories
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-lg-end text-center wow fadeInLeft" data-wow-delay="0.3s">
                    <button type="button" class="action_btn btn_bg round-btn"
                        onclick="show_modal('register-modal')">Get Started Now</button>
                </div>
            </div>
        </div>
    </section>
    <!--================End Ama Statistics Area =================-->

    <!--================Community Area =================-->
    <section class="community-area bg-disable">
        <div class="container">
            <div class="d-flex justify-content-between mb-35 flex-wrap">
                <h2 class="section-title-h2 mb-0">Recent Posts & Categories</h2>
                <div><a href="{{ route('profile') }}" class="doc_border_btn doc_border_btn_two sec-btn-blue mt-2">New
                        Post</a></div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Show Recent
                        Categories</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Show Recent
                        Posts</button>
                </li>
            </ul>
            <div class="tab-content mt-30" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row gy-4 justify-content-center">
                        @foreach ($categories as $category)
                            <div class="col-md-6 col-lg-4">
                                <a href="{{ route('categories.show', $category->slug) }}">
                                    <div class="community-topic-widget-box wow fadeInUp">
                                        <img src="{{ asset('assets/img/home_two/lightbulb.svg') }}" alt="icon">
                                        <div class="box-content">
                                            <a href="{{ route('categories.show', $category->slug) }}">
                                                <h5 style="text-transform: capitalize;">
                                                
                                                
                                                {{ $category->category_name }}
                                                </h5>
                                            </a>
                                            <span>
                                                @php
                                                    echo DB::table('posts')
                                                        ->where('category_id', '=', $category->id)
                                                        ->count();
                                                @endphp
                                                posts</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <a href="{{ route('categories.index') }}"
                                class="dbl-arrow-upper show-more-btn show-more-round w-100 mt-70 wow fadeInUp">
                                <div class="arrow-cont">
                                    <i class="arrow_carrot-down first"></i>
                                    <i class="arrow_carrot-down second"></i>
                                </div> Show More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @foreach ($posts as $post)
                        <div class="single-forum-post-widget  ">
                            <a href="{{ route('posts.show', $post->slug) }}" class="d-block">
                                <div class="post-content">
                                    <div class="post-title">
                                        <h6>

                                            {{ $post->title }}

                                            <span><i class="icon_check_alt2"></i></span>
                                        </h6>
                                    </div>
                                    <div class="post-info">
                                        <div class="author">
                                            <img src="{{ asset('assets/img/user-circle-alt.svg') }}" alt="icon">
                                            @php
                                                $user_data = userData($post->user_id);
                                            @endphp
                                            @if ($user_data != false)
                                                {{ $user_data->name }}
                                            @else
                                                Unknown
                                            @endif
                                        </div>
                                        <div class="post-time">
                                            <img src="{{ asset('assets/img/time-outline.svg') }}"
                                                alt="">{{ $post->created_at->diffForHumans() }}
                                        </div>

                                    </div>

                                </div>
                            </a>
                            <div class="post-reach">

                                <div class="post-like">
                                    <img src="{{ asset('assets/img/forum/thumbs-up-outline.svg') }}" alt="icon">250
                                    Likes
                                </div>
                                <div class="post-comment">
                                    <img src="{{ asset('assets/img/forum/chatbubbles-outline.svg') }}"
                                        alt="icon">155 Replies
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <a href="{{ route('posts.index') }}"
                                class="dbl-arrow-upper show-more-btn show-more-round w-100 mt-70 wow fadeInUp">
                                <div class="arrow-cont">
                                    <i class="arrow_carrot-down first"></i>
                                    <i class="arrow_carrot-down second"></i>
                                </div> Show More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Community Area =================-->

    <!--================Call To Action Area =================-->
    <section class="call-to-action cta-bg-2">
        <div class="bg-shapes">
            <div class="shape">
                <img src="{{ asset('assets/img/home_two/cta-bg-1.png') }}" alt="">
            </div>
            <div class="shape">
                <img src="{{ asset('assets/img/home_two/cta-bg-2.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row action-content-wrapper gy-lg-0 gy-4">
                <div class="col-lg-7 px-lg-0 text-lg-start text-center">
                    <div class="action-title-wrap title-img justify-content-lg-start justify-content-center">
                        <h2 class="action-title title-2 ">New Here? Join the Community!</h2>
                    </div>
                    <p class="mb-0">
                        Connect with fellow students of our university and build a strong community together.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <button type="button" class="action_btn btn_bg round-btn"
                        onclick="show_modal('register-modal')">
                        <i class="icon_group"></i> Join Community
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--================End Call To Action Area =================-->
</x-layout>
