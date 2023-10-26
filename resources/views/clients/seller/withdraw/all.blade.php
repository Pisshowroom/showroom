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
                                    <input class="form-control" type="text" placeholder="Search...">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <select class="form-select">
                                        <option>Method</option>
                                        <option>Master card</option>
                                        <option>Visa card</option>
                                        <option>Paypal</option>
                                    </select>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end//-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Transaksi ID</th>
                                        <th>Paid</th>
                                        <th>Method</th>
                                        <th>Date</th>
                                        <th class="text-end"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>#456667</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/1.png') }}"
                                                    alt="Payment"><span class="text text-muted">Amex</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}"
                                                    alt="Payment"><span class="text text-muted">Master card</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/3.png') }}"
                                                    alt="Payment"><span class="text text-muted">Paypal</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/4.png') }}"
                                                    alt="Payment"><span class="text text-muted">Visa</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#887780</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/4.png') }}"
                                                    alt="Payment"><span class="text text-muted">Visa</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#344556</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/4.png') }}"
                                                    alt="Payment"><span class="text text-muted">Visa</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}"
                                                    alt="Payment"><span class="text text-muted">Master card</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}"
                                                    alt="Payment"><span class="text text-muted">Master card</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#998784</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/3.png') }}"
                                                    alt="Payment"><span class="text text-muted">Paypal</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#556667</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/3.png') }}"
                                                    alt="Payment"><span class="text text-muted">Paypal</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#098989</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/3.png') }}"
                                                    alt="Payment"><span class="text text-muted">Paypal</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext"><img class="icon border"
                                                    src="{{ asset('ecom_dashboard/imgs/card-brands/4.png') }}"
                                                    alt="Payment"><span class="text text-muted">Visa</span></div>
                                        </td>
                                        <td>16.12.2022, 14:21</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
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
