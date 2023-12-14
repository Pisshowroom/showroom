<div class="topbar">
    <div class="container-topbar w-100">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs"
                        href="{{ route('buyer.about') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Tentang
                        Kami</a></li>
                <li>
                    @auth
                        @if (Auth::guard('web')->user()->is_seller == 1)
                            <a class="font-xs"
                                href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Dashboard
                                Toko</a>
                        @else
                            <a class="font-xs"
                                href="{{ route('dashboardSeller.profile') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar
                                Toko</a>
                        @endif
                    @endauth
                    @guest

                        <a class="font-xs" href="{{ route('buyer.register') }}">Buka toko</a>
                    @endguest
                </li>
            </ul>
        </div>
        <div class="info-topbar w-100 text-center d-none d-xl-block"><a class="font-xs color-brand-3"
                href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                target="_blank">Download Aplikasi PIS Shop Global</a></div>
        <div class="menu-topbar-right"><span class="font-xs color-brand-3">Butuh bantuan? Hubungi:</span><span
                class="font-sm-bold color-success"> + 1800 900</span>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo logo-auth"><a class="d-flex"
                        href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                            alt="Logo Pishop" src="{{ asset('ecom/imgs/pshop.png') }}"></a>
                </div>
                <div class="header-search">
                    <div class="box-header-search">
                        <div class="form-search">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible" data-select2-id="1"
                                    id="navKategori" tabindex="-1" aria-hidden="true">
                                    <option name="category_id" value="Semua kategori">Pilih kategori</option>
                                    @foreach ($data['categories'] as $ct)
                                        <option name="category_id" value="{{ $ct->id }}"
                                            {{ request()->get('category_id') == $ct->id ? 'selected' : '' }}>
                                            {{ $ct->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" name="search" id="searchProduct"
                                    placeholder="Cari produk">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="@yield('home')"
                                    href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                            </li>
                            <li><a class="@yield('allProduct')"
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                    Produk</a>
                            </li>
                            <li><a class="@yield('article')"
                                    href="{{ route('buyer.allArticle') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Artikel</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                @auth
                    <div class="header-shop">
                        @if (Auth::guard('web')->user()->is_seller == 1)
                            <div class="d-lg-inline-block d-none">
                                <a class="font-lg btn btn-buy d-inline-block" style="padding:7px 10px !important;"
                                    href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                    Toko Saya
                                </a>
                            </div>
                        @endif
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-notification"><span>Notifikasi</span>
                                @if ($data['notification'] && count($data['notification']) > 0 && $data['notif_count'] && $data['notif_count'] > 0)
                                    <span class="number-item font-xs">{{ $data['notif_count'] }}</span>
                                @endif
                            </span>
                            <div class="dropdown-notification">
                                @if ($data['notification'] && count($data['notification']) > 0)
                                    <div class="col-lg-12">
                                        @foreach ($data['notification'] as $notif)
                                            <a class="mb-2 line-1 text-start" style="color: #425A8B"
                                                href="{{ route('dashboard.detailNotif', ['id' => $notif->id ?? 1]) }}">
                                                {{ $notif->title ?? '' }}
                                            </a>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="col-lg-12 text-center mt-10">
                                        <h6>Tidak ada notifikasi saat ini</h6>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <a class="font-lg icon-list icon-wishlist"
                            href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><span>Wishlist</span>
                            @if ($data['userWishlist'] > 0)
                                <span class="number-item font-xs"
                                    style="top:-12px !important">{{ $data['userWishlist'] }}</span>
                            @endif
                        </a>
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-cart"><span>Keranjang</span><span
                                    class="number-item font-xs amount-cart d-none"></span></span>
                            <div class="dropdown-cart cart-data">
                                <div class="w-100"></div>
                                <div class="border-bottom pt-0 mb-15 d-none"></div>
                                <div class="cart-total d-none">
                                    <div class="row">
                                        <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span>
                                        </div>
                                        <div class="col-6"><span class="font-md-bold color-brand-1 price"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start"><a class="btn btn-cart w-auto"
                                                href="{{ route('buyer.cart') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keranjang</a>
                                        </div>
                                        <div class="col-6"><button
                                                class="btn btn-buy btn-cart-buy w-auto">Checkout</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-account"><span>Akun</span></span>
                            <div class="dropdown-account">
                                <ul>
                                    {{-- <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li> --}}
                                    <li><a
                                            href="{{ route('dashboard.myOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pesanan
                                            ku</a></li>
                                    <li><a
                                            href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Wishlist</a>
                                    </li>
                                    @if (Auth::guard('web')->user()->is_seller == 0)
                                        <li><a
                                                href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar
                                                Toko</a></li>
                                    @else
                                        <li><a
                                                href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Toko
                                                Saya</a></li>
                                    @endif
                                    <li><a
                                            href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pengaturan</a>
                                    </li>
                                    <li><a
                                            href="{{ route('logout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keluar
                                            Akun</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- @guest
                            <a class="font-lg icon-list icon-account" href="{{ route('buyer.login') }}"><span>Masuk</span></a>
                            @endguest --}}
                @endauth
                @guest
                    <div class="discount d-xl-flex d-none gap-2">
                        <a class="@yield('login') btn btn-buy"
                            href="{{ route('buyer.login') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Masuk</a>
                        <a class="@yield('register') btn btn-cart"
                            href="{{ route('buyer.register') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area position-absolute">
            <div class="mobile-logo"><a class="d-flex"
                    href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                        alt="Logo Pishop" src="{{ asset('ecom/imgs/pshop.png') }}"></a></div>
            <div class="perfect-scroll" style="height:100% !important">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="@yield('home')"
                                    href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                            </li>
                            @guest
                                <li><a class="@yield('login')"
                                        href="{{ route('buyer.login') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Masuk</a>
                                </li>
                            @endguest
                            <li><a class="@yield('register')"
                                    href="{{ route('buyer.register') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar</a>
                            </li>
                            <li><a class="@yield('allProduct')"
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                    Produk</a></li>
                            <li><a class="@yield('article')"
                                    href="{{ route('buyer.allArticle') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Artikel</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                @auth
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account">
                                <a
                                    href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                        width="80px" height="80px"
                                        src="{{ Auth::guard('web')->user() && Auth::guard('web')->user()->image ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                        alt="akun {{ Auth::guard('web')->user()->name ?? '' }}"></a>
                                <div class="content">
                                    <h6 class="user-name">Halo, {{ Auth::guard('web')->user()->name ?? '' }}</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="mobile-menu">
                            {{-- <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li> --}}
                            <li><a
                                    href="{{ route('dashboard.myOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pesanan
                                    ku</a></li>
                            <li><a
                                    href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Wishlist</a>
                            </li>
                            @if (Auth::guard('web')->user()->is_seller == 0)
                                <li><a
                                        href="{{ route('dashboardSeller.profile') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar
                                        Toko</a></li>
                            @else
                                <li><a
                                        href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Toko
                                        Saya</a></li>
                            @endif
                            <li><a
                                    href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pengaturan</a>
                            </li>
                            <li><a
                                    href="{{ route('logout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keluar
                                    Akun</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@if ($data['sub_categories'] && count($data['sub_categories']) > 0)
    <div class="sidebar-left"><a class="btn btn-open" href="#"></a>
        <ul class="menu-texts menu-close" style="left:50% !important;">
            @if ($data['sub_categories'] && count($data['sub_categories']) > 0)
                @foreach ($data['sub_categories'] as $ct)
                    <li class="has-children">
                        @if (Route::currentRouteName() == 'buyer.allListProduct')
                            <a
                                href="{{ route('buyer.allListProduct', ['category_id' => $ct->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><span
                                    class="text-link">{{ $ct->name ?? '' }}</span></a>
                        @else
                            <a
                                href="{{ route('buyer.allGridProduct', ['category_id' => $ct->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><span
                                    class="text-link">{{ $ct->name ?? '' }}</span></a>
                        @endif
                        @if ($ct->sub_categories && count($ct->sub_categories) > 0)
                            <ul class="sub-menu">
                                @foreach ($ct->sub_categories as $sc)
                                    @if (Route::currentRouteName() == 'buyer.allListProduct')
                                        <li><a
                                                href="{{ route('buyer.allListProduct', ['category_id' => $ct->id, 'sub_category_id' => $sc->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">{{ $sc->name ?? '' }}</a>
                                        </li>
                                    @else
                                        <li><a
                                                href="{{ route('buyer.allGridProduct', ['category_id' => $ct->id, 'sub_category_id' => $sc->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">{{ $sc->name ?? '' }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
@endif

<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area position-absolute">
            <div class="mobile-logo"><a class="d-flex"
                    href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                        alt="Logo Pishop" src="{{ asset('ecom/imgs/pshop.png') }}"></a></div>
            <div class="perfect-scroll" style="height:100% !important">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="@yield('home')"
                                    href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                            </li>
                            @guest
                                <li><a class="@yield('login')"
                                        href="{{ route('buyer.login') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Masuk</a>
                                </li>
                                <li><a class="@yield('register')"
                                        href="{{ route('buyer.register') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar</a>
                                </li>
                            @endguest
                            <li><a class="@yield('allProduct')"
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                    Produk</a></li>
                            <li><a class="@yield('article')"
                                    href="{{ route('buyer.allArticle') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Artikel</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @auth
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account"><a
                                    href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                        width="80px" height="80px"
                                        src="{{ Auth::guard('web')->user() && Auth::guard('web')->user()->image ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                        alt="akun {{ Auth::guard('web')->user()->name ?? '' }}"></a>
                                <div class="content">
                                    <h6 class="user-name">
                                        Halo,
                                        {{ substr(Auth::guard('web')->user()->name ?? '', 0, 10) . (strlen(Auth::guard('web')->user()->name ?? '') > 6 ? '..' : '') }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <ul class="mobile-menu">
                            {{-- <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li> --}}
                            <li><a
                                    href="{{ route('dashboard.myOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pesanan
                                    ku</a></li>
                            <li><a
                                    href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Wishlist</a>
                            </li>
                            @if (Auth::guard('web')->user()->is_seller == 0)
                                <li><a
                                        href="{{ route('dashboardSeller.profile') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Daftar
                                        Toko</a></li>
                            @else
                                <li><a
                                        href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Toko
                                        Saya</a></li>
                            @endif
                            <li><a
                                    href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Pengaturan</a>
                            </li>
                            <li><a
                                    href="{{ route('logout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keluar
                                    Akun</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>

@push('importjs')
    @php
        // Get the base URL with a placeholder for :slug
        $baseDetailProductUrl = route('buyer.detailProduct', ['slug' => ':slug']);
    @endphp

    <script>
        // Set the base URL in JavaScript
        var baseDetailProductUrl =
            "{{ $baseDetailProductUrl }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}";
    </script>
    <script>
        $(document).ready(function() {
            function formatRupiah(angka, prefix) {
                var number_string = angka.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/g);
                let userAgent = navigator.userAgent;
                let isPi = false

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;

                if (userAgent) {
                    if (userAgent.match(/PiBrowser/))
                        isPi = true
                }

                if (isPi)
                    return (convertRupiahToPi(angka)) + " π";

                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }

            function convertRupiahToPi(price) {
                var value = {{ $setting->value ?? 558647.95 }}

                return (1 / value) * (price);
            }
            var carts = localStorage.getItem('cart');
            if (carts) {
                var cart = JSON.parse(carts);
                $('.amount-cart').text(cart.length);
                $('.amount-cart').addClass('d-inline-block').removeClass('d-none');
                $('.cart-data .border-bottom').addClass('d-block').removeClass('d-none');
                var html = '';
                var totalAmount = 0;
                for (var i = 0; i < Math.min(2, cart.length); i++) {
                    var element = cart[i];
                    totalAmount += parseFloat(element.price);
                    var url = "{{ route('buyer.detailProduct', ['slug' => ':slug']) }}";
                    var imageUrl = element.images && element.images[0] ? element.images[0] :
                        "{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}";
                    url = url.replace(':slug', element.slug);
                    html += `<div class="item-cart mb-20">
                    <div class="cart-image">
                        <img src="${imageUrl}" alt="${element.name}">
                    </div>
                    <div class="cart-info">
                        <a class="font-sm-bold color-brand-3 line-2 text-start"
                        href="${url}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            ${element.name}
                        </a>
                        <p><span class="color-brand-2 font-sm-bold">${formatRupiah(element.price, 'Rp ')}</span></p>
                        </div>
                    </div>`;
                };
                // Update the total price element with the formatted totalAmount
                $('.cart-data .cart-total').find('.price').text(formatRupiah(totalAmount.toString(), 'Rp '));

                // Show the cart-total element
                $('.cart-data').find('.cart-total').addClass('d-block').removeClass('d-none');
                $('.cart-data .w-100').html(html);
            } else {
                var html = '';
                html += `<div class="col-lg-12 text-center mt-10">
                            <h6>Tidak ada Produk saat ini</h6>
                        </div>`;
                $('.cart-data .w-100').html(html);
            }


            $('.btn-cart-buy').on('click', function() {
                var carts = localStorage.getItem('cart');
                var cart = JSON.parse(carts);
                if ("{{ $data['addresses'] && $data['addresses'] != null && $data['addresses']->id }}") {
                    $('.loading').removeClass('d-none').addClass('show-modal');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{{ route('buyer.preCheckEarly') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                        data: {
                            order_items: JSON.stringify(cart)
                        },
                        xhr: function() {
                            // get the native XmlHttpRequest object
                            var xhr = $.ajaxSettings.xhr()
                            // set the onprogress event handler
                            xhr.upload.onprogress = function(evt) {}
                            return xhr
                        },
                        success: function(response) {
                            if (response) {
                                if ("{{ $data['addresses']->id ?? '' }}" == null) {
                                    $('#myDivHandleError').text(
                                        'Kamu belum menginput alamat');
                                    $('#myDivHandleError').css('display',
                                        'block');
                                    setTimeout(function() {
                                        $('#myDivHandleError')
                                            .fadeOut(
                                                'fast');
                                    }, 2000);
                                    $('.loading').removeClass(
                                            'show-modal')
                                        .addClass('d-none');

                                } else {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                                .attr(
                                                    'content')
                                        }
                                    });
                                    $.ajax({
                                        type: "post",
                                        url: "{{ route('buyer.preCheck') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                        data: {
                                            order_items: JSON.stringify(cart),
                                            seller_id: cart[0].seller_id,
                                            address_id: "{{ $data['addresses']->id ?? '' }}",
                                        },
                                        xhr: function() {
                                            // get the native XmlHttpRequest object
                                            var xhr = $.ajaxSettings.xhr()
                                            // set the onprogress event handler
                                            xhr.upload.onprogress = function(evt) {}
                                            return xhr
                                        },
                                        success: function(response) {
                                            if (response) {
                                                if (response
                                                    .delivery_services_info &&
                                                    response
                                                    .delivery_services_info
                                                    .results &&
                                                    response
                                                    .delivery_services_info.results
                                                    .length > 0) {
                                                    var results = response
                                                        .delivery_services_info
                                                        .results;
                                                    var filteredResults = results
                                                        .filter(function(item) {
                                                            return (
                                                                item.costs
                                                                .length >
                                                                0 &&
                                                                item.costs[
                                                                    0]
                                                                .cost
                                                                .length >
                                                                0 &&
                                                                typeof item
                                                                .costs[0]
                                                                .cost[
                                                                    0]
                                                                .value !==
                                                                'undefined' &&
                                                                typeof item
                                                                .costs[0]
                                                                .cost[
                                                                    0]
                                                                .etd !==
                                                                'undefined'
                                                            );
                                                        });
                                                    if (filteredResults) {
                                                        localStorage.setItem(
                                                            'seller_id',
                                                            cart[
                                                                0].seller_id);
                                                        localStorage.setItem(
                                                            'checkout',
                                                            JSON
                                                            .stringify(response)
                                                        );
                                                        window.location.replace(
                                                            "{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                                        );
                                                    } else {
                                                        $('#myDivHandleError').text(
                                                            'Paket Pengiriman tidak tersedia'
                                                        );
                                                        $('#myDivHandleError').css(
                                                            'display',
                                                            'block');
                                                        setTimeout(function() {
                                                            $('#myDivHandleError')
                                                                .fadeOut(
                                                                    'fast');
                                                        }, 2000);
                                                    }
                                                } else {
                                                    $('#myDivHandleError').text(
                                                        'Paket Pengiriman tidak tersedia'
                                                    );
                                                    $('#myDivHandleError').css(
                                                        'display',
                                                        'block');
                                                    setTimeout(function() {
                                                        $('#myDivHandleError')
                                                            .fadeOut(
                                                                'fast');
                                                    }, 2000);
                                                }
                                                $('.loading').removeClass(
                                                        'show-modal')
                                                    .addClass('d-none');

                                            } else {
                                                $('.loading').removeClass(
                                                        'show-modal')
                                                    .addClass('d-none');
                                            }

                                        },

                                        error: function(error) {
                                            if (error && error.responseJSON && error
                                                .responseJSON.message) {
                                                $('#myDivHandleError').text(error
                                                    .responseJSON.message);
                                                $('#myDivHandleError').css(
                                                    'display',
                                                    'block');
                                                setTimeout(function() {
                                                    $('#myDivHandleError')
                                                        .fadeOut(
                                                            'fast');
                                                }, 2000);
                                            }
                                            $('.loading').removeClass('show-modal')
                                                .addClass('d-none');

                                        }
                                    });
                                }

                            } else {
                                $('.loading').removeClass('show-modal')
                                    .addClass('d-none');
                            }
                        },

                        error: function(error) {
                            if (error && error.responseJSON && error
                                .responseJSON.message) {
                                $('#myDivHandleError').text(error
                                    .responseJSON.message);
                                $('#myDivHandleError').css('display',
                                    'block');
                                setTimeout(function() {
                                    $('#myDivHandleError')
                                        .fadeOut(
                                            'fast');
                                }, 2000);
                            }
                            $('.loading').removeClass('show-modal')
                                .addClass('d-none');

                        }
                    });
                } else {
                    $('#myDivAddress').css('display', 'block');
                    setTimeout(function() {
                        $('#myDivAddress').fadeOut('fast');
                    }, 2000);
                }
            })
        });
    </script>
@endpush
