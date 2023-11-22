<x-layout>
    <x-slot:title>
        {{ $category->category_name }}
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
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('categories.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="#">{{ $category->category_name }}</a></li>
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
    <section class="doc_blog_grid_area sec_pad forum-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="answer-action shadow">
                        <div class="action-content">
                            <div class="image-wrap">
                                <img src="{{ asset('assets/img/home_support/answer.png') }}" alt="answer action">
                            </div>
                            <div class="content">
                                <h2 class="ans-title">Have a Question?</h2>
                                <p>Ask below or search for similar questions</p>
                            </div>
                        </div>
                        <!-- /.action-content -->
                        <div class="action-button-container">
                            <a href="{{ route('profile') }}" class="action_btn btn-ans">Ask a Question</a>
                        </div>
                        <!-- /.action-button-container -->
                    </div>
                    <!-- /.answer-action -->

                    <div class="post-header">
                        {{-- <div class="support-info">
                            <ul class="support-total-info">
                                <li class="open-ticket"><i class="icon_info_alt"></i>576 Open</li>
                                <li class="close-ticket"><i class="icon_check"></i><a href="#">2,974 Closed</a>
                                </li>
                            </ul>
                        </div> --}}
                        <!-- /.support-info -->
                        {{-- <div class="support-category-menus">
                            <ul class="category-menu">
                                <li>
                                    <div class="dropdown dropstart">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Sort
                                            <i class="arrow_carrot-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <h3 class="title">Sort by</h3>
                                            <div class="short-by">
                                                <a class="dropdown-item active-short" href="#0">Newest</a>
                                                <a class="dropdown-item" href="#0">Oldest</a>
                                                <a class="dropdown-item" href="#0">Most commented</a>
                                                <a class="dropdown-item" href="#0">Least commented</a>
                                                <a class="dropdown-item" href="#0">Recently updated</a>
                                                <a class="dropdown-item" href="#0">Least recently updated</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                        <!-- /.support-category-menus -->
                    </div>
                    <!-- /.post-header -->

                    <div class="community-posts-wrapper bb-radius">
                        @if (!is_null($posts))
                            @foreach ($posts as $single_post)
                                <div class="community-post style-two">
                                    <div class="post-content">
                                        <div class="author-avatar">
                                            <span class="user-profile-icon">
                                                @php
                                                    $user_data = userData($single_post->user_id);
                                                @endphp
                                                @php
                                                    $user_first_letter = firstLetter($single_post->user_id);
                                                @endphp
                                                @if ($user_first_letter !== false)
                                                    {{ $user_first_letter }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="entry-content">
                                            <h3 class="post-title">
                                                <a
                                                    href="{{ route('posts.show', $single_post->slug) }}">{{ $single_post->title }}</a>
                                            </h3>
                                            <ul class="meta">
                                                <li><img src="{{ asset('assets/img/home_support/cmm1.png') }}"
                                                        alt="cmm">
                                                    @php
                                                        echo getPostCategoryName($single_post->category_id);
                                                    @endphp
                                                </li>
                                                <li><i class="icon_calendar"></i>
                                                    {{ $single_post->created_at->format('d-F-Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-meta-wrapper">
                                        <ul class="post-meta-info">
                                            <li><a href="#"><i class="icon_chat_alt"></i>
                                                    @php
                                                        echo DB::table('comments')
                                                            ->where('post_id', '=', $single_post->id)
                                                            ->count();
                                                    @endphp
                                                </a></li>
                                            {{-- <li><a href="#"><i class="icon_star"></i>5</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        @endif
                        {{-- @for ($i = 0; $i < 10; $i++)
                            <div class="community-post style-two">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="{{ asset('assets/img/home_support/cp2.jpg') }}" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="">Workspace/Org Administration</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="{{ asset('assets/img/home_support/cmm1.png') }}"
                                                    alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 3 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endfor --}}
                        <!-- /.community-post -->
                    </div>
                    <!-- /.community-posts-wrapper -->


                </div>
                <!-- /.col-lg-8 -->

            </div>
        </div>
    </section>


</x-layout>
