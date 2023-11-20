@extends('clients.master-dashboard')
@section('title', $product == null ? 'Tambah Produk' : 'Ubah Produk')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row"
            action="{{ route('dashboardSeller.addUpdateProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @if ($product != null && $product->id)
                <input type="hidden" value="{{ $product->id }}">
            @endif
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">{{ $product == null ? 'Tambah Produk' : 'Ubah Produk' }}</h2>
                    <div>
                        {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                        <button class="btn btn-md rounded font-sm hover-up" id="btn-product">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="row all">
                <div class="col-lg-8 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Detail Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label" for="name">Nama Produk*</label>
                                <input class="form-control" id="name" name="name" type="text" maxlength="70"
                                    required placeholder="Masukkan nama produk"
                                    value="{{ $product != null ? $product->name : '' }}">
                                <div class="text-end">
                                    <span class="max-name">maksimal panjang nama 0/70</span>
                                </div>
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
                                <input class="form-control" id="unit" name="unit" type="text"
                                    placeholder="pcs, buah, butir, dll"
                                    value="{{ $product != null ? $product->unit : '' }}">
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
                                <p class="textCancel fw-500 fs-14 pt-2 ls-3 d-none mb-2">Isi harga minimal Rp 50.000
                                </p>
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
                                    min="1" max="100"
                                    onkeypress="return event.charCode>=48&&event.charCode<=57" id="myPercent"
                                    oninput="convertToDecimal(this)" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Gambar*</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <label for="imageInput">
                                    <img src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}" alt="Upload Icon">
                                </label>
                                <input id="imageInput" class="form-control" type="file" name="images[]"
                                    accept="image/*">
                            </div>

                            <div class="preview-container" id="imagePreviewContainer">
                            </div>
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

            $('#imageInput').on('change', function(e) {
                var files = e.target.files;

                // Display new previews
                for (var i = 0; i < files.length; i++) {
                    displayImagePreview(files[i]);
                }
            });

            // Event listener for remove button click
            $(document).on('click', '.remove-btn', function() {
                // Remove the corresponding preview item
                $(this).parent().remove();
            });

            // Function to display image previews
            function displayImagePreview(file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Create preview item
                    var previewItem = $('<div class="preview-item"><img src="' + e.target.result +
                        '" alt="Image Preview"><button class="remove-btn" type="button">Remove</button></div>'
                    );

                    // Append preview item to container
                    $('#imagePreviewContainer').append(previewItem);
                };

                reader.readAsDataURL(file);
            }


            $('#discount').change(function() {
                if (this.checked) {
                    $('#discountInput').show(); // Tampilkan input diskon jika switch checked
                } else {
                    $('#discountInput').hide(); // Sembunyikan input diskon jika switch unchecked
                }
            });

            $('#name').on('input', function() {
                var currentLength = $(this).val().length;

                $('.max-name').text('Maksimal panjang nama ' + currentLength + '/70');
            });
            // $('#addVariantBtn').on('click', function() {
            //     // Clone the last variant container
            //     var clone = $('.all:last').clone(true);

            //     // Generate a unique identifier (timestamp in milliseconds)
            //     var uniqueId = new Date().getTime();

            //     // Update IDs and names for the cloned elements
            //     clone.find('.variant-input').val(''); // Clear the value for the new input
            //     clone.find('.max-name').text('maksimal panjang nama 0/70'); // Reset character count
            //     clone.find('.variant-input').attr('id', 'variant_' + uniqueId);
            //     clone.find('.variant-input').attr('name', 'variant_' + uniqueId + '[]');
            //     clone.find('.max-name').attr('id', 'max-name_' + uniqueId);

            //     // Insert the cloned variant container
            //     $('.all:last').after(clone);
            // });

            // // Update character count for each variant input
            // $(document).on('input', '.variant-input', function() {
            //     var currentLength = $(this).val().length;
            //     var uniqueId = $(this).attr('id').split('_')[1]; // Extract the unique identifier
            //     $('#max-name_' + uniqueId).text('Maksimal panjang nama ' + currentLength + '/70');
            // });

        });
        var tanpa_rupiah = document.getElementById('price');

        tanpa_rupiah.addEventListener('keyup', function(e) {
            if (this.value.length || this.value == 0) {}
            tanpa_rupiah.value = formatRupiah(this.value, 'Rp ');
            if (this.value > 1000) {
                if ($('.textCancel').hasClass('d-block')) {
                    $('.textCancel').addClass('d-none').removeClass('d-block');
                }
            }
            if (this.value >= 50.000) {
                if ($('.textCancel').hasClass('d-block')) {
                    $('.textCancel').addClass('d-none').removeClass('d-block');
                }
            }
        });

        // $('#btn-product').click(function(e) {
        //     e.preventDefault();
        //     var data = $('#price').val();
        //     data = data.toString().replace(/\Rp /g, '');
        //     var datas = data.toString().replace(/\./g, '');
        //     console.log(datas);
        //     if (datas.length == 0) {
        //         if ($('.list-infaq').hasClass('activeNominal')) {
        //             var nominal = $('.list-infaq.activeNominal').find('p').text();
        //             nominal = nominal.toString().replace(/\Rp /g, '');
        //             localStorage.setItem("nominalRupiah", nominal.toString().replace(/\./g, ''));
        //         }
        //         // $('.info-maraton2 h4').text(formatRupiah(localStorage.getItem('nominalRupiah'), 'Rp '));
        //     } else if (datas < 0) {
        //         $('.textCancel').removeClass('d-none').addClass('d-block');
        //     } else {
        //         if (datas.length != 0 && data > 0) {
        //             localStorage.setItem('nominalRupiah', datas);
        //         }
        //         // $('.info-maraton2 h4').text(formatRupiah(localStorage.getItem('nominalRupiah'), 'Rp '));

        //     }
        // });

        function formatRupiah(angka, prefix) {
            var number_string = angka.toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/g);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;

            return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        }

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

@push('css')
    <style>
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .preview-item {
            position: relative;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .preview-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 1px solid #ccc;
        }

        .remove-btn {
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            background-color: white;
            border: none;
            padding: 0;
        }
    </style>
@endpush
