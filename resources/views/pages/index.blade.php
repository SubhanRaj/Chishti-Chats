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
                            <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start">
                                <img src="{{asset('assets/img/home_two/icon-1.svg')}}" alt="icon">
                                <div>
                                    <h4>
                                        <span class="counter d-inline-block">1099</span>+
                                    </h4>
                                    <p>members</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start" data-wow-delay="0.3s">
                                <img src="{{asset('assets/img/home_two/icon-2.svg')}}" alt="icon">
                                <div>
                                    <h4 class="counter">5099</h4>
                                    <p>posts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start" data-wow-delay="0.6s">
                                <img src="{{asset('assets/img/home_two/icon-3.svg')}}" alt="icon">
                                <div>
                                    <h4 class="counter">255</h4>
                                    <p>online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-lg-end text-center wow fadeInLeft" data-wow-delay="0.3s">
                    <a class="action_btn btn_bg round-btn" href="#">Start a Discussion</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Ama Statistics Area =================-->

    <!--================Community Area =================-->
    <section class="community-area bg-disable">
        <div class="container">
            <div class="d-flex justify-content-between mb-35 flex-wrap">
                <h2 class="section-title-h2 mb-0">Community</h2>
                <div><a href="#" class="doc_border_btn doc_border_btn_two sec-btn-blue mt-2">New Post</a></div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Show topics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Show all posts</button>
                </li>
            </ul>
            <div class="tab-content mt-30" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row gy-4 justify-content-center">
                        @for ($i = 0; $i < 9; $i++)
                            <div class="col-md-6 col-lg-4">
                                <div class="community-topic-widget-box wow fadeInUp">
                                    <img src="{{asset('assets/img/home_two/lightbulb.svg')}}" alt="icon">
                                    <div class="box-content">
                                        <a href="#">
                                            <h5>Knowledge Base</h5>
                                        </a>
                                        <span>155 posts</span>
                                        <span class="vr-line">|</span>
                                        <span>21 followers</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <a href="#" class="dbl-arrow-upper show-more-btn show-more-round w-100 mt-70 wow fadeInUp">
                                <div class="arrow-cont">
                                    <i class="arrow_carrot-down first"></i>
                                    <i class="arrow_carrot-down second"></i>
                                </div> Show More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @for($i = 1; $i <= 6; $i++)
                        <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="{{ ($i - 1) * 0.2 }}s">
                            <div class="post-content">
                                <div class="post-title">
                                    <h6>
                                        <a href="#">
                                            This forum is a special forum for general announcements.
                                        </a>
                                        <span><i class="icon_check_alt2"></i></span>
                                    </h6>
                                </div>
                                <div class="post-info">
                                    <div class="author">
                                        <img src="{{asset('assets/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                                    </div>
                                    <div class="post-time">
                                        <img src="{{asset('assets/img/time-outline.svg')}}" alt="">10 min ago
                                    </div>
                                    <div class="post-category">
                                        <a href="#">
                                            <img src="{{asset('assets/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                        </a>
                                    </div>
                                </div>
                                <div class="post-tags">
                                    <div class="single-tag tag-jq">jQuery</div>
                                    <div class="single-tag tag-php">Php</div>
                                </div>
                            </div>
                            <div class="post-reach">
                                <div class="post-view">
                                    <img src="{{asset('assets/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                                </div>
                                <div class="post-like">
                                    <img src="{{asset('assets/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                                </div>
                                <div class="post-comment">
                                    <img src="{{asset('assets/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <a href="#" class="dbl-arrow-upper show-more-btn show-more-round w-100 mt-70 wow fadeInUp">
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
                <img src="{{asset('assets/img/home_two/cta-bg-1.png')}}" alt="">
            </div>
            <div class="shape">
                <img src="{{asset('assets/img/home_two/cta-bg-2.png')}}" alt="">
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
                    <a href="#" class="action_btn"><i class="icon_group"></i> Join Community </a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Call To Action Area =================-->
</x-layout>