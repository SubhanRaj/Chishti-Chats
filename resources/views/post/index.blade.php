<x-layout>
    <x-slot:title>Home </x-slot:title>

    <!-- content -->
    <div class="container">
        <div class="nav">
            <div class="nav__categories js-dropdown">
                <div class="nav__select">
                    <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Random</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Arts</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Tech</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>Gaming</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Science</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Exchange</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Pets</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Education</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Q&amp;As</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="nav__select">
                    <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                        <div class="tags">
                            <a href="#" class="bg-4f80b0">gaming</a>
                            <a href="#" class="bg-424ee8">nature</a>
                            <a href="#" class="bg-36b7d7">entertainment</a>
                            <a href="#" class="bg-ef429e">selfie</a>
                            <a href="#" class="bg-7cc576">camera</a>
                            <a href="#" class="bg-3a3a17">username</a>
                            <a href="#" class="bg-6f7e9c">funny</a>
                            <a href="#" class="bg-f26522">photography</a>
                            <a href="#" class="bg-a3d39c">climbing</a>
                            <a href="#" class="bg-92278f">adventure</a>
                            <a href="#" class="bg-8781bd">dreams</a>
                            <a href="#" class="bg-f1ab32">life</a>
                            <a href="#" class="bg-3b96ca">reason</a>
                            <a href="#" class="bg-348aa7">social</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav__menu js-dropdown">
                <div class="nav__select">
                    <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                        <ul class="dropdown__catalog">
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Unread</a></li>
                            <li><a href="#">Rising</a></li>
                            <li><a href="#">Most Liked</a></li>
                            <li><a href="#">Follow Feed</a></li>
                        </ul>
                    </div>
                </div>
                <ul>
                    <li class="active"><a href="#">Latest</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">Rising</a></li>
                    <li><a href="#">Most Liked</a></li>
                    <li><a href="#">Follow Feed</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="posts" data-visible="desktop">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Users</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Activity</div>
                </div>
                <div class="posts__body">
                    @foreach ($posts as $post)
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="{{ route('posts.show', $post->url_slug) }}">
                                        <h3>{{$post->title}}</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <!-- tags -->
                                        @php
                                            $tags = explode(' ', $post->tags);
                                        @endphp
                                        @foreach ($tags as $tag)
                                            <a href="#" class="bg-4f80b0">{{ $tag }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a>
                            </div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="{{asset('assets/fonts/icons/avatars/L.svg')}}" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="{{asset('assets/fonts/icons/avatars/T.svg')}}" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">252</div>
                            <div class="posts__views">396</div>
                            <div class="posts__activity">13m</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- pagination -->
            
        </div>
</x-layout>