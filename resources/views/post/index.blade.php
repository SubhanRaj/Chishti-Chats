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
    <!--================Feature One Area =================-->
    <section class="feature-one">
        <div class="container">
            <div class="row align-items-center gy-4 gy-lg-0">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="img-content">
                        <img class="wow fadeInRight" data-wow-delay="0.1s" src="{{asset('assets/img/home_two/Post.png')}}" alt="post">
                        <img class="wow fadeInLeft" data-wow-delay="0.2s" src="{{asset('assets/img/home_two/Comment.png')}}" alt="comment">
                        <img class="bg-img" src="{{asset('assets/img/home_two/post-vaiation-bg.png')}}" alt="bg img">
                        <img src="{{asset('assets/img/home_two/Subtract.png')}}" alt="shape">
                        <img src="{{asset('assets/img/home_two/scribbles-scribbles-62.png')}}" alt="shape">
                        <img src="{{asset('assets/img/home_two/scribbles-scribbles-2.png')}}" alt="shape">
                    </div>

                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="feature-content-text wow fadeInLeft mt-4 mt-xl-0">
                        <h2>Discover a great collection of post variations</h2>
                        <p>The Forum activity allows students and teachers to exchange ideas by posting comments as
                            part of a 'thread'. Files such as images and media maybe included in forum posts. The
                            teacher can choose to grade and/or rate forum posts and it is also possible to give
                            students permission to rate each others' posts.</p>
                        <hr>
                        <h5>This is an incredible Forum</h5>
                        <a href="#" class="dbl-arrow">
                            <div class="arrow-cont">
                                <i class="arrow_carrot-right first"></i>
                                <i class="arrow_carrot-right second"></i>
                            </div> Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature One Area =================-->
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
                        <h2 class="action-title title-2 ">Build your Connection</h2>
                    </div>
                    <p class="mb-0">connect with over 1 million cconstrustion professionals. Supports can be
                        either at the
                        end or
                        at
                        any intermediate point along a struuctural member or a constituent part.</p>
                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <a href="#" class="action_btn"><i class="icon_group"></i> Join Community </a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Call To Action Area =================-->
</x-layout>