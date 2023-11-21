<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- head -->
@include('include.head')

<body data-scroll-animation="true">
    <!-- preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" height="125px" alt="">
                    <h4><span>{{ config('app.name') }}</span></h4>
                </div>
            </div>
            <h2 class="head">Where Ideas Unite</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <div class="click_capture"></div>
        <!-- header -->
        @include('include.header')
        <!-- main content -->
        <main>
            <!-- content -->
            {{ $slot }}
        </main>
        <!-- footer -->
        @include('include.footer')
    </div>
    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
    <!-- scripts -->


    @include('components.auth-modal')

    @include('include.scripts')
</body>

</html>
