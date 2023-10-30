@extends('clients.master-dashboard')
@section('title', 'Semua Produk')
@section('product', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Products List</h2>
            </div>
            <div><a class="btn btn-light rounded font-md" href="#">Export</a><a class="btn btn-light rounded font-md"
                    href="#">Import</a><a class="btn btn-primary btn-sm rounded" href="#">Create new</a></div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected="">All category</option>
                            <option>Electronics</option>
                            <option>Clothes</option>
                            <option>Automobile</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input class="form-control" type="date" value="02.05.2022">
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option selected="">Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header>
            <!-- card-header end//-->
            <div class="card-body">
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/1.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">T-shirt for men medium size</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$34.50</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/2.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Helionic Hooded Down Jacket</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$990.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/3.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-warning">Archived</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/4.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Fanmis Men's Travel Bag</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/3.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Jeans Shorts for Men</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-danger">Disabled</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/5.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Wallet made of leather brown color</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-warning">Archived</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/6.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Modern Armchair for home interiors</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/4.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/3.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                </article>
                <article class="itemlist">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-8 flex-grow-1 col-name"><a class="itemside" href="#">
                                <div class="left"><img class="img-sm img-thumbnail"
                                        src="{{ asset('ecom_dashboard/imgs/items/4.jpg') }}" alt="Item"></div>
                                <div class="info">
                                    <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                </div>
                            </a></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$180.99</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status"><span
                                class="badge rounded-pill alert-success">Active</span></div>
                        <div class="col-lg-1 col-sm-2 col-4 col-date"><span>02.11.2022</span></div>
                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end"><a
                                class="btn btn-sm font-sm rounded btn-brand mr-5" href="{{ route('dashboardSeller.editProduct') }}"><i
                                    class="material-icons md-edit"></i> Ubah</a><a
                                class="btn btn-sm font-sm btn-light rounded" href="#"><i
                                    class="material-icons md-delete_forever"></i> Hapus</a></div>
                    </div>
                    <!-- row .//-->
                    <!-- itemlist  .//-->
                    <!-- card-body end//-->
                </article>
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
