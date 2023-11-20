<header class="main-header navbar">
    <div class="col-search">
        {{-- <form class="searchform">
            <div class="input-group">
                <input class="form-control" list="search_terms" type="text" placeholder="Cari Produk">
                <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
            </div>
            <datalist id="search_terms">
                <option value="Products"></option>
                <option value="New orders"></option>
                <option value="Apple iphone"></option>
                <option value="Ahmed Hassan"></option>
            </datalist>
        </form> --}}
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i
                class="material-icons md-apps"></i></button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn-icon" href="#">
                    <i class="material-icons md-notifications animation-shake"></i>
                    {{-- <span class="badge rounded-pill">3</span> --}}
                </a>
            </li>
            <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i
                        class="material-icons md-nights_stay"></i></a></li>
            {{-- <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i
                        class="material-icons md-cast"></i></a></li>
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownLanguage"
                    data-bs-toggle="dropdown" href="#" aria-expanded="false"><i
                        class="material-icons md-public"></i></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage"><a
                        class="dropdown-item text-brand" href="#"><img
                            src="{{ asset('ecom_dashboard/imgs/theme/flag-us.png') }}"
                            alt="English">English</a><a class="dropdown-item" href="#"><img
                            src="{{ asset('ecom_dashboard/imgs/theme/flag-fr.png') }}"
                            alt="Français">Fran&ccedil;ais</a><a class="dropdown-item" href="#"><img
                            src="{{ asset('ecom_dashboard/imgs/theme/flag-jp.png') }}"
                            alt="Français">&#x65E5;&#x672C;&#x8A9E;</a><a class="dropdown-item"
                        href="#"><img src="{{ asset('ecom_dashboard/imgs/theme/flag-cn.png') }}"
                            alt="Français">&#x4E2D;&#x56FD;&#x4EBA;</a></div>
            </li> --}}
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown" href="#"
                    aria-expanded="false"><img class="img-xs rounded-circle"
                        src="{{ Auth::guard('web')->user() && Auth::guard('web')->user()->image ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                        alt="akun {{ Auth::guard('web')->user()->name ?? '' }}"></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><i
                            class="material-icons md-settings"></i>Pengaturan</a>
                    <a class="dropdown-item" href="{{ route('dashboard.myOrder') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><i
                            class="material-icons md-star"></i>Pesanan ku</a>
                    @if (Auth::guard('web')->user()->is_seller == 0)
                        <a class="dropdown-item" href="{{ route('dashboardSeller.profile') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><i
                                class="material-icons md-storefront"></i>Daftar Toko</a>
                    @else
                        <a class="dropdown-item" href="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><i
                                class="material-icons md-storefront"></i>Toko</a>
                    @endif
                    <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Bantuan</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                        href="{{ route('logout') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><i class="material-icons md-exit_to_app"></i>Keluar</a>
                </div>
            </li>
        </ul>
    </div>
</header>
