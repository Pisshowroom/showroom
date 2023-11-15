<div class="topbar top-gray-1000">
    <div class="container-topbar w-100">
        {{-- <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                <li>
                    @auth
                        @if (Auth::guard('web')->user()->is_seller == 1)
                            <a class="font-xs" href="{{ route('dashboardSeller.dashboard') }}">Dashboard Toko</a>
                        @else
                            <a class="font-xs" href="{{ route('dashboardSeller.profile') }}">Daftar Toko</a>
                        @endif
                    @endauth
                    @guest

                        <a class="font-xs" href="{{ route('buyer.register') }}">Buka toko</a>
                    @endguest
                </li>

            </ul>
        </div> --}}
        <div class="info-topbar w-100 text-center d-none d-xl-block"><a class="font-xs color-brand-3"
                href="{{ route('buyer.home') }}" target="_blank">Download Aplikasi PIS Shop Global</a></div>
        {{-- <div class="menu-topbar-right"><span class="font-xs color-brand-3">Butuh bantuan? Hubungi:</span><span
                class="font-sm-bold color-success"> + 1800 900</span> --}}
        {{-- <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown"
                    aria-expanded="true" data-bs-display="static"><span
                        class="dropdown-right font-xs color-brand-3"><img src="{{ asset('ecom/imgs/template/en.svg') }}"
                            alt="Ecom"> English</span></button>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#"><img src="{{ asset('ecom/imgs/template/flag-en.svg') }}"
                                alt="Ecom"> English</a></li>
                    <li><a class="dropdown-item" href="#"><img src="{{ asset('ecom/imgs/template/flag-fr.svg') }}"
                                alt="Ecom"> Français</a></li>
                    <li><a class="dropdown-item" href="#"><img src="{{ asset('ecom/imgs/template/flag-es.svg') }}"
                                alt="Ecom"> Español</a></li>
                    <li><a class="dropdown-item" href="#"><img src="{{ asset('ecom/imgs/template/flag-pt.svg') }}"
                                alt="Ecom"> Português</a></li>
                    <li><a class="dropdown-item" href="#"><img src="{{ asset('ecom/imgs/template/flag-cn.svg') }}"
                                alt="Ecom"> 中国人</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown"
                    aria-expanded="true" data-bs-display="static"><span
                        class="dropdown-right font-xs color-brand-3">USD</span></button>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2"
                    data-bs-popper="static">
                    <li><a class="dropdown-item active" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">AUD</a></li>
                    <li><a class="dropdown-item" href="#">SGP</a></li>
                </ul>
            </div> --}}
    </div>
