<header class="main-header navbar">
    <div class="col-search">
        <form class="searchform">
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
        </form>
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i
                class="material-icons md-apps"></i></button>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link btn-icon" href="#"><i
                        class="material-icons md-notifications animation-shake"></i><span
                        class="badge rounded-pill">3</span></a></li>
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
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown"
                    href="#" aria-expanded="false"><img class="img-xs rounded-circle"
                        src="{{ asset('ecom_dashboard/imgs/people/avatar2.jpg') }}" alt="User"></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a class="dropdown-item"
                        href="{{ route('dashboard.settings') }}"><i class="material-icons md-perm_identity"></i>
                        Profil</a><a class="dropdown-item" href="#"><i
                            class="material-icons md-settings"></i>Account Settings</a><a class="dropdown-item"
                        href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a><a
                        class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a><a
                        class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help
                        center</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i
                            class="material-icons md-exit_to_app"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
