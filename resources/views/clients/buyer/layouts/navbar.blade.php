<div class="topbar top-gray-1000">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                <li>
                    @auth
                        <a class="font-xs" href="{{ route('dashboardSeller.dashboard') }}">Dashboard Toko</a>

                    @endauth
                    @guest

                        <a class="font-xs" href="{{ route('buyer.register') }}">Buka toko</a>
                    @endguest
                </li>

            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Pengiriman gratis
                untuk
                semua pesanan di atas</span><span class="font-sm-bold color-success"> 5 Juta</span></div>
        <div class="menu-topbar-right"><span class="font-xs color-brand-3">Butuh bantuan? Hubungi:</span><span
                class="font-sm-bold color-success"> + 1800 900</span>
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
                        <form class="form-search" method="get" action="{{ route('buyer.allGridProduct') }}">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible" data-select2-id="1"
                                    tabindex="-1" aria-hidden="true">
                                    <option>Semua kategori</option>
                                    @foreach ($data['categories'] as $ct)
                                        <option name="category_id" value="{{ $ct->id }}">{{ $ct->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" value="" name="search"
                                    placeholder="Cari produk">
                            </div>
                        </form>
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
                <div class="header-shop">
                    @auth
                        {{-- <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-account"><span>Akun</span></span>
                            <div class="dropdown-account">
                                <ul>
                                    <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('dashboard.myOrder') }}">Pesanan ku</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Wishlist</a></li>
                                    @if (Auth::guard('web')->user()->is_seller == 0)
                                        <li><a href="{{ route('dashboard.settings') }}">Daftar Toko</a></li>
                                    @else
                                        <li><a href="{{ route('dashboardSeller.dashboard') }}">Toko</a></li>
                                    @endif
                                    <li><a href="{{ route('dashboard.settings') }}">Pengaturan</a></li>
                                    <li><a href="{{ route('logout') }}">Keluar Akun</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <a class="font-lg icon-list icon-wishlist"
                            href="{{ route('buyer.wishlist') }}"><span>Wishlist</span><span
                                class="number-item font-xs">5</span></a>
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-cart"><span>Cart</span><span
                                    class="number-item font-xs">2</span></span>
                            <div class="dropdown-cart">
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                            alt="Ecom"></div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">2022 Apple iMac
                                            with
                                            Retina 5K
                                            Display 8GB
                                            RAM, 256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                            alt="Ecom"></div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">2022 Apple iMac
                                            with
                                            Retina 5K
                                            Display
                                            8GB RAM, 256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                                <div class="border-bottom pt-0 mb-15"></div>
                                <div class="cart-total">
                                    <div class="row">
                                        <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span>
                                        </div>
                                        <div class="col-6"><span class="font-md-bold color-brand-1">$2586.3</span>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start"><a class="btn btn-cart w-auto"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <div class="col-6"><a class="btn btn-buy w-auto"
                                                href="{{ route('buyer.checkout') }}">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                    {{-- @guest
                        <a class="font-lg icon-list icon-account" href="{{ route('buyer.login') }}"><span>Masuk</span></a>
                    @endguest --}}
                </div>
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
                                    <li><a href="{{ route('buyer.checkout') }}">Shop Checkout</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Shop Wishlist</a></li>
                                </ul>
                            </li> --}}
                            <li class="has-children"><a href="#">Selengkapnya</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('buyer.contact') }}">Kontak Kami</a></li>
                                    <li><a href="{{ route('buyer.term') }}">Syarat dan Ketentuan</a></li>
                                </ul>
                            </li>
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
                        <a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a>
                        <a class="@yield('register')" href="{{ route('buyer.register') }}">Mendaftar</a>
                    @endguest
                    @auth
                        <a href="{{ route('dashboard.dashboard') }}">Dashboard</a>
                    @endauth
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
                                    <li><a href="{{ route('buyer.checkout') }}">Shop Checkout</a></li>
                                    <li><a href="{{ route('buyer.wishlist') }}">Shop Wishlist</a></li>
                                </ul>
                            </li> --}}
                            <li class="has-children"><a href="#">Selengkapnya</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('buyer.contact') }}">Kontak Kami</a></li>
                                    <li><a href="{{ route('buyer.term') }}">Syarat dan Ketentuan</a></li>
                                </ul>
                            </li>
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
                            <div class="user-account"><a href="{{ route('dashboard.dashboard') }}"><img width="80px"
                                        height="80px"
                                        src="{{ Auth::guard('web')->user() ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                        alt="akun {{ Auth::guard('web')->user()->name ?? '' }}"></a>
                                <div class="content">
                                    <h6 class="user-name">Halo, {{ Auth::guard('web')->user()->name ?? '' }}</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="mobile-menu">
                            <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('dashboard.myOrder') }}">Pesanan ku</a></li>
                            <li><a href="{{ route('buyer.wishlist') }}">Wishlist</a></li>
                            @if (Auth::guard('web')->user()->is_seller == 0)
                                <li><a href="{{ route('dashboard.settings') }}">Daftar Toko</a></li>
                            @else
                                <li><a href="{{ route('dashboardSeller.dashboard') }}">Toko</a></li>
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
</div>
