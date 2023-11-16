<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- head -->
@include('include.head')

<body>
    <!-- header -->
    @include('include.header')
    <!-- main content -->
    <main>
        <!-- content -->
        {{ $slot }}
    </main>
    <!-- footer -->
    @include('include.footer')

    <!-- scripts -->
    @include('include.scripts')
</body>

</html>