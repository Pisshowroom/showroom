<!DOCTYPE html>
<html lang="{{ request()->route('lang') ?? 'id' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecom/imgs/template/favicon.svg') }}">
    <link href="{{ asset('ecom/css/style.css?v=3.0.0') }}" rel="stylesheet">
    <title>@yield('title')</title>

    @stack('css')
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img class="mb-10" src="{{ asset('ecom/imgs/template/favicon.svg') }}"
                        alt="Ecom">
                    <div class="preloader-dots"></div>
                </div>
            </div>
        </div>
    </div>
    @if (in_array(Route::currentRouteName(), ['buyer.home']))
        @include('clients.buyer.layouts.navbar')
    @else
        @include('clients.buyer.layouts.navbar_auth')
    @endif

    @yield('childs')
    @include('clients.buyer.layouts.footer')

    @stack('js')
    @stack('importjs')
    <script src="{{ asset('ecom/js/vendors/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/isotope.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/scrollup.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/slider.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('ecom/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/jquery.countdown.min.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('ecom/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('ecom/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('ecom/js/shop.js?v=1.2.1') }}"></script>
    <script src="{{ asset('ecom/js/main.js?v=3.0.0') }}"></script>
</body>

</html>
