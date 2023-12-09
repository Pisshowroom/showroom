@extends('clients.master-dashboard')
@section('title', $product == null ? 'Tambah Produk' : 'Ubah Produk')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row" id="addUpdateProduct" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($product != null && $product->id)
                <input type="hidden" name="id" id="id" value="{{ $product->id }}">
            @endif
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">{{ $product == null ? 'Tambah Produk' : 'Ubah Produk' }}</h2>
                    <div>
                        {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                        <button type="submit" class="btn btn-md rounded font-sm hover-up" id="btn-product">Simpan</button>
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
                                    @if ($product != null && $product->name)
                                        maksimal panjang nama {{ strlen($product->name) ?? 0 }}/70</span>
                                    @else
                                        <span class="max-name">maksimal panjang nama 0/70</span>
                                    @endif
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
                            @if (strlen($product != null && $product->category_id) > 0)
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="sub_category_id" class="form-label w-100">Sub kategori:</label>
                                        <select id="sub_category_id" class="form-select sub_category_id"
                                            name="sub_category_id">
                                            <option style="color:#232323;background:#f5f5f5 !important" selected disabled>
                                                Pilih
                                                Sub kategori</option>
                                            @foreach ($data['sub_category'] as $sc)
                                                <option value="{{ $sc['id'] }}"
                                                    {{ $sc['id'] == $product->sub_category_id ? 'selected' : '' }}>
                                                    {{ $sc['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 div_sub_category_id dnone">
                                    <div class="mb-3">
                                        <label for="sub_category_id" class="form-label w-100">Sub kategori:</label>
                                        <select id="sub_category_id" class="form-select sub_category_id"
                                            name="sub_category_id">
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="mb-4">
                                <label class="form-label" for="description">Deskripsi Produk*</label>
                                <textarea class="form-control" id="description" name="description" required placeholder="Masukkan keterangan produk"
                                    rows="4">{{ $product != null ? $product->description : '' }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="unit">Satuan*</label>
                                <input class="form-control" id="unit" name="unit" type="text" required
                                    placeholder="pcs, buah, butir, dll"
                                    value="{{ $product != null ? $product->unit : '' }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="stock">Jumlah Stok*</label>
                                <input class="form-control" id="stock" name="stock" required
                                    value="{{ $product != null ? moneyFormat($product->stock) : '' }}"
                                    onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="weight">Berat barang* (gram)</label>
                                <input class="form-control" id="weight" name="weight" required
                                    value="{{ $product != null ? moneyFormat($product->weight) : '' }}"
                                    onkeypress="return event.charCode>=48&&event.charCode<=57" type="text"
                                    pattern="[0-9]+([,.][0-9]+)?">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="price">Harga*</label>
                                <div class="row gx-2"></div>
                                <input class="form-control" name="price" id="price" required
                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                    value="{{ $product != null ? numbFormat($product->price) : '' }}" type="tel">
                                <p class="textCancel fw-500 fs-14 pt-2 ls-3 d-none mb-2">Isi harga minimal Rp 50.000</p>
                            </div>
                            <div class="mb-4">
                                <div class="form-check form-switch mx-3">
                                    <input class="form-check-input cursor-pointer" type="checkbox" role="switch"
                                        {{ $product != null && $product->discount && $product->discount > 0 ? 'checked' : '' }}
                                        id="discounts">
                                    <label class="form-check-label cursor-pointer" for="discounts">Diskon</label>
                                </div>
                            </div>

                            <div class="mb-4" id="discountInput"
                                style="{{ $product != null && $product->discount && $product->discount > 0 ? '' : 'display: none;' }}">
                                <label class="form-label">Diskon</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="Masukkan diskon dalam bentuk %"
                                        type="numeric" min="0.1" max="100" name="discount" id="discount"
                                        value="{{ $product != null ? $product->discount : '' }}"
                                        onkeypress="return event.charCode>=48&&event.charCode<=57" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
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
                                    {{ $product == null ? 'required' : '' }} accept="image/*" multiple>
                            </div>

                            <div class="preview-container" id="imagePreviewContainer">
                                @if ($product != null && $product->images && count($product->images) > 0)
                                    @foreach ($product->images as $image)
                                        <div class="preview-item">
                                            <img src="{{ asset($image) }}" alt="Image Preview">
                                            <button class="remove-btn" style="background: white !important"
                                                type="button"><i
                                                    class="icon material-icons md-delete text-danger"></i></button>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>

@endsection
@push('importcss')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100% !important;
        }

        .select2-selection {
            height: 48px !important;
            border: 1px solid rgba(0, 0, 0, 0.125) !important;
            padding: 10px 20px !important;
            font-size: 15px !important;
            font-weight: 400 !important;
            color: #1a1668 !important;
            transition: all 0.3s ease-in-out !important;
            background-color: #f5f5f5 !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff !important;
            border: 1px solid #aaa !important;
            border-radius: 4px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 10px !important;
        }
    </style>
@endpush
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

            $(document).on('click', '.remove-btn', function() {
                var removedIndex = $(this).parent().index();
                $(this).parent().remove();
                var imageArray = [];

                // Remove the corresponding array item
                if (removedIndex !== -1) {
                    // Assuming you have an array called imageArray
                    imageArray.splice(removedIndex, 1);
                }
            });
            //province

            $('.category_id').change(function() {
                $('.div_sub_category_id').css('display', 'block');
                var id = this.value;
                $.ajax({
                    type: "GET",
                    url: "{{ route('getSubCategory') }}" + '/' + id +
                        "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                    dataType: "json",
                    success: function(data) {
                        var html = '';
                        html +=
                            `<option style="color:#232323;background:#f5f5f5 !important" selected disabled>Pilih Sub kategori</option>`;
                        data.forEach((element, i) => {

                            html += `<option value="${element['id']}">${element['name']}
                                </option>`;
                        })
                        $(`.sub_category_id`).html(html);
                    }
                });
            });
            $("#sub_category_id").select2({
                placeholder: "Pilih Sub kategori",
                allowClear: true
            });

            function displayImagePreview(file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var previewItem = $(
                        '<div class="preview-item"><img src="' + e.target.result +
                        '" alt="Image Preview">' +
                        '<button class="remove-btn" style="background:white !important;" type="button"><i class="icon material-icons md-delete text-danger"></i></button></div>'
                    );
                    var imageArray = [];

                    $('#imagePreviewContainer').append(previewItem);
                    // Assuming you have an array called imageArray
                    imageArray.push(file);
                };

                reader.readAsDataURL(file);
            }



            $('#discounts').change(function() {
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
            var tanpa_rupiah = $('#price');

            // Set the initial value if product->price is available
            var stock = $('#stock');

            stock.on('keyup', function() {
                // Apply any formatting logic here
                stock.val(formatRupiah(this.value));
            });
            var weight = $('#weight');

            weight.on('keyup', function() {
                // Apply any formatting logic here
                weight.val(formatRupiah(this.value));
            });

            tanpa_rupiah.on('keyup', function() {
                // Apply any formatting logic here
                tanpa_rupiah.val(formatRupiah(this.value, 'Rp '));

                // Check if the entered price is less than 50,000
                if (parseFloat(this.value.replace(/[^\d]/g, '')) < 50000) {
                    $('.textCancel').addClass('d-block').removeClass('d-none');
                } else {
                    $('.textCancel').addClass('d-none').removeClass('d-block');
                }
            });

            function formatRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }

        });

        $('#addUpdateProduct').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);

            // Append other data to FormData object
            formData.append('name', $('#name').val());
            formData.append('category_id', $('#category_id').val());
            formData.append('sub_category_id', $('#sub_category_id').val());
            formData.append('description', $('#description').val());
            formData.append('unit', $('#unit').val());
            formData.append('stock', $('#stock').val());
            formData.append('price', $('#price').val());
            formData.append('weight', $('#weight').val());

            if ("{{ $product != null && $product->id }}") {
                formData.append('id', $('#id').val());
            }

            if ($('#discounts').is(":checked") && $('#discountInput').is(":visible")) {
                formData.append('discount', $('#discount').val());
            }
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $('.loading').removeClass('d-none').addClass('show-modal');
            $.ajax({
                type: "POST",
                url: "{{ route('dashboardSeller.addUpdateProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    if (data.status == "success") {
                        messageSuccess(data.message);
                        window.location.replace(data.redirect);
                    } else {
                        messageError(data.message);
                    }
                },
                error: function(error) {
                    messageError(error.message);
                },
                complete: function() {
                    // This block will be executed regardless of success or failure
                    $('.loading').addClass('d-none').removeClass('show-modal');
                }
            });

        });


        function messageSuccess(res) {
            $('#myDivHandleSuccess').text('');
            $('#myDivHandleSuccess').text(res);
            $('#myDivHandleSuccess').css('display',
                'block');
            setTimeout(function() {
                $('#myDivHandleSuccess')
                    .fadeOut(
                        'fast');
            }, 2000);
        }

        function messageError(res) {
            $('#myDivHandleError').text('');
            $('#myDivHandleError').text(res);
            $('#myDivHandleError').css('display',
                'block');
            setTimeout(function() {
                $('#myDivHandleError')
                    .fadeOut(
                        'fast');
            }, 2000);
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
            object-fit: contain;
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
