<x-layout>
    <x-slot:title>
        {{ __('Posts') }}
    </x-slot:title>
    <x-search />
    <x-breadcrumb/>

    <!--================Forum Body Area =================-->
    <section class="forum_sidebar_area" id="sticky_doc">
        <div class="container-fluid pl-60 pr-60">
            <div class="row">
                <div class="col-xl-2 d-none d-xl-block">
                    <div class="left_side_forum">
                        <aside class="l_widget forum_list">
                            <h3 class="wd_title">Forums</h3>
                            <ul class="navbar-nav">
                                <li class="active nav-item">
                                    <a href="#"><i class="social_tumbleupon"></i>View all</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#"><i class="icon_lightbulb_alt"></i>General</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#"><i class="icon_lightbulb_alt"></i>Ideas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#"><i class="fa fa-user-o"></i>User Feedback</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="l_widget l_tags_wd">
                            <h3 class="wd_title">Tags</h3>
                            <ul class="list-unstyled w_tag_list style-light">
                                <li><a href="#">Swagger</a></li>
                                <li><a href="#">Foram</a></li>
                                <li><a href="#">weCare</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Download</a></li>
                                <li><a href="#">Doc</a></li>
                                <li><a href="#">Product board</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">ui/ux</a></li>
                                <li><a href="#">Doc Design</a></li>
                                <li><a href="#">DocAll</a></li>
                            </ul>
                        </aside>
                        <aside class="l_widget comment_list">
                            <h3 class="wd_title">Recent Topics</h3>
                            <ul class="navbar-nav">
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="icon_chat_alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>Intégration 300 by</h4>
                                            </a>
                                            <a href="#">
                                                <h5><img src="img/forum/r-topic-user.png" alt=""> Jean Conner</h5>
                                            </a>
                                            <p>4 days, 3 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="icon_chat_alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>how by</h4>
                                            </a>
                                            <a href="#">
                                                <h5><img src="img/forum/r-topic-user.png" alt=""> Lucile Barber</h5>
                                            </a>
                                            <p>1 week ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="icon_chat_alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>testing by</h4>
                                            </a>
                                            <a href="#">
                                                <h5><img src="img/forum/r-topic-user.png" alt=""> Dwain Cherry</h5>
                                            </a>
                                            <p>3 days, 20 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="icon_chat_alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>Title by</h4>
                                            </a>
                                            <a href="#">
                                                <h5><img src="img/forum/r-topic-user.png" alt=""> Kati Burch</h5>
                                            </a>
                                            <p>1 month ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="icon_chat_alt"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>Green Planet by</h4>
                                            </a>
                                            <a href="#">
                                                <h5><img src="img/forum/r-topic-user.png" alt=""> Morris Ruiz</h5>
                                            </a>
                                            <p>1 week, 2 days ago</p>
                                        </div>
                                    </div>
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
                                <ul class="nav left">
                                    <li><i class="icon_error-circle_alt"></i> 15 Open</li>
                                    <li><a href="#"><i class=" icon_check"></i> 202 Closed</a></li>
                                    <li><a href="#"><i class="icon_refresh"></i> Reset</a></li>
                                </ul>
                                <ul class="nav right">
                                    <li>
                                        <div class="dropdown dropsend">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Author <i class="arrow_carrot-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h3 class="title">Filter by author</h3>
                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Search users">
                                                </form>
                                                <div class="all_users scroll">
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-1.png" alt=""> Donny
                                                        Peters</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-2.png" alt="">Linh Knapp</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-3.png" alt="">Albert
                                                        Roach</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-4.png" alt="">Kristin
                                                        Larsen</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-5.png" alt="">Ernest
                                                        Patton</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-2.png" alt="">Linh Knapp
                                                        Patton</a>
                                                    <a class="dropdown-item" href="#"><img src="img/forum/filter-user-1.png" alt="">Donny
                                                        Peters</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown right_dir dropstart">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Label <i class="arrow_carrot-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h3 class="title">Filter by label</h3>
                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Search Users">
                                                </form>
                                                <div class="all_users scroll">
                                                    <a class="dropdown-item" href="#"><span class="color red"></span>
                                                        bugs</a>
                                                    <a class="dropdown-item" href="#"><span class="color blue"></span>
                                                        request/feature</a>
                                                    <a class="dropdown-item" href="#"><span class="color dark_blue"></span> Developer
                                                        Edition</a>
                                                    <a class="dropdown-item" href="#"><span class="color green"></span>help wanted</a>
                                                    <a class="dropdown-item" href="#"><span class="color pink"></span>question</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown right_dir dropstart">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort <i class="arrow_carrot-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h3 class="title">Filter by author</h3>
                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Search users">
                                                </form>
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
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>One page template</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><img src="img/svg/hashtag.svg" alt=""> General
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_clock_alt"></i> 26 minutes ago
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-1.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-2.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Support "IntelliSense" plugin for JetBrains WebStorm
                                                        </h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="icon_lightbulb_alt" aria-hidden="true"></i> Ideas
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_clock_alt"></i> 2h ago
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-1.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-2.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-3.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-4.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>How to create progressbar with this tailwind css file
                                                            upload form</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><img src="img/svg/hashtag.svg" alt=""> General
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> December 01, 2020 at 8:16 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-3.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-5.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-6.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-4.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>How works and where can found the class?
                                                            <ion-icon name="checkmark-circle"></ion-icon>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="fa fa-futbol-o" aria-hidden="true"></i> Help
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> November 27, 2020 at 10:15 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-7.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-6.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-5.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Featured Image on Mobile</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="lnr lnr-users" aria-hidden="true"></i> User
                                                        Feedback
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> November 20, 2020 at 8:16 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-1.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Can we get Figma files for Tailwind UI components?</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><img src="img/svg/hashtag.svg" alt=""> Ideas
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> November 10, 2020 at 7:16 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-3.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-7.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Slow compile performance with Laravel Mix and npm run
                                                            watch</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><img src="img/svg/hashtag.svg" alt=""> General
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> November 05, 2020 at 9:00 am
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-6.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-7.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-8.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-9.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-10.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-8.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>How do correctly describe the opacity for a colors?</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="fa fa-futbol-o" aria-hidden="true"></i> Help
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> November 01, 2020 at 3:16 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-1.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-9.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Add CSS writing-mode classes to Tailwind</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="lnr lnr-users" aria-hidden="true"></i> User
                                                        Feedback
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> September 27, 2020 at 11:05 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-2.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/f-user-10.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="t_title">
                                                    <a href="forum-single.html">
                                                        <h4>Generating docs from a custom tailwind.config.js</h4>
                                                    </a>
                                                </div>
                                                <a href="#">
                                                    <h6><i class="icon_lightbulb_alt" aria-hidden="true"></i> Ideas
                                                    </h6>
                                                </a>
                                                <h6><i class="icon_calendar"></i> September 15, 2020 at 8:16 pm
                                                </h6>
                                            </div>
                                            <div class="media-right">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-10.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-1.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="img/forum/small-u-11.png" alt="">
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <div class="media">
                                                                <div class="d-flex">
                                                                    <img src="img/forum/user-hover-2.png" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h4>Jonah Terry</h4>
                                                                    </a>
                                                                    <a class="follow_btn" href="#">Follow</a>
                                                                </div>
                                                            </div>
                                                            <div class="row answere_items">
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Answers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Question</h4>
                                                                    </a>
                                                                    <h6>40</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#">
                                                                        <h4>Followers</h4>
                                                                    </a>
                                                                    <h6>30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="count" href="#">
                                                    <ion-icon name="heart-outline"></ion-icon> 5
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="chatbubbles-outline"></ion-icon> 70
                                                </a>
                                                <a class="count" href="#">
                                                    <ion-icon name="eye-outline"></ion-icon> 420
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pagination_inner">
                            <div class="col-lg-2">
                                <h6>Total: <span> 225 </span></h6>
                            </div>
                            <div class="col-lg-8">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#"><i class="arrow_carrot-left"></i> Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">21</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next <i class="arrow_carrot-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-group go_btn">
                                    <input type="number" class="form-control" aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Go</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="right_side_forum">
                        <aside class="r_widget qustion_wd">
                            <button class="btn" type="button"><img src="img/forum/helpful-user/question-1.png" alt="">Ask Question <i class="arrow_carrot-right"></i></button>
                        </aside>
                        <aside class="r_widget user_list_wd">
                            <div class="r_heading d-flex justify-content-between">
                                <h3>Most Helpful</h3>
                                <h5>Last 30 days</h5>
                            </div>
                            <ul class="navbar-nav">
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>cleo-parra</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    10
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-2.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>roy_marin</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    08
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>hellen.austin</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    05
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-4.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>erna.may</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    03
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-5.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>jacobson</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    02
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>van.mays</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    01
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img class="rounded-circle" src="img/forum/helpful-user/h-user-7.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>steve_barr</h4>
                                            </div>
                                            <div class="media-right">
                                                <div class="count">
                                                    01
                                                </div>
                                                <i class="icon_check_alt"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="r_widget question_list_wd">
                            <div class="r_heading d-flex justify-content-between">
                                <h3>Top</h3>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">7 days</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">30 days</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <ul class="navbar-nav">
                                        <li><a href="#"><span>01</span>Example of NearBy Place Search - SITE KIT</a>
                                        </li>
                                        <li><a href="#"><span>02</span>Example of Direction Steps - MAP KIT</a></li>
                                        <li><a href="#"><span>03</span>Introduction to AppGallery Connect Crash
                                                Service</a>
                                        </li>
                                        <li><a href="#"><span>04</span>Bank Card Recognition and Payment Screen - ML
                                                KIT</a>
                                        </li>
                                        <li><a href="#"><span>05</span>Example of Direction Steps - MAP KIT</a></li>
                                        <li><a href="#"><span>06</span>Example of NearBy Place Search - SITE KIT</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <ul class="navbar-nav">
                                        <li><a href="#"><span>01</span>Example of NearBy Place Search - SITE KIT</a>
                                        </li>
                                        <li><a href="#"><span>02</span>Example of Direction Steps - MAP KIT</a></li>
                                        <li><a href="#"><span>03</span>Introduction to AppGallery Connect Crash
                                                Service</a>
                                        </li>
                                        <li><a href="#"><span>04</span>Bank Card Recognition and Payment Screen - ML
                                                KIT</a>
                                        </li>
                                        <li><a href="#"><span>05</span>Example of Direction Steps - MAP KIT</a></li>
                                        <li><a href="#"><span>06</span>Example of NearBy Place Search - SITE KIT</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Forum Body Area =================-->
</x-layout>