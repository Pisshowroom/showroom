<div class="topbar">
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
    </div>
</div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo logo-auth"><a class="d-flex" href="{{ route('buyer.home') }}"><img
                            alt="Logo Pishop" src="{{ asset('ecom/imgs/pshop.png') }}"></a>
                </div>
                <div class="header-search">
                    <div class="box-header-search">
                        <div class="form-search">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible" data-select2-id="1"
                                    id="navKategori" tabindex="-1" aria-hidden="true">
                                    <option name="category_id" value="Semua kategori">Semua kategori</option>
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
                            <li><a class="@yield('home')" href="{{ route('buyer.home') }}">Beranda</a></li>
                            {{-- @guest
                                <li><a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a></li>
                            @endguest --}}
                            <li><a class="@yield('allProduct')" href="{{ route('buyer.allGridProduct') }}">Semua
                                    Produk</a>
                            </li>
                            <li><a class="@yield('article')" href="{{ route('buyer.allArticle') }}">Artikel</a>
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
                                    href="{{ route('dashboardSeller.dashboard') }}">
                                    Toko Saya
                                </a>
                            </div>
                        @endif
                        <div class="d-inline-block box-dropdown-cart">
                            <span class="font-lg icon-list icon-notification"><span>Notifikasi</span>
                                {{-- <span
                                    class="number-item font-xs">2</span> --}}
                            </span>
                            <div class="dropdown-notification">
                                <div class="col-lg-12 text-center mt-10">
                                    <h6>Tidak ada notifikasi saat ini</h6>
                                </div>

                                {{-- <div class="item-cart mb-20">
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
                                </div> --}}
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
                    </div>

                    {{-- @guest
                            <a class="font-lg icon-list icon-account" href="{{ route('buyer.login') }}"><span>Masuk</span></a>
                            @endguest --}}
                @endauth
                @guest
                    <div class="discount d-xl-flex d-none gap-2">
                        <a class="@yield('login') btn btn-buy" href="{{ route('buyer.login') }}">Masuk</a>
                        <a class="@yield('register') btn btn-cart" href="{{ route('buyer.register') }}">Daftar</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area position-absolute">
            <div class="mobile-logo"><a class="d-flex" href="{{ route('buyer.home') }}"><img alt="Logo Pishop"
                        src="{{ asset('ecom/imgs/pshop.png') }}"></a></div>
            <div class="perfect-scroll" style="height:100% !important">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="@yield('home')" href="{{ route('buyer.home') }}">Beranda</a></li>
                            @guest
                                <li><a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a></li>
                            @endguest
                            <li><a class="@yield('register')" href="{{ route('buyer.register') }}">Daftar</a></li>
                            <li><a class="@yield('allProduct')" href="{{ route('buyer.allGridProduct') }}">Semua
                                    Produk</a></li>
                            <li><a class="@yield('article')" href="{{ route('buyer.allArticle') }}">Artikel</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                @auth
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account">
                                <a href="{{ route('dashboard.settings') }}"><img width="80px" height="80px"
                                        src="{{ Auth::guard('web')->user() && Auth::guard('web')->user()->image ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                        alt="akun {{ Auth::guard('web')->user()->name ?? '' }}"></a>
                                <div class="content">
                                    <h6 class="user-name">Halo, {{ Auth::guard('web')->user()->name ?? '' }}</h6>
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
{{-- <div class="sidebar-left"><a class="btn btn-open" href="#"></a>
    <ul class="menu-icons hidden">
        <li><a href="javascript:void(0)"><img src="{{ asset('ecom/imgs/template/monitor.svg') }}"
                    alt="Ecom"></a></li>
        <li><a href="javascript:void(0)"><img src="{{ asset('ecom/imgs/template/mobile.svg') }}" alt="Ecom"></a>
        </li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/game.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/clock.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/airpod.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/airpods.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/mouse.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/music-play.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/bluetooth.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/clound.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/electricity.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/cpu.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/devices.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/driver.svg') }}" alt="Ecom"></a></li>
        <li><a href="#"><img src="{{ asset('ecom/imgs/template/lamp.svg') }}" alt="Ecom"></a></li>
    </ul>
    <ul class="menu-texts menu-close">
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/monitor.svg') }}" alt="Ecom"></span><span
                    class="text-link">Computers &amp;
                    Accessories</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Computer Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Computer Cases</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Laptop</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">HDD</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">RAM</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Headphone</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="#"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/mobile.svg') }}" alt="Ecom"></span><span
                    class="text-link">Cell Phones</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Phone Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Phone Cases</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Postpaid Phones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Unlocked Phones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Prepaid Phones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Prepaid Plans</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Refurbished Phones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Straight Talk</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">iPhone</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Samsung Galaxy</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Samsung Galaxy</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Samsung Galaxy</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Samsung Galaxy</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Samsung Galaxy</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/game.svg') }}" alt="Ecom"></span><span
                    class="text-link">Gaming
                    Gatgets</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Wireless Routers</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Cool New Gadgets</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Tech and Gadgets</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Geek Gifts and Gadgets</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Xbox Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">PlayStation Accessories</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/clock.svg') }}" alt="Ecom"></span><span
                    class="text-link">Smart
                    watches</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Smart Watches</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Fashion Smart Watches</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Smart Bracelets</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Pocket Watches</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Smart Rings</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Other Watches</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/airpods.svg') }}" alt="Ecom"></span><span
                    class="text-link">Wired
                    Headphone</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">On-Ear Headphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Earbud & In-Ear</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">DJ Headphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">PC Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">PC Game Headsets</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/mouse.svg') }}" alt="Ecom"></span><span
                    class="text-link">Mouse &amp;
                    Keyboard</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Logitech</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Redragon</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Amazon Basics</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Microsoft</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">MageGee</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/music-play.svg') }}" alt="Ecom"></span><span
                    class="text-link">Headphone</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Car Audio Systems</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Cellphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Desktops</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Gaming Consoles</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Telephones</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/bluetooth.svg') }}" alt="Ecom"></span><span
                    class="text-link">Bluetooth
                    devices</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Player Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Computer Accessories</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Speakers & Audio</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Computer Networking</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Movies & Films</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/clound.svg') }}" alt="Ecom"></span><span
                    class="text-link">Cloud
                    Software</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Android</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Linux & Unix</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Macintosh</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Windows</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">iPhone & iOS</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/electricity.svg') }}" alt="Ecom"></span><span
                    class="text-link">Electric
                    accessories</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Antenna Toppers</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Automotive Body Armor</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Power Inverter</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Gas Tank Doors</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Hood Scoops & Vents</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/cpu.svg') }}" alt="Ecom"></span><span
                    class="text-link">Mainboard &amp; CPU</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Computer CPU Processors</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Internal Fans & Cooling</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Graphics Cards</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Network I/O Port Cards</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Internal Memory Card</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/devices.svg') }}" alt="Ecom"></span><span
                    class="text-link">Desktop
                    PC</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Graphic PC</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Office PC</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Gaming PC</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Server</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/driver.svg') }}" alt="Ecom"></span><span
                    class="text-link">Speaker</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">JBL</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Anker</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Pyle</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Bose</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Logitech</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/airpod.svg') }}" alt="Ecom"></span><span
                    class="text-link">Bluetooth
                    Headphone</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">On-Ear Headphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">In-Ear Headphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Earbud</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Over-Ear Headphones</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Other</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('buyer.allGridProduct') }}"><span class="img-link"><img
                        src="{{ asset('ecom/imgs/template/lamp.svg') }}" alt="Ecom"></span><span
                    class="text-link">Computer
                    Decor</span></a>
            <ul class="sub-menu">
                <li><a href="{{ route('buyer.allGridProduct') }}">Copyholders</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Office Bookends</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Business Card Holders</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Lap Desks</a></li>
                <li><a href="{{ route('buyer.allGridProduct') }}">Mouse Pads</a></li>
            </ul>
        </li>
    </ul>
