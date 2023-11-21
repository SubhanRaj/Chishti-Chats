<x-layout>
    <x-slot:title>
        {{ __('Posts') }}
    </x-slot:title>
    <x-search />
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
                                @for ($i = 0; $i < 5; $i++) 
                                <li class="nav-item">
                                    <a href="#"><i class="icon_lightbulb_alt"></i>General</a>
                                </li>
                                @endfor
                                <li class="active nav-item">
                                    <a href="#"><i class=""></i>View all</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="forum_topic_list_inner">
                        <div class="topics-filter d-xl-none">
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
                        </div>
                        <div class="forum_l_inner">
                            <div class="forum_head d-flex justify-content-between">
                                <ul class="nav right">
                                    <li>
                                        <div class="dropdown right_dir dropstart">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Tags <i class="arrow_carrot-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h3 class="title">Filter by Tags</h3>
                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Search Tags">
                                                </form>
                                                <div class="all_users scroll">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <a class="dropdown-item" href="#"><span
                                                                class="color red"></span> bugs</a>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown right_dir dropstart">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Sort <i class="arrow_carrot-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="all_users short-by scroll">
                                                    <a class="dropdown-item active-short" href="#">
                                                        <ion-icon name="checkmark-outline"></ion-icon> Newest
                                                    </a>
                                                    <a class="dropdown-item" href="#"> Oldest </a>
                                                    <a class="dropdown-item" href="#"> Most commented </a>
                                                    <a class="dropdown-item" href="#"> Least commented </a>
                                                    <a class="dropdown-item" href="#"> Recently updated </a>
                                                    <a class="dropdown-item" href="#"> Recently updated </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="forum_body">
                                <ul class="navbar-nav topic_list">
                                    @foreach ($posts as $post)
                                        <li>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('assets/img/forum/f-user-1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="t_title">
                                                        <a href="{{ route('posts.show', $post->slug) }}">
                                                            <h4>
                                                                {{ $post->title }}
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <a href="#">
                                                        <h6>
                                                            <img src="{{ asset('assets/img/svg/hashtag.svg') }}"
                                                                alt=""> General
                                                        </h6>
                                                    </a>
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
                            <div class="col-lg-2">
                                <h6>Total: <span>
                                        {{ $posts->total() }}
                                    </span></h6>
                            </div>
                            <div class="col-lg-8">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="right_side_forum">
                        <aside class="r_widget qustion_wd">
                            <button class="btn" type="button"
                                onclick="window.location.href='{{ route('posts.create') }}'">
                                <img src="{{ asset('assets/img/forum/helpful-user/question-1.png') }}"
                                    alt="">Ask Question <i class="arrow_carrot-right"></i>
                            </button>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Forum Body Area =================-->
</x-layout>
