<x-layout>
    <x-slot:title>
        {{ $post->title }}
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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('posts.index') }}">Posts</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">
                                    {{ $post->title }}
                                </a></li>
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
    <section class="doc_blog_grid_area sec_pad forum-single-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Forum post top area -->
                    <div class="row">
                        <div class="col-lg-12 col-md-8">
                            <div class="forum-post-top">
                                <span class="user-profile-icon">
                                    @php
                                        $user_first_letter = firstLetter($post->user_id);
                                    @endphp
                                    @if ($user_first_letter != false)
                                        {{ $user_first_letter }}
                                    @endif
                                </span>

                                <div class="forum-post-author">
                                    <a class="author-name" href="#">
                                        @php
                                            $user_data = userData($post->user_id);
                                        @endphp
                                        @if ($user_data != false)
                                            {{ $user_data->name }}
                                        @else
                                            Unknown
                                        @endif

                                    </a>
                                    <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            {{ $post->created_at->format('F d, Y') }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Forum post content -->
                    <div class="q-title">
                        <span class="question-icon" title="Question">Q:</span>
                        <h1>
                            {{ $post->title }}
                        </h1>
                    </div>
                    <div class="forum-post-content">
                        <div class="content">
                            <p>
                                @php
                                    echo html_entity_decode($post->content);
                                @endphp
                            </p>

                        </div>
                        <div class="forum-post-btm">
                            {{-- <div class="taxonomy forum-post-tags">
                                <i class="icon_tags_alt"></i>
                            </div> --}}
                        </div>
                        <div class="action-button-container action-btns  ">
                            @if ($user_id != false)
                                <form method="post" id="reply-form" style="max-width: 400px;width:100%"
                                    onsubmit="uploadData1('reply-form','{{ route('comment.saveComment', ['user_id' => $user_id, 'post_id' => $post->id]) }}','reply-alert','reply-alert-btn', event)">
                                    @csrf
                                    <div class="row">
                                        <div id="reply-alert"></div>

                                        <div class="col-12 mb-3">
                                            <textarea name="reply" class="form-control" placeholder="Type you reply..." required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" id="reply-alert-btn"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <button type="button" class="action_btn btn_small_two btn-text-medium round-btn-2"
                                    onclick="show_modal('login-modal')">Login for reply !</button>
                            @endif
                        </div>
                    </div>



                    <!-- All answer -->
                    <div class="all-answers">

                        <div class="filter-bar d-flex">
                            <h3 class="title mb-0">All Replies</h3>
                            {{-- <div class="sort">
                                <select class="custom-select" id="sortBy">
                                    <option selected>Sort By</option>
                                    <option value="1">ASC</option>
                                    <option value="2">Desc</option>
                                    <option value="3">Vote</option>
                                </select>
                            </div> --}}
                            <p>

                                @php
                                    $replies = DB::table('comments')
                                        ->where('post_id', '=', $post->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get();
                                @endphp
                                {{ count($replies) }}
                                Reply
                            </p>
                        </div>

                        @if (count($replies) > 0)
                            @foreach ($replies as $single_reply)
                                <div class="forum-comment">
                                    <div class="forum-post-top">

                                        <span class="user-profile-icon">
                                            @php
                                                $user_first_letter = firstLetter($single_reply->user_id);
                                            @endphp
                                            @if ($user_first_letter != false)
                                                {{ $user_first_letter }}
                                            @endif
                                        </span>

                                        <div class="forum-post-author">

                                            @php
                                                $reply_by = userData($single_reply->user_id);
                                            @endphp
                                            @if ($reply_by != false)
                                                {{ $reply_by->name }}
                                            @endif

                                            <div class="forum-author-meta">
                                                <div class="author-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="16px"
                                                        height="15px">
                                                        <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                            d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z" />
                                                    </svg>

                                                </div>
                                                <div class="author-badge">
                                                    <i class="icon_calendar"></i>
                                                    {{ showDateTime($single_reply->created_at) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>{{ $single_reply->comment }} </p>

                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <!-- /.col-lg-4 -->
            </div>
        </div>
    </section>
</x-layout>
