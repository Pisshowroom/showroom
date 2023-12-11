<!DOCTYPE html>
<html lang="{{ request()->route('lang') ?? 'id' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Pishop adalah Aplikasi & Website dari Pi Showroom">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pisshowroom.co/">
    <meta property="og:title" content="Pishop">
    <meta property="og:description" content="Pishop adalah Aplikasi & Website dari Pi Showroom">
    <meta property="og:image" content="{{ asset('ecom/imgs/favicon.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" id="metaToken" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecom/imgs/favicon.png') }}">
    <link href="{{ asset('ecom/css/style.css?v=3.0.7') }}" rel="stylesheet">
    {{-- pi coin --}}
    <script src="https://sdk.minepi.com/pi-sdk.js"></script>
    <script>
        Pi.init({
            version: "2.0",
            sandbox: false
        })
    </script>
    <title>@yield('title')</title>

    @stack('css')
</head>

<body>
    <div class="loading d-none"><span class="loaders"><span class="loader-inner"></span></span></div>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img class="mb-10" style="max-width: 25px"
                        src="{{ asset('ecom/imgs/favicon.png') }}" alt="loading favicon">
                    <div class="preloader-dots"></div>
                </div>
            </div>
        </div>
    </div>

    <div style="display:none" class="alert alert-warning" id="myDivAddress">Kamu belum memiliki alamat tujuan
    </div>
    <div style="display:none" class="alert alert-warning" id="myDivCheckout">Stok saat ini tidak ada
    </div>
    <div style="display:none" class="alert alert-warning" id="myDivHandleError">
    </div>
    <div style="display:none" class="alert alert-success" id="myDivHandleSuccess">
    </div>
    @if (in_array(Route::currentRouteName(), ['buyer.home']))
        @include('clients.buyer.layouts.navbar')
    @else
        @include('clients.buyer.layouts.navbar_auth')
    @endif

    @yield('childs')
    @include('clients.buyer.layouts.footer')
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

    @stack('js')
    @stack('importjs')
</body>

</html>