</div> --}}
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area position-absolute">
            <div class="mobile-logo"><a class="d-flex" href="{{ route('buyer.home') }}"><img alt="Logo Pishop"
                        src="{{ asset('ecom/imgs/pshop.png') }}"></a></div>
            <div class="perfect-scroll" style="height:100% !important">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="@yield('home')" href="{{ route('buyer.home') }}">Beranda</a></li>
                            @guest
                                <li><a class="@yield('login')" href="{{ route('buyer.login') }}">Masuk</a></li>
                                <li><a class="@yield('register')" href="{{ route('buyer.register') }}">Daftar</a>
                                </li>
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
                            {{-- <li class="has-children"><a class="@yield('more')" href="#">Selengkapnya</a>
                                <ul class="sub-menu">
                                    <li><a class="@yield('about')" href="{{ route('buyer.about') }}">Tentang
                                            Kami</a></li>
                                    <li><a class="@yield('contact')" href="{{ route('buyer.contact') }}">Kontak
                                            Kami</a></li>
                                    <li><a class="@yield('term')" href="{{ route('buyer.term') }}">Syarat dan
                                            Ketentuan</a></li>
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
    @php
        // Get the base URL with a placeholder for :slug
        $baseDetailProductUrl = route('buyer.detailProduct', ['slug' => ':slug']);
    @endphp

    <script>
        // Set the base URL in JavaScript
        var baseDetailProductUrl = "{{ $baseDetailProductUrl }}";
    </script>
    <script>
        $(document).ready(function() {
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
                    var url = "{{ route('buyer.detailProduct', ['slug' => ':slug']) }}";
                    url = url.replace(':slug', element.slug);
                    html += `<div class="item-cart mb-20">
                    <div class="cart-image">
                        <img src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}" alt="${element.name}">
                    </div>
                    <div class="cart-info">
                        <a class="font-sm-bold color-brand-3 line-2 text-start"
                        href="${url}">
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
                                        if (response) {
                                            if (response.delivery_services_info &&
                                                response
                                                .delivery_services_info.results &&
                                                response
                                                .delivery_services_info.results
                                                .length > 0) {
                                                var results = response
                                                    .delivery_services_info.results;
                                                var filteredResults = results
                                                    .filter(function(item) {
                                                        return (
                                                            item.costs
                                                            .length > 0 &&
                                                            item.costs[0]
                                                            .cost.length >
                                                            0 &&
                                                            typeof item
                                                            .costs[0].cost[
                                                                0]
                                                            .value !==
                                                            'undefined' &&
                                                            typeof item
                                                            .costs[0].cost[
                                                                0].etd !==
                                                            'undefined'
                                                        );
                                                    });
                                                if (filteredResults) {
                                                    localStorage.setItem(
                                                        'seller_id',
                                                        cart[
                                                            0].seller_id);
                                                    localStorage.setItem('checkout',
                                                        JSON
                                                        .stringify(response));
                                                    window.location.replace(
                                                        "{{ route('buyer.checkout') }}"
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
                                            $('.loading').removeClass('show-modal')
                                                .addClass('d-none');

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

                                        console.log(error);
                                    }
                                });
                            } else {
                                $('.loading').removeClass('show-modal')
                                    .addClass('d-none');
                            }
                        },

                        error: function(error) {
                            console.log('error');
                            console.log(error);
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
