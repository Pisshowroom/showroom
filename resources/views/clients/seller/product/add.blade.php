@extends('clients.master-dashboard')
@section('title', $product == null ? 'Tambah Produk' : 'Ubah Produk')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row" action="{{ route('dashboardSeller.addUpdateProduct') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if ($product != null && $product->id)
                <input type="hidden" value="{{ $product->id }}">
            @endif
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">{{ $product == null ? 'Tambah Produk' : 'Ubah Produk' }}</h2>
                    <div>
                        {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                        <button class="btn btn-md rounded font-sm hover-up">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Detail Produk</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label" for="name">Nama Produk*</label>
                            <input class="form-control" id="name" name="name" type="text" maxlength="70" required
                                placeholder="Masukkan nama produk" value="{{ $product != null ? $product->name : '' }}">
                        </div>
                        <div class="mb-4">
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategori Produk*</label>
                                <select id="category_id" class="form-select category_id" name="category_id" required>
                                    <option style="color:#232323;background:#f5f5f5 !important"
                                        {{ $product == null || ($product != null && $product->category_id == null) ? 'selected' : '' }}
                                        disabled>
                                        Pilih Kategori
                                    </option>
                                    @foreach ($data['categories'] as $category)
                                        <option value="{{ $category['id'] }}"
                                            {{ $product && $product->category_id != null && $product->category_id == $category['id'] ? 'selected' : '' }}>
                                            {{ $category['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="description">Deskripsi Produk*</label>
                            <textarea class="form-control" id="description" name="description" required placeholder="Masukkan keterangan produk"
                                rows="4" value="{{ $product != null ? $product->description : '' }}"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="unit">Satuan*</label>
                            <select id="unit" class="form-select unit" name="unit" required>
                                <input class="form-control" id="unit" name="unit" type="text"
                                    placeholder="pcs, buah, butir, dll"
                                    value="{{ $product != null ? $product->unit : '' }}">
                            </select>
                        </div>
                        {{-- <div class="mb-4">
                            <label class="form-label" for="variant">Variasi</label>
                            <input class="form-control" id="variant" name="variant" type="text"
                                placeholder="Masukkan variasi produk"
                                value="{{ $product != null ? $product->variant : '' }}">
                        </div> --}}
                        <div class="mb-4">
                            <label class="form-label" for="stock">Jumlah Stok*</label>
                            <input class="form-control" id="stock" name="stock" required
                                value="{{ $product != null ? $product->stock : '' }}"
                                onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="weight">Berat barang* (kg)</label>
                            <input class="form-control" id="weight" name="weight" required
                                value="{{ $product != null ? $product->weight : '' }}"
                                onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="price">Harga*</label>
                            <div class="row gx-2"></div>
                            <input class="form-control" name="price" id="price" required
                                onkeypress="return event.charCode>=48&&event.charCode<=57"
                                value="{{ $product != null ? $product->price : '' }}" type="tel">
                        </div>
                        <div class="mb-4">
                            <div class="form-check form-switch mx-3">
                                <input class="form-check-input cursor-pointer" type="checkbox" role="switch"
                                    id="discount">
                                <label class="form-check-label cursor-pointer" for="discount">Diskon</label>
                            </div>
                        </div>

                        <div class="mb-4" id="discountInput" style="display: none;">
                            <label class="form-label">Diskon</label>
                            <input class="form-control" placeholder="Masukkan diskon dalam bentuk %" type="numeric"
                                min="1" max="100" onkeypress="return event.charCode>=48&&event.charCode<=57"
                                id="myPercent" oninput="convertToDecimal(this)" />
                        </div>
                    </div>
                </div>
                {{-- <div class="card mb-4">
                    <div class="card-header">
                        <h4>Shipping</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="product_name">Width</label>
                                        <input class="form-control" id="product_name" type="text" placeholder="inch">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="product_name">Height</label>
                                        <input class="form-control" id="product_name" type="text" placeholder="inch">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="product_name">Weight</label>
                                    <input class="form-control" id="product_name" type="text" placeholder="gam">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="product_name">Shipping fees</label>
                                    <input class="form-control" id="product_name" type="text" placeholder="$">
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Gambar*</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-upload"><img src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                alt="">
                            <input class="form-control" type="file" name="images[]" multiple accept="image/*"
                                required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            $('#discount').change(function() {
                if (this.checked) {
                    $('#discountInput').show(); // Tampilkan input diskon jika switch checked
                } else {
                    $('#discountInput').hide(); // Sembunyikan input diskon jika switch unchecked
                }
            });
        });

        function convertToDecimal(inputElement) {
            var inputValue = inputElement.value.trim();

            // Remove any percentage sign (%) if present
            if (inputValue.endsWith("%")) {
                inputValue = inputValue.slice(0, -1);
            }

            // Convert the input to a decimal (e.g., 50% to 0.5)
            var decimalValue = parseFloat(inputValue) / 100;

            if (!isNaN(decimalValue) && decimalValue >= 0 && decimalValue <= 1) {
                // Update the input field with the decimal value
                var data = decimalValue * 100 + "%";
                inputElement.value = data.replace(/[^0-9]/g, '').substring(0, 3);
                // inputElement.value.replace(/[^0-9]/g, '').substring(0, 3);
            } else {
                // Handle invalid input, e.g., display an error message
            }
        }
    </script>
@endpush
