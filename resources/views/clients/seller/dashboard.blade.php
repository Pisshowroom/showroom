@extends('clients.master-dashboard')
@section('title', 'Dashboard Toko')
@section('dashboardSeller', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
            <div><a class="btn btn-primary" href="{{ route('dashboardSeller.addWithdraw') }}"><i class="text-muted material-icons md-post_add"></i>Cairkan
                    Uang</a></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Pendapatan</h6><span>$13,456.5</span><span class="text-sm">Tidak
                                Termasuk biaya pengiriman </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Pesanan</h6><span>53.668</span><span class="text-sm">Tidak termasuk
                                pesanan dalam perjalanan</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Produk</h6><span>9.856</span><span class="text-sm">Dalam 19
                                Kategori</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Penghasilan Bulanan</h6><span>$6,982</span><span
                                class="text-sm">Berdasarkan waktu setempat Anda.</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Statistik penjualan</h5>
                        <canvas id="myChart" height="120px"></canvas>
                    </article>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Pendapatan Berdasarkan Wilayah</h5>
                        <canvas id="myChart2" height="217"></canvas>
                    </article>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <h4 class="card-title">Pesanan terbaru</h4>
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <div class="custom_select">
                            <select class="form-select select-nice">
                                <option selected="">All Categories</option>
                                <option>Women&apos;s Clothing</option>
                                <option>Men&apos;s Clothing</option>
                                <option>Cellphones</option>
                                <option>Computer &amp; Office</option>
                                <option>Consumer Electronics</option>
                                <option>Jewelry &amp; Accessories</option>
                                <option>Home &amp; Garden</option>
                                <option>Luggage &amp; Bags</option>
                                <option>Shoes</option>
                                <option>Mother &amp; Kids</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <input class="form-control" type="date" value="02.05.2022">
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="custom_select">
                            <select class="form-select select-nice">
                                <option selected="">Status</option>
                                <option>All</option>
                                <option>Paid</option>
                                <option>Chargeback</option>
                                <option>Refund</option>
                            </select>
                        </div>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" scope="col">
                                        <div class="form-check align-middle">
                                            <input class="form-check-input" id="transactionCheck01" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck01"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle" scope="col">Order ID</th>
                                    <th class="align-middle" scope="col">Billing Name</th>
                                    <th class="align-middle" scope="col">Date</th>
                                    <th class="align-middle" scope="col">Total</th>
                                    <th class="align-middle" scope="col">Payment Status</th>
                                    <th class="align-middle" scope="col">Payment Method</th>
                                    <th class="align-middle" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck02" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck02"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2540</a></td>
                                    <td>Neal Matthews</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$400</td>
                                    <td><span class="badge badge-pill badge-soft-success">Paid</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard
                                    </td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck03" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck03"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2541</a></td>
                                    <td>Jamal Burnett</td>
                                    <td>07 Oct, 2022</td>
                                    <td>$380</td>
                                    <td><span class="badge badge-pill badge-soft-danger">Chargeback</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa</td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck04" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck04"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2542</a></td>
                                    <td>Juan Mitchell</td>
                                    <td>06 Oct, 2022</td>
                                    <td>$384</td>
                                    <td><span class="badge badge-pill badge-soft-success">Paid</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal</td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck05" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck05"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2543</a></td>
                                    <td>Barry Dick</td>
                                    <td>05 Oct, 2022</td>
                                    <td>$412</td>
                                    <td><span class="badge badge-pill badge-soft-success">Paid</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard
                                    </td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck06" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck06"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2544</a></td>
                                    <td>Ronald Taylor</td>
                                    <td>04 Oct, 2022</td>
                                    <td>$404</td>
                                    <td><span class="badge badge-pill badge-soft-warning">Refund</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa</td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" id="transactionCheck07" type="checkbox">
                                            <label class="form-check-label" for="transactionCheck07"></label>
                                        </div>
                                    </td>
                                    <td><a class="fw-bold" href="#">#SK2545</a></td>
                                    <td>Jacob Hunter</td>
                                    <td>04 Oct, 2022</td>
                                    <td>$392</td>
                                    <td><span class="badge badge-pill badge-soft-success">Paid</span></td>
                                    <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal</td>
                                    <td><a class="btn btn-xs" href="{{ route('dashboardSeller.detailTransaction') }}">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table-responsive end//-->
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="material-icons md-chevron_right"></i></a></li>
                </ul>
            </nav>
        </div>
    </section>

@endsection
@push('importjs')
@endpush
