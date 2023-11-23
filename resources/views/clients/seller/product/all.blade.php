@extends('clients.master-dashboard')
@section('title', 'Semua Produk')
@section('product', 'active')
@section('dashboard')

    <section class="content-main">
        @if (session('success'))
            <div class="alert alert-success" id="mydiv">
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-warning" id="mydiv">
                {{ session('danger') }}
            </div>
        @endif
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Semua Produk</h2>
            </div>
            <div>
                {{-- <a class="btn btn-light rounded font-md" href="#">Export</a><a class="btn btn-light rounded font-md"
                    href="#">Import</a> --}}
                <a class="btn btn-primary btn-sm rounded"
                    href="{{ route('dashboardSeller.addProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Tambah
                    Produk</a>
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
                                                href="{{ route('buyer.detailProduct', ['slug' => $product?->slug ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                <div class="left">
                                                    <img class="img-xs"
                                                        src="{{ $product->images && count($product->images) > 0 ? $product->images[0] : asset('ecom_dashboard/imgs/items/1.jpg') }}"
                                                        alt="Item" width="40" height="40">
                                                </div>
                                                <div class="info">
                                                    {{ substr($product?->name ?? '', 0, 12) . (strlen($product?->name ?? '') > 12 ? '..' : '') }}
                                                </div>
                                            </a></td>
                                        <td class="align-middle">
                                            {{ $product->category ? $product->category->name ?? '' : '' }}
                                        </td>
                                        <td class="align-middle">{{ numbFormat($product->price) ?? '' }}</td>
                                        <td class="align-middle">
                                            {{ $product->stock && $product->stock > 0 ? moneyFormat($product->stock) : '0' }}
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-xs"
                                                href="{{ route('dashboardSeller.editProduct', ['id' => $product->id ?? '1']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>
                                            <a href="{{ route('dashboardSeller.deleteProduct', ['id' => $product->id]) }}"
                                                class="btn btn-xs-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8">No data Available</td>
                                </tr>
                            @endif
                        </tbody>
                        @if (count($products) > 0)
                            {{ $products->onEachSide(3)->appends(request()->except('page'))->links() }}
                        @endif

                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="modal fade" id="deleteProduct-{{ $product->id }}" tabindex="-1"
            role="dialog" aria-labelledby="deleteProductLabel-{{ $product->id }}"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="deleteProductLabel-{{ $product->id }}">Hapus Produk
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah kamu yakin ingin menghapus produk ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Tutup</button>
                        <a href="{{ route('dashboardSeller.deleteProduct', ['id' => $product->id]) }}"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div> --}}

    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#mydiv').fadeOut('fast');
            }, 2000);

            function updateURL() {
                var searchQuery = $('#searchInput').val();
                var selectedCategoryId = $('#kategori').val();
                var baseUrl = "{{ route('dashboardSeller.allProduct') }}";
                var url = baseUrl;

                // Check if category_id exists and update the URL accordingly
                if (selectedCategoryId !== '') {
                    url += '?category_id=' + selectedCategoryId;
                }

                // Check if search query exists and update the URL accordingly
                if (searchQuery !== '') {
                    url += (selectedCategoryId !== '' ? '&' : '?') + 'search=' + searchQuery;
                }
                auth =
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? 'auth=' . base64_encode(Auth::user()->uid) : '' }}"
                window.location = url + (url.includes('?') ? '&' : '?') + auth;
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
