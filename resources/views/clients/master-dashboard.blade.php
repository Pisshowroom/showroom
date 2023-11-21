<!DOCTYPE html>
<html lang="{{ request()->route('lang') ?? 'id' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecom/imgs/favicon.png') }}">
    <link href="{{ asset('ecom_dashboard/css/style.css?v=1.0.3') }}" rel="stylesheet">
    @stack('importcss')
    @stack('css')
    {{-- pi coin --}}
    <script src="https://sdk.minepi.com/pi-sdk.js"></script>
    <script>Pi.init({ version: "2.0", sandbox: true })</script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top"><a class="brand-wrap" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img class="logo"
            src="{{ asset('ecom/imgs/pshop.png') }}" alt="Dashboard"></a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"><i
                        class="text-muted material-icons md-menu_open"></i></button>
            </div>
        </div>
        @include('clients.dashboard.layouts.sidebar')

    </aside>
    <main class="main-wrap">
        @include('clients.dashboard.layouts.header')

        @yield('dashboard')
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy;, <a href="https://hotama.co.id/" target="_blank"
                        rel="noopener noreferrer">PT.Kreasi Putra Hotama.</a>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">All rights reserved</div>
                </div>
            </div>
        </footer>
    </main>

    <script src="{{ asset('ecom_dashboard/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/main.js?v=1.0.0') }}"></script>
    <script src="{{ asset('ecom_dashboard/js/custom-chart.js') }}" type="text/javascript"></script>
    @stack('importjs')
    @stack('js')
</body>

</html>
