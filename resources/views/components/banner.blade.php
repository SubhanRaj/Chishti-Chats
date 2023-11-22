<!--================Banner Area =================-->
<section class="banner-area-3 has_search">
    <div class="banner-shapes">
        <div class="shape">
            <img data-parallax='{"x": -60, "y": 0}' src="{{ asset('assets/img/home_two/banner-shape-1.png') }}"
                alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": -20, "y": 0}' src="{{ asset('assets/img/home_two/banner-shape-2.png') }}"
                alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": 60, "y": 0}' src="{{ asset('assets/img/home_two/banner-shape-3.png') }}"
                alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": 40, "y": 0}' src="{{ asset('assets/img/home_two/banner-shape-4.png') }}"
                alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": 200, "y": 90, "rotateY":700}'
                src="{{ asset('assets/img/home_two/banner-shape-5.png') }}" alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": 200, "y": 70, "rotateZ":700}'
                src="{{ asset('assets/img/home_two/banner-shape-6.png') }}" alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": -150, "y": 90, "rotateZ":0}'
                src="{{ asset('assets/img/home_two/banner-shape-7.png') }}" alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": -200, "y": 90, "rotateX":700}'
                src="{{ asset('assets/img/home_two/banner-shape-8.png') }}" alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": -150, "y": 90, "rotateZ":0}'
                src="{{ asset('assets/img/home_two/banner-shape-9.png') }}" alt="shape">
        </div>
        <div class="shape">
            <img data-parallax='{"x": -200, "y": 70, "rotateX":700}'
                src="{{ asset('assets/img/home_two/banner-shape-10.pn') }}g" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="row doc_banner_content">
            <div class="col-12 px-0">
                <h1 class="banner-title-h1">Welcome to Chishti Chats</h1>
                <p class="banner-text-p">Where Ideas Unite</p>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="banner-search-box mt-40">
                    <form action="{{ route('search.search') }}" method="get">
                        <div class="input-wrapper">
                            <input placeholder="Search for anything here..." type='search'  
                                autocomplete="off" name="query">
                            <button type="submit" class="search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Bannner Area =================-->
