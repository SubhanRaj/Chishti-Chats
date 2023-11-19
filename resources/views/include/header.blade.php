<!--================Navbar Area =================-->
<nav class="navbar navbar-expand-lg menu_one sticky-nav d-none d-lg-block">
    <div class="container">
        <a class="navbar-brand header_logo" href="{{ route('index')}}">
            <img class="first_logo sticky_logo" src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
            <img class="white_logo main_logo" src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item active">
                    <a href="{{ route('index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="Layout_Header-Search-1.html" class="nav-link">Header
                                Layout 01</a></li>
                        <li class="nav-item"><a href="Layout_Header-Search-2.html" class="nav-link">Header
                                Layout 02</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                        <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                        <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                        <li class="nav-item"><a href="forum-topics-2.html" class="nav-link">Forum Topics Two</a>
                        </li>
                        <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                        <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                        <li class="nav-item"><a href="add-question.html" class="nav-link">Add Question</a></li>
                        <li class="nav-item"><a href="user-list.html" class="nav-link">User List</a></li>
                        <li class="nav-item"><a href="user-details.html" class="nav-link">User Details</a></li>
                        <li class="nav-item"><a href="badges.html" class="nav-link">User Badges</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                        <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                        </li>
                        <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                        <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                    </ul>
                </li>
            </ul>
            <div class="right-nav">
                <a class="action_btn btn_small_two btn-text-medium round-btn-2" href="#">Sign In</a>
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                </div>

            </div>
        </div>
    </div>
</nav>
<div class="mobile_main_menu sticky-nav menu_one">
    <div class="container">
        <div class="mobile_menu_left">
            <button type="button" class="navbar-toggler mobile_menu_btn">
                <span class="menu_toggle ">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand header_logo" href="{{ route('index')}} }}">
                <img class="sticky_logo " src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
                <img class="main_logo white_logo" src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
            </a>
        </div>
        <div class="mobile_menu_right">
            <div class="right-nav">
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something2" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something2" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something2"></label>
                    <input type="checkbox" name="something2" id="something2" class="dark_mode_switcher">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="side_menu">
    <div class="mobile_menu_header">
        <div class="close_nav">
            <i class="icon_close"></i>
        </div>
        <div class="mobile_logo">
            <a class="navbar-brand header_logo me-0" href="index-2.html">
                <img class="sticky_logo main_logo" src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
                <img class="white_logo" src="{{asset('assets/img/logo/logo-full.png')}}" height="75px" alt="logo">
            </a>
        </div>
    </div>
    <div class="mobile_nav_wrapper">
        <nav class="mobile_nav_top">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item active">
                    <a href="{{ route('index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#">
                        Pages
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="Layout_Header-Search-1.html" class="nav-link">Header
                                Layout 01</a></li>
                        <li class="nav-item"><a href="Layout_Header-Search-2.html" class="nav-link">Header
                                Layout 02</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                        <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu ">
                    <a class="nav-link dropdown-toggle" href="forums.html">
                        Forum
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                        <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                        <li class="nav-item"><a href="forum-topics-2.html" class="nav-link">Forum Topics Two</a>
                        </li>
                        <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                        <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                        <li class="nav-item "><a href="add-question.html" class="nav-link">Add Question</a></li>
                        <li class="nav-item"><a href="user-list.html" class="nav-link">User List</a></li>
                        <li class="nav-item"><a href="user-details.html" class="nav-link">User Details</a></li>
                        <li class="nav-item"><a href="badges.html" class="nav-link">User Badges</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#">
                        Blog
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                        <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                        </li>
                        <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                        <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>