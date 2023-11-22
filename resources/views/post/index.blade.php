<x-layout>
    <x-slot:title>
        {{ __('Posts') }}
    </x-slot:title>
    <x-search>
        @if (isset($query))
        <x-slot:query>
            {{ $query }}
        </x-slot:query>
        @else
        <x-slot:query>

        </x-slot:query>
        @endif

    </x-search>
    <!--================Forum Breadcrumb Area =================-->

    <section class="page_breadcrumb">
        <div class="container-fluid pl-60 pr-60">
            <div class="row">
                <div class="col-sm-7">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Posts</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-5">
                    <a href="#" class="date"><i class="icon_clock_alt"></i> Updated on {{ date('d M, Y') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Forum Breadcrumb Area =================-->

    <!--================Forum Body Area =================-->
    <section class="forum_sidebar_area" id="sticky_doc">
        <div class="container-fluid pl-60 pr-60">
            <div class="row">
                <div class="col-xl-2 d-none d-xl-block">
                    <div class="left_side_forum">
                        <aside class="l_widget forum_list">
                            <h3 class="wd_title">Categories</h3>
                            <ul class="navbar-nav">

                                @php
                                $category = DB::table('categories')
                                ->orderBy('category_name', 'asc')
                                ->get();
                                @endphp
                                @if (count($category))
                                @foreach ($category as $single_category)
                                <li class="nav-item">
                                    <a href="{{ route('categories.show', $single_category->slug) }}" class="text-capitalize" ><i class="icon_lightbulb_alt "></i>{{ $single_category->category_name }}</a>
                                </li>
                                @endforeach
                                @endif

                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="forum_topic_list_inner">
                        {{-- <div class="topics-filter d-xl-none">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <ion-icon name="earth-outline"></ion-icon> View all
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <ion-icon name="swap-horizontal-outline"></ion-icon> General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <ion-icon name="bulb-outline"></ion-icon> Ideas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <ion-icon name="bulb-outline"></ion-icon> User Feedback
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="forum_l_inner">

                            <div class="forum_body">
                                <ul class="navbar-nav topic_list">
                                    @foreach ($posts as $post)
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <span class="user-profile-icon">

                                                    @php
                                                $user_first_letter = firstLetter($post->user_id);
                                                @endphp
                                                @if ($user_first_letter != false)
                                                {{ $user_first_letter }}
                                                @endif
                                            </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="{{ route('posts.show', $post->slug) }}">
                                                        <h4>
                                                            {{ $post->title }}
                                                        </h4>
                                                    </a>
                                                </div>

                                                <h6>
                                                    <img src="{{ asset('assets/img/svg/hashtag.svg') }}" alt="">
                                                    @php
                                                    echo getPostCategoryName($post->category_id);
                                                    @endphp
                                                </h6>

                                                <h6>
                                                    <i class="icon_clock_alt"></i>
                                                    {{ $post->created_at->diffForHumans() }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row pagination_inner">
                            {{-- <div class="col-lg-2">
                                <h6>Total: <span>
                                        {{ $posts->total() }}
                            </span></h6>
                        </div> --}}
                        {{-- <div class="col-lg-8">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="arrow_carrot-left"></i> Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">21</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next <i
                                                    class="arrow_carrot-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="right_side_forum">
                    <aside class="r_widget qustion_wd">
                        <button class="btn" type="button" onclick="window.location.href='{{ route('profile') }}'">
                            <img src="{{ asset('assets/img/forum/helpful-user/question-1.png') }}" alt="">Ask Question <i class="arrow_carrot-right"></i>
                        </button>
                    </aside>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================End Forum Body Area =================-->
</x-layout>