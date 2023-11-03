@extends('clients.master-dashboard')
@section('title', 'Semua Produk')
@section('product', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">List Produk</h2>
            </div>
            <div>
                {{-- <a class="btn btn-light rounded font-md" href="#">Export</a><a class="btn btn-light rounded font-md"
                    href="#">Import</a> --}}
                <a class="btn btn-primary btn-sm rounded" href="{{ route('dashboardSeller.addProduct') }}">Tambah Produk</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input class="form-control" type="text" placeholder="Cari produk..." name="search"
                            id="searchInput" value="{{ request()->input('search') ?? '' }}">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select id="kategori" class="form-select">
                            <option value="">Kategori</option>
                            @if (count($data['categories_product']) > 0)
                                @foreach ($data['categories_product'] as $item)
                                    <option {{ request()->get('category_id') == $item->id ? 'selected' : '' }}
                                        value="{{ $item->id }}">{{ $item->name ?? '' }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="align-middle" scope="col">Produk</th>
                                <th class="align-middle" scope="col">Kategori</th>
                                <th class="align-middle" scope="col">Harga</th>
                                <th class="align-middle" scope="col">Status</th>
                                <th class="align-middle" scope="col">Stok</th>
                                <th class="align-middle" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products) > 0)
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td class="align-middle">{{ $key + 1 }}</td>
                                        <td class="align-middle"><a class="itemside"
                                                href="{{ route('buyer.detailProduct', ['slug' => $product?->slug ?? '1234']) }}">
                                                <div class="left">
                                                    <img class="img-xs" src="{{ asset('ecom_dashboard/imgs/items/1.jpg') }}"
                                                        alt="Item" width="40" height="40">
                                                </div>
                                                <div class="info"> {{ $product?->name ?? '' }}</div>
                                            </a></td>
                                        <td class="align-middle">
                                            {{ $product->category ? $product->category->name ?? '' : '' }}
                                        </td>
                                        <td class="align-middle">{{ numbFormat($product->price) ?? '' }}</td>
                                        <td class="align-middle">{{ 'Aktif' }}</td>
                                        <td class="align-middle">
                                            1
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-xs"
                                                href="{{ route('dashboardSeller.editProduct', ['slug' => $product->slug ?? '1234']) }}">Detail</a>
                                            <a class="btn btn-xs-danger"
                                                href="{{ route('dashboardSeller.deleteProduct', ['slug' => $product->slug ?? '1234']) }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $products->links() }}
                            @else
                                <tr>
                                    <td colspan="8">No data Available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            // $('#kategori').change(function() {
            //     var selectedCategoryId = $(this).val();
            //     if ("{{ request()->get('search') }}") {
            //         var searchQuery = "{{ request()->get('search') }}";
            //     } else {
            //         var searchQuery = '';
            //     }

            //     var currentUrl = window.location.href;
            //     var urlObject = new URL(currentUrl);
            //     var params = new URLSearchParams(urlObject.search);

            //     // Set or replace 'search' parameter
            //     if (params.has('search')) {
            //         params.set('search', searchQuery);
            //     } else {
            //         params.append('search', searchQuery);
            //     }

            //     // Set or replace 'category' parameter
            //     if (params.has('category_id')) {
            //         params.set('category_id', selectedCategoryId);
            //     } else {
            //         params.append('category_id', selectedCategoryId);
            //     }

            //     urlObject.search = params.toString();

            //     window.location = urlObject.toString();
            // });
            // Function to update the URL
            function updateURL() {
                var searchQuery = $('#searchInput').val();
                var selectedCategoryId = $('#kategori').val();
                var baseUrl = '{{ route('dashboardSeller.allProduct') }}';
                var url = baseUrl;

                // Check if category_id exists and update the URL accordingly
                if (selectedCategoryId !== '') {
                    url += '?category_id=' + selectedCategoryId;
                }

                // Check if search query exists and update the URL accordingly
                if (searchQuery !== '') {
                    url += (selectedCategoryId !== '' ? '&' : '?') + 'search=' + searchQuery;
                }
                window.location=url;
                // Navigate to the constructed URL
                // history.pushState({}, '', url);
            }

            // Listen to the change event on the search input and category select
            $('#searchInput, #kategori').on('change', function() {
                updateURL();
            });
        });
    </script>
@endpush
