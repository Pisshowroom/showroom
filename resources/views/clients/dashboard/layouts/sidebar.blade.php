<nav>
    <ul class="menu-aside">
        <li class="menu-item"><span class="text">Pembeli</span></li>
        <li class="menu-item @yield('dashboardBuyer')"><a class="menu-link" href="{{ route('dashboard.dashboard') }}"><i
                    class="icon material-icons md-home"></i><span class="text">Dashboard</span></a></li>
        {{-- <li class="menu-item has-submenu"><a class="menu-link" href="page-products-list.html"><i
                    class="icon material-icons md-shopping_bag"></i><span class="text">Products</span></a>
            <div class="submenu"><a href="page-products-list.html">Product List</a><a
                    href="page-products-grid.html">Product grid</a><a href="page-products-grid-2.html">Product
                    grid 2</a><a href="page-categories.html">Categories</a></div>
        </li> --}}
        {{-- <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                    class="icon material-icons md-shopping_cart"></i><span class="text">Orders</span></a>
            <div class="submenu"><a href="page-orders-1.html">Order list 1</a><a href="page-orders-2.html">Order
                    list 2</a><a href="page-orders-detail.html">Order detail</a><a
                    href="page-orders-tracking.html">Order tracking</a><a href="page-invoice.html">Invoice</a>
            </div>
        </li> --}}
        {{-- <li class="menu-item"><a class="menu-link" disabled="" href="#"><i
                    class="icon material-icons md-store"></i><span class="text">Penjual</span></a></li> --}}
        {{-- <li class="menu-item has-submenu"><a class="menu-link" href="page-sellers-cards.html"><i
                    class="icon material-icons md-store"></i><span class="text">Sellers</span></a>
            <div class="submenu"><a href="page-sellers-cards.html">Sellers cards</a><a
                    href="page-sellers-list.html">Sellers list</a><a href="page-seller-detail.html">Seller
                    profile</a></div>
        </li> --}}
        {{-- <li class="menu-item has-submenu"><a class="menu-link" href="page-transactions-1.html"><i
                    class="icon material-icons md-monetization_on"></i><span
                    class="text">Transactions</span></a>
            <div class="submenu"><a href="page-transactions-1.html">Transaction 1</a><a
                    href="page-transactions-2.html">Transaction 2</a><a
                    href="page-transactions-details.html">Transaction Details</a></div>
        </li> --}}
        <li class="menu-item @yield('myOrder')"><a class="menu-link" disabled=""
                href="{{ route('dashboard.myOrder') }}"><i class="icon material-icons md-star"></i><span
                    class="text">Pesanan ku</span></a>
        </li>
        <li class="menu-item"><a class="menu-link" disabled="" href="{{ route('buyer.wishlist') }}"><i
                    class="icon material-icons md-favorite"></i><span class="text">Wishlist</span></a>
        </li>
        <li class="menu-item"><a class="menu-link" disabled="" href="{{ route('buyer.cart') }}"><i
                    class="icon material-icons md-shopping_cart"></i><span class="text">Keranjang</span></a>
        </li>
        {{-- <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                    class="icon material-icons md-person"></i><span class="text">Account</span></a>
            <div class="submenu"><a href="page-account-login.html">User login</a><a
                    href="page-account-register.html">User registration</a><a href="page-error-404.html">Error
                    404</a></div>
        </li> --}}
        {{-- <li class="menu-item"><a class="menu-link" href="page-brands.html"><i
                    class="icon material-icons md-stars"></i><span class="text">Brands</span></a></li> --}}
        {{-- <li class="menu-item"><a class="menu-link" disabled="" href="#"><i
                    class="icon material-icons md-pie_chart"></i><span class="text">Statistics</span></a>
        </li> --}}

        <li class="menu-item @yield('settings')"><a class="menu-link" disabled=""
                href="{{ route('dashboard.settings') }}"><i class="icon material-icons md-settings"></i><span
                    class="text">Pengaturan</span></a>
        </li>
        <li class="menu-item"><a class="menu-link" disabled="" href="page-settings-1.html"><i
                    class="icon material-icons md-exit_to_app"></i><span class="text">Keluar</span></a>
        </li>
        <hr>
        <li class="menu-item"><span class="text">Toko</span></li>

        <li class="menu-item @yield('dashboardSeller')"><a class="menu-link" href="{{ route('dashboardSeller.dashboard') }}"><i
                    class="icon material-icons md-home"></i><span class="text">Dashboard</span></a></li>
        <li class="menu-item has-submenu @yield('product')">
            <a class="menu-link" href="{{ route('dashboardSeller.allProduct') }}"><i
                    class="icon material-icons md-shopping_bag"></i><span class="text">Produk</span></a>
            <div class="submenu">
                <a href="{{ route('dashboardSeller.allProduct') }}">Semua Produk</a>
                <a href="{{ route('dashboardSeller.addProduct') }}">Tambah Produk</a>
            </div>
        </li>
        {{-- <li class="menu-item"><a class="menu-link" disabled="" href="page-products-list.html"><i
                    class="icon material-icons md-shopping_bag"></i><span class="text">Produk</span></a>
        </li> --}}
        <li class="menu-item @yield('transaction')"><a class="menu-link" disabled=""
                href="{{ route('dashboardSeller.allTransaction') }}"><i
                    class="icon material-icons md-monetization_on"></i><span class="text">Transaksi Produk</span></a>
        </li>
        <li class="menu-item @yield('profile')"><a class="menu-link" disabled=""
            href="{{ route('dashboardSeller.profile') }}"><i
            class="icon material-icons md-storefront"></i><span class="text">Profil Toko</span></a>
        </li>
        <li class="menu-item has-submenu @yield('withdraw')">
            <a class="menu-link" href="{{ route('dashboardSeller.allWithdraw') }}"><i
                    class="icon material-icons md-account_balance_wallet"></i><span class="text">Pencairan Uang</span></a>
            <div class="submenu">
                <a href="{{ route('dashboardSeller.addWithdraw') }}">Cairkan</a>
                <a href="{{ route('dashboardSeller.allWithdraw') }}">Semua Pencairan</a>
            </div>
        </li>
        {{-- <li class="menu-item @yield('review')"><a class="menu-link" href="page-reviews.html"><i
                    class="icon material-icons md-comment"></i><span class="text">Review</span></a></li> --}}

    </ul>
    <hr>
    {{-- <ul class="menu-aside">
  <li class="menu-item has-submenu"><a class="menu-link" href="#"><i class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
    <div class="submenu"><a href="page-settings-1.html">Setting sample 1</a><a href="page-settings-2.html">Setting sample 2</a></div>
  </li>
  <li class="menu-item"><a class="menu-link" href="page-blank.html"><i class="icon material-icons md-local_offer"></i><span class="text"> Starter page</span></a></li>
</ul> --}}
</nav>
