@extends('clients.master-dashboard')
@section('title', 'Detail Transaksi')
@section('transaction', 'active')
@section('dashboard')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Detail Transaksi</h2>
            <p>Details for Order ID: 3453012</p>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i class="material-icons md-calendar_today"></i><b>Wed, Aug 13, 2022, 4:34PM</b></span><br><small class="text-muted">Order ID: 3453012</small></div>
                <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                    <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200">
                        <option>Change status</option>
                        <option>Awaiting payment</option>
                        <option>Confirmed</option>
                        <option>Shipped</option>
                        <option>Delivered</option>
                    </select><a class="btn btn-primary" href="#">Save</a><a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print"></i></a>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="row mb-50 mt-20 order-info-wrap">
                <div class="col-md-4">
                    <article class="icontext align-items-start"><span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-person"></i></span>
                        <div class="text">
                            <h6 class="mb-1">Customer</h6>
                            <p class="mb-1">John Alexander<br> alex@example.com<br> +998 99 22123456</p><a href="#">View profile</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="icontext align-items-start"><span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1">Order info</h6>
                            <p class="mb-1">Shipping: Fargo express<br> Pay method: card<br> Status: new</p><a href="#">Download info</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="icontext align-items-start"><span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-place"></i></span>
                        <div class="text">
                            <h6 class="mb-1">Deliver to</h6>
                            <p class="mb-1">City: Tashkent, Uzbekistan<br>Block A, House 123, Floor 2<br> Po Box 10000</p><a href="#">View profile</a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
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
                                            <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/1.jpg') }}" alt="Item" width="40" height="40"></div>
                                            <div class="info"> T-shirt blue, XXL size</div>
                                        </a></td>
                                    <td> $44.25</td>
                                    <td> 2</td>
                                    <td class="text-end"> $99.50</td>
                                </tr>
                                <tr>
                                    <td><a class="itemside" href="#">
                                            <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/2.jpg') }}" alt="Item" width="40" height="40"></div>
                                            <div class="info"> Winter jacket for men</div>
                                        </a></td>
                                    <td> $7.50</td>
                                    <td> 2</td>
                                    <td class="text-end"> $15.00</td>
                                </tr>
                                <tr>
                                    <td><a class="itemside" href="#">
                                            <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/3.jpg') }}" alt="Item" width="40" height="40"></div>
                                            <div class="info"> Jeans wear for men</div>
                                        </a></td>
                                    <td> $43.50</td>
                                    <td> 2</td>
                                    <td class="text-end"> $102.04</td>
                                </tr>
                                <tr>
                                    <td><a class="itemside" href="#">
                                            <div class="left"><img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/4.jpg') }}" alt="Item" width="40" height="40"></div>
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
                                            <dl class="dlist">
                                                <dt class="text-muted">Status:</dt>
                                                <dd><span class="badge rounded-pill alert-success text-success">Payment done</span></dd>
                                            </dl>
                                        </article>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><a class="btn btn-primary" href="page-orders-tracking.html">View Order Tracking</a>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="box shadow-sm bg-light">
                        <h6 class="mb-15">Payment info</h6>
                        <p><img class="border" src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}" height="20"> Master Card **** **** 4768<br> Business name: Grand Market LLC<br> Phone: +1 (800) 555-154-52</p>
                    </div>
                    <div class="h-25 pt-4">
                        <div class="mb-3">
                            <label>Notes</label>
                            <textarea class="form-control" id="notes" name="notes" placeholder="Type some note"></textarea>
                        </div>
                        <button class="btn btn-primary">Save note</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('importjs')
@endpush
