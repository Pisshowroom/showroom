@extends('clients.master-dashboard')
@section('title', 'Detail Transaksi')
@section('transaction', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Detail Transaksi</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 pr-80">
                        <header class="card-header2">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i
                                            class="material-icons md-calendar_today"></i><b>Wed, Aug 13, 2022,
                                            4:34PM</b></span><br><small class="text-muted">Transaksi ID:
                                        3453012</small><br><small class="text-muted">Transaksi Hash:
                                        1a7b7c1b33d161f45804730c70b75175dccd9883</small>
                                    <p class="mt-15"><span>Status:</span><span
                                            class="badge rounded-pill alert-success text-success">Success</span></p>
                                </div>
                                <div class="col-lg-6 col-md-6 ms-auto text-md-end"><a class="btn btn-primary"
                                        href="#">Download PDF</a><a class="btn btn-secondary print ms-2"
                                        href="#"><i class="icon material-icons md-print mr-5"></i>Print</a></div>
                            </div>
                        </header>
                        <!-- card-header end//-->
                        <hr>
                        <div class="trans-details mb-30">
                            <div class="box shadow-sm bg-light">
                                <div class="row">
                                    <div class="col-4">
                                        <h6 class="mb-15">Payment info</h6>
                                        <p><img class="border" src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}" height="20"> Master
                                            Card **** **** 4768<br> Business name: Grand Market LLC<br> Phone: +1 (800)
                                            555-154-52</p>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="mb-1">Customer</h6>
                                        <p class="mb-1">John Alexander<br> alex@example.com<br> +998 99 22123456</p>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="mb-1">Deliver to</h6>
                                        <p class="mb-1">City: Tashkent, Uzbekistan<br>Block A, House 123, Floor 2<br> Po
                                            Box 10000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-15">Item List</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="40%">Product</th>
                                        <th width="20%">Unit Price</th>
                                        <th width="20%">Quantity</th>
                                        <th class="text-end" width="20%">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a class="itemside" href="#">
                                                <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/1.jpg') }}"
                                                        alt="Item" width="40" height="40"></div>
                                                <div class="info"> T-shirt blue, XXL size</div>
                                            </a></td>
                                        <td> $44.25</td>
                                        <td> 2</td>
                                        <td class="text-end"> $99.50</td>
                                    </tr>
                                    <tr>
                                        <td><a class="itemside" href="#">
                                                <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/2.jpg') }}"
                                                        alt="Item" width="40" height="40"></div>
                                                <div class="info"> Winter jacket for men</div>
                                            </a></td>
                                        <td> $7.50</td>
                                        <td> 2</td>
                                        <td class="text-end"> $15.00</td>
                                    </tr>
                                    <tr>
                                        <td><a class="itemside" href="#">
                                                <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/3.jpg') }}"
                                                        alt="Item" width="40" height="40"></div>
                                                <div class="info"> Jeans wear for men</div>
                                            </a></td>
                                        <td> $43.50</td>
                                        <td> 2</td>
                                        <td class="text-end"> $102.04</td>
                                    </tr>
                                    <tr>
                                        <td><a class="itemside" href="#">
                                                <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/4.jpg') }}"
                                                        alt="Item" width="40" height="40"></div>
                                                <div class="info"> Product name color and size</div>
                                            </a></td>
                                        <td> $99.00</td>
                                        <td> 3</td>
                                        <td class="text-end"> $297.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <article class="float-end">
                                                <dl class="dlist">
                                                    <dt>Subtotal:</dt>
                                                    <dd>$973.35</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Shipping cost:</dt>
                                                    <dd>$10.00</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Grand total:</dt>
                                                    <dd><b class="h5">$983.00</b></dd>
                                                </dl>
                                            </article>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive//-->
                        <h5 class="mb-15">Catatan Transaksi</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, veritatis at.
                            Dolore facilis repellat numquam cum, id, iste sint libero odio atque a quam ducimus cumque quis
                            enim reiciendis repellendus?</p>
                    </div>
                    <!-- col end//-->
                    <div class="col-lg-4">
                        <header class="border-bottom mb-4 pb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-5 mt-25">Transaksi terakhir</h3>
                                    <hr class="mb-30">
                                </div>
                                <div class="col-lg-8 col-6 me-auto">
                                    <input class="form-control" type="text" placeholder="Search...">
                                </div>
                                <div class="col-lg-4 col-6">
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
                                        <th>Transaction ID</th>
                                        <th>Paid</th>
                                        <th>Date</th>
                                        <th class="text-end"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>#456667</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#887780</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#344556</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#998784</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>#556667</b></td>
                                        <td>$294.00</td>
                                        <td>18 Jan 2022</td>
                                        <td class="text-end"><a class="btn btn-sm btn-light font-sm rounded"
                                                href="#">Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive.//-->
                        <div class="pagination-area mt-30 mb-50">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="material-icons md-chevron_right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- col end//-->
                    <!-- row end//-->
                    <!-- card-body //-->
                </div>
            </div>
        </div>
    </section>

@endsection
@push('importjs')
@endpush
