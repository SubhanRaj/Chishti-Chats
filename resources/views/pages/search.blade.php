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
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Search</a></li>
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

                <div class="col-12">
                    <div class="forum_topic_list_inner">

                        <div class="forum_l_inner">

                            <div class="forum_body">
                                <ul class="navbar-nav topic_list">
                                    @foreach ($posts as $post)
                                        <li>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <span class="user-profile-icon">
                                                        @php
                                                            $user_first_letter = firstLetter($user_id);
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
                                                        <img src="{{ asset('assets/img/svg/hashtag.svg') }}"
                                                            alt="">
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

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================End Forum Body Area =================-->
</x-layout>
