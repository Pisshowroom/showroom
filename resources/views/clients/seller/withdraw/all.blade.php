@extends('clients.master-dashboard')
@section('title', 'Semua Pencairan Uang')
@section('withdraw', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Semua Pencairan Uang</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <header class="border-bottom mb-4 pb-4">
                            <div class="row">
                                <div class="col-lg-5 col-6 me-auto">
                                    <input class="form-control" type="text" placeholder="Cari...">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <select class="form-select">
                                        <option>Pembayaran</option>
                                        <option>Master card</option>
                                        <option>Visa card</option>
                                        <option>Paypal</option>
                                    </select>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end//-->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th class="align-middle">Jumlah</th>
                                        <th class="align-middle">Pembayaran</th>
                                        <th class="align-middle">Tanggal</th>
                                        <th class="align-middle">Status</th>
                                        <th class="text-center align-middle"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">Rp 294.000</td>
                                        <td class="align-middle">
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/1.png') }}"
                                                    alt="Payment"><span class="text text-muted">Amex</span></div>
                                        </td>
                                        <td class="align-middle">20 Agustus 2023</td>
                                        <td class="align-middle">    <span class="badge rounded-pill alert-warning fw-normal">Menunggu
                                            Approve</span>
                                    </td>
                                        <td class="text-end align-middle"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="{{ route('dashboardSeller.detailWithdraw') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive.//-->
                        <!-- col end//-->
                    </div>
                    <!-- col end//-->
                    <!-- row end//-->
                    <!-- card-body //-->
                </div>
            </div>
        </div>
        <!-- card end//-->
    </section>
@endsection
@push('importjs')
@endpush
