<x-layout>
    <x-slot:title>
        Categories
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
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Categories</a></li>
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
                                <img src="{{asset('assets/img/home_support/answer.png')}}" alt="answer action">
                            </div>
                            <div class="content">
                                <h2 class="ans-title">Have a Question?</h2>
                                <p>Ask below or search for similar questions</p>
                            </div>
                        </div>
                        <!-- /.action-content -->
                        <div class="action-button-container">
                            <a href="{{route('posts.create')}}" class="action_btn btn-ans">Ask a Question</a>
                        </div>
                        <!-- /.action-button-container -->
                    </div>
                    <!-- /.answer-action -->

                    <div class="post-header forums-header">
                        <div class="col-md-6 col-sm-6 support-info">
                            <span> Category </span>
                        </div>
                        <!-- /.support-info -->
                        <div class="col-md-6 col-sm-6 support-category-menus">
                            <ul class="forum-titles">
                                <li class="forum-reply-count">Posts</li>
                                <li class="forum-freshness">Last Post</li>
                            </ul>
                        </div>
                        <!-- /.support-category-menus -->
                    </div>
                    <!-- /.post-header -->

                    <div class="community-posts-wrapper bb-radius">
                        @foreach ( $categories as $category )
                        <!-- Forum Item -->
                        <div class="community-post style-two forum-item bug">
                            <div class="col-md-6 post-content">
                                <div class="author-avatar forum-icon">
                                    <img src="{{asset('assets/img/home_support/rc1.png')}}" alt="community post">
                                </div>
                                <div class="entry-content">
                                    <a href="{{ route('categories.show', $category->slug) }}">
                                        <h3 class="post-title">
                                            {{ $category->category_name }}

                                        </h3>
                                    </a>
                                    <p>This forum is a special forum for general announcements.</p>
                                </div>
                            </div>
                            <div class="col-md-6 post-meta-wrapper">
                                <ul class="forum-titles">
                                    <li class="forum-reply-count">
                                        @php
                                        echo DB::table('posts')
                                        ->where('category_id', '=', $category->id)
                                        ->count();
                                        @endphp
                                        posts</span>
                                    </li>
                                    <li class="forum-freshness">
                                        <div class="freshness-box">
                                            <div class="freshness-btm">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Some User Name</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('assets/img/home_support/cp5.jpg')}}" class="avatar photo">
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.forum-item  -->
                        @endforeach
                    </div>
                    <!-- /.community-posts-wrapper -->
                </div>
                <!-- /.col-lg-9 -->

            </div>
        </div>
    </section>
</x-layout>