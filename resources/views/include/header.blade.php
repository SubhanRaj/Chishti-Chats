<!--================Navbar Area =================-->


<nav class="navbar navbar-expand-lg menu_one sticky-nav d-none d-lg-block">
    <div class="container">
        <a class="navbar-brand header_logo" href="{{ route('index') }}">
            <img class="first_logo sticky_logo" src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                alt="logo">
            <img class="white_logo main_logo" src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                alt="logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->is('posts') ? 'active' : '' }}">
                    <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                </li>
                <li class="nav-item {{ request()->is('categories') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile') }}" class="nav-link">User Profile</a>
                </li>
            </ul>
            <div class="right-nav">
                @if ($user_id !== false)
                    <a class="d-flex justify-content-center align-items-center" href="{{ route('profile') }}">
                        <span class="user-profile-icon">
                            @php
                                $user_first_letter = firstLetter($user_id);
                            @endphp
                            @if ($user_first_letter != false)
                                {{ $user_first_letter }}
                            @endif
                        </span>
                        <span class="ps-2"> Account</span>
                    </a>
                @else
                    <button class="action_btn btn_small_two btn-text-medium round-btn-2" type="button"
                        onclick="show_modal('login-modal')">Sign In</button>
                @endif
                {{-- <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                </div> --}}
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
            <a class="navbar-brand header_logo" href="{{ route('index') }}">
                <img class="sticky_logo " src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                    alt="logo">
                <img class="main_logo white_logo" src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                    alt="logo">
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
            <a class="navbar-brand header_logo me-0" href="{{ route('index') }}">
                <img class="sticky_logo main_logo" src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                    alt="logo">
                <img class="white_logo" src="{{ asset('assets/img/logo/logo-full.png') }}" height="75px"
                    alt="logo">
            </a>
        </div>
    </div>
    <div class="mobile_nav_wrapper">
        <nav class="mobile_nav_top">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->is('posts') ? 'active' : '' }}">
                    <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                </li>
                <li class="nav-item {{ request()->is('categories') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile') }}" class="nav-link">User Profile</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