</div>
</div>
<header class="header header-container sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a href="{{ route('buyer.home') }}"><img alt="Ecom"
                            src="{{ asset('ecom/imgs/template/logo.svg') }}"></a></div>
                <div class="header-search">
                    <div class="box-header-search">
                        <div class="form-search">
                            <div class="box-category">
                                <select id="navKategori" class="select-active select2-hidden-accessible"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option>Semua kategori</option>
                                    @foreach ($data['categories'] as $ct)
                                        <option name="category_id" value="{{ $ct->id }}">{{ $ct->name }}
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
                <div class="header-nav text-start">
                    {{-- <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="active" href="#">Flash Deals</a></li>
                            <li><a href="#">Spesial</a></li>
                            <li><a href="#">Penjual Teratas</a></li>
                        </ul>
                    </nav> --}}
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                @auth
                    <div class="header-shop">
                        @if (Auth::guard('web')->user()->is_seller == 1)
                            <div class="d-lg-inline-block d-none">
                                <a class="font-lg btn btn-buy d-inline-block" style="padding:7px 10px !important;"
                                    href="{{ route('dashboardSeller.dashboard') }}">
                                    Toko Saya
                                </a>
                            </div>
                        @endif
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-notification"><span>Notifikasi</span><span
                                    class="number-item font-xs">2</span></span>
                            <div class="dropdown-notification">
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">2022 Apple iMac
                                            with
                                            Retina 5K
                                            Display 8GB RAM,
                                            256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">2022 Apple iMac
                                            with
                                            Retina 5K
                                            Display 8GB
                                            RAM, 256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
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
                                    <li><a href="{{ route('dashboard.myOrder') }}">Pesanan ku</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Wishlist</a></li>
                                    @if (Auth::guard('web')->user()->is_seller == 0)
                                        <li><a href="{{ route('dashboard.settings') }}">Daftar Toko</a></li>
                                    @else
                                        <li><a href="{{ route('dashboardSeller.dashboard') }}">Toko Saya</a></li>
                                    @endif
                                    <li><a href="{{ route('dashboard.settings') }}">Pengaturan</a></li>
                                    <li><a href="{{ route('logout') }}">Keluar Akun</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- @guest
                        <a class="font-lg icon-list icon-account" href="{{ route('buyer.login') }}"><span>Masuk</span></a>
                        @endguest --}}
                    </div>
                @endauth
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                {{-- <div class="dropdown d-inline-block">
                    <button class="btn dropdown-toggle btn-category" id="dropdownCategory" type="button"
                        data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static"><span
                            class="dropdown-right font-sm-bold color-white">Berdasarkan Kategori</span></button>
                    <div class="sidebar-left dropdown-menu dropdown-menu-light" aria-labelledby="dropdownCategory"
                        data-bs-popper="static">
                        <ul class="menu-texts menu-close">
                            <li class="has-children"><a href="javascript:;"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/monitor.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Computers &amp;
                                        Accessories</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Computer Accessories</a></li>
                                    <li><a href="#">Computer Cases</a></li>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">HDD</a></li>
                                    <li><a href="#">RAM</a></li>
                                    <li><a href="#">Headphone</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a class="active" href="javascript:;"><span
                                        class="img-link"><img src="{{ asset('ecom/imgs/template/mobile.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Cell Phones</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Phone Accessories</a></li>
                                    <li><a href="#">Phone Cases</a></li>
                                    <li><a href="#">Postpaid Phones</a></li>
                                    <li><a href="#">Unlocked Phones</a></li>
                                    <li><a href="#">Prepaid Phones</a></li>
                                    <li><a href="#">Prepaid Plans</a></li>
                                    <li><a href="#">Refurbished Phones</a></li>
                                    <li><a href="#">Straight Talk</a></li>
                                    <li><a href="#">iPhone</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/game.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Gaming Gatgets</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/clock.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Smart watches</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/airpod.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Airpod</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/airpods.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Wired Headphone</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/mouse.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Mouse &amp;
                                        Keyboard</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/music-play.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Headphone</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/bluetooth.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Bluetooth devices</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/clound.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Cloud Software</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/electricity.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Electric
                                        accessories</span></a>
                            </li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/cpu.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Mainboard &amp;
                                        CPU</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/devices.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Desktop</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/driver.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Speaker</span></a></li>
                            <li><a href="#"><span class="img-link"><img
                                            src="{{ asset('ecom/imgs/template/lamp.svg') }}"
                                            alt="Ecom"></span><span class="text-link">Computer Decor</span></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="header-nav d-inline-block">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="@yield('home')" href="{{ route('buyer.home') }}">Beranda</a></li>
                            {{-- @guest
                                <li><a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a></li>
                            @endguest --}}
                            <li><a class="@yield('allProduct')" href="{{ route('buyer.allGridProduct') }}">Semua
                                    Produk</a></li>
                            <li><a class="@yield('article')" href="{{ route('buyer.allArticle') }}">Artikel</a>
                            </li>
                            {{-- <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}">Shop</a>
                                <ul class="sub-menu two-col">
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Grid</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Grid 2</a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Shop list - Left sidebar</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop list - Right sidebar</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Fullwidth</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 2</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 3</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 4</a></li>
                                    <li><a href="{{ route('buyer.cart') }}">Shop Cart</a></li>
                                    <li><a href="{{ route('buyer.cart') }}">Shop Checkout</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Shop Wishlist</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-children"><a href="#">Selengkapnya</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('buyer.contact') }}">Kontak Kami</a></li>
                                    <li><a href="{{ route('buyer.term') }}">Syarat dan Ketentuan</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-children"><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog - No Sidebar</a></li>
                                <li><a href="blog-2.html">Blog - Right Sidebar</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-big.html">Blog category big</a></li>
                                <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                                <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                                <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                            </ul>
                        </li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="discount d-xl-flex d-none">
                    @guest
                        <a class="@yield('login') btn btn-buy" href="{{ route('buyer.login') }}">Masuk</a>
                        <a class="@yield('register') btn btn-cart" href="{{ route('buyer.register') }}">Daftar</a>
                    @endguest
                </div>
            </div>
        </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area position-absolute">
            <div class="mobile-logo"><a class="d-flex" href="{{ route('buyer.home') }}"><img alt="Ecom"
                        src="{{ asset('ecom/imgs/template/logo.svg') }}"></a></div>
            <div class="perfect-scroll" style="height:100% !important">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="@yield('privacyPolicy')" href="{{ route('buyer.home') }}">Beranda</a></li>
                            @guest
                                <li><a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a></li>
                                <li><a class="@yield('register')" href="{{ route('buyer.register') }}">Daftar</a></li>
                            @endguest
                            <li><a class="@yield('allProduct')" href="{{ route('buyer.allGridProduct') }}">Semua
                                    Produk</a></li>
                            <li><a class="@yield('article')" href="{{ route('buyer.allArticle') }}">Artikel</a>
                            </li>
                            {{-- <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}">Shop</a>
                                <ul class="sub-menu two-col">
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Grid</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Grid 2</a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Shop list - Left sidebar</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop list - Right sidebar</a></li>
                                    <li><a href="{{ route('buyer.allGridProduct') }}">Shop Fullwidth</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 2</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 3</a></li>
                                    <li><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Single Product 4</a></li>
                                    <li><a href="{{ route('buyer.cart') }}">Shop Cart</a></li>
                                    <li><a href="{{ route('buyer.cart') }}">Shop Checkout</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Shop Wishlist</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-children"><a href="#">Selengkapnya</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('buyer.contact') }}">Kontak Kami</a></li>
                                    <li><a href="{{ route('buyer.term') }}">Syarat dan Ketentuan</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-children"><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-big.html">Blog Big</a></li>
                                    <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                                    <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                                    <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                @auth
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account"><a href="{{ route('dashboard.settings') }}"><img width="80px"
                                        height="80px"
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
                            <li><a href="{{ route('dashboard.myOrder') }}">Pesanan ku</a></li>
                            <li><a href="{{ route('buyer.wishlist') }}">Wishlist</a></li>
                            @if (Auth::guard('web')->user()->is_seller == 0)
                                <li><a href="{{ route('dashboardSeller.profile') }}">Daftar Toko</a></li>
                            @else
                                <li><a href="{{ route('dashboardSeller.dashboard') }}">Toko Saya</a></li>
                            @endif
                            <li><a href="{{ route('dashboard.settings') }}">Pengaturan</a></li>
                            <li><a href="{{ route('logout') }}">Keluar Akun</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>

@push('importjs')
    <script>
        $(document).ready(function() {
            function updateURL() {
                var searchQuery = $('#searchProduct').val();
                var selectedCategoryId = $('#navKategori').val();
                var baseUrl = '{{ route('buyer.allGridProduct') }}';
                var url = baseUrl;

                // Check if category_id exists and update the URL accordingly
                if (selectedCategoryId !== '') {
                    url += '?category_id=' + selectedCategoryId;
                }

                // Check if search query exists and update the URL accordingly
                if (searchQuery !== '') {
                    url += (selectedCategoryId !== '' ? '&' : '?') + 'search=' + searchQuery;
                }
                window.location = url;
                // Navigate to the constructed URL
                // history.pushState({}, '', url);
            }

            // Listen to the change event on the search input and category select
            $('#searchProduct, #navKategori').on('change', function() {
                updateURL();
            });

            function formatRupiah(angka, prefix) {
                var number_string = angka.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/g);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
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

                    html += `<div class="item-cart mb-20">
                            <div class="cart-image"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                alt="${element.name}">
                            </div>
                            <div class="cart-info"><a class="font-sm-bold color-brand-3 line-2 text-start"
                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">${element.name}</a>
                                <p><span class="color-brand-2 font-sm-bold">${formatRupiah(element.price, 'Rp ')}</span></p>
                            </div>
                        </div>
                        `;
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
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{{ route('buyer.preCheckEarly') }}",
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
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                            .attr(
                                                'content')
                                    }
                                });
                                $.ajax({
                                    type: "post",
                                    url: "{{ route('buyer.preCheck') }}",
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
                                        console.log(response);
                                        if (response) {
                                            localStorage.setItem('checkout', JSON
                                                .stringify(response));
                                            window.location.replace(
                                                "{{ route('buyer.checkout') }}"
                                            );
                                        }
                                    },

                                    error: function(error) {
                                        alert(error);
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
                                        console.log(error);
                                    }
                                });
                            }
                        },

                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr);
                            console.log(xhr.status);
                            console.log(ajaxOptions);
                            console.log(thrownError);
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
