@extends('clients.master-dashboard')
@section('title', $product?->variants_count == 0 ? 'Tambah Varian' : 'Ubah Varian')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row"
            action="{{ route('dashboardSeller.addUpdateProductVariant') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @if ($product != null && $product->id)
                <input type="hidden" name="id" value="{{ $product->id }}">
            @endif
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">{{ $product?->variants_count == 0 ? 'Tambah Varian' : 'Ubah Varian' }}</h2>
                    <div>
                        {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                        <button type="submit" class="btn btn-md rounded font-sm hover-up" id="btn-product">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="row all">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Detail Varian</h4>
                        </div>
                        <div class="card-body">
                            <div id="variantsSection">
                                @if ($product && $product->variants && count($product->variants) > 0)
                                    @foreach ($product->variants as $k => $variant)
                                        <div class="variants">
                                            <input type="hidden" name="variants[{{ $k }}][id]"
                                                value="{{ $variant->id }}">
                                            <div class="mb-4 variant">
                                                <label class="form-label">Nama Variasi</label>
                                                <input class="form-control name" name="variants[{{ $k }}][name]"
                                                    maxlength="75" type="text" value="{{ $variant->name }}">
                                                <div class="text-end">
                                                    <span class="max-name">maksimal panjang nama
                                                        {{ strlen($variant->name) ?? 0 }}/75</span>
                                                </div>

                                            </div>
                                            <div class="mb-4 variant">
                                                <label class="form-label">Deskripsi Varian*</label>
                                                <textarea class="form-control" name="variants[{{ $k }}][description]" required
                                                    placeholder="Masukkan keterangan varian" rows="4">{{ $variant != null ? $variant->description : '' }}</textarea>
                                            </div>
                                            <div class="mb-4 variant">
                                                <label class="form-label">Satuan*</label>
                                                <input class="form-control" name="variants[{{ $k }}][unit]"
                                                    type="text" required placeholder="pcs, buah, butir, dll"
                                                    value="{{ $variant != null ? $variant->unit : '' }}">
                                            </div>
                                            <div class="mb-4 variant">
                                                <label class="form-label">Jumlah Stok*</label>
                                                <input class="form-control stock"
                                                    name="variants[{{ $k }}][stock]" required
                                                    value="{{ $variant != null ? moneyFormat($variant->stock) : '' }}"
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                                    type="tel">
                                            </div>
                                            <div class="mb-4 variant">
                                                <label class="form-label">Berat barang* (gram)</label>
                                                <input class="form-control weight"
                                                    name="variants[{{ $k }}][weight]" required
                                                    value="{{ $variant != null ? moneyFormat($variant->weight) : '' }}"
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                                    >
                                            </div>
                                            <div class="mb-4 variant">
                                                <label class="form-label">Harga*</label>
                                                <div class="row gx-2"></div>
                                                <input class="form-control price"
                                                    name="variants[{{ $k }}][price]" required
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                                    value="{{ $variant != null ? numbFormat($variant->price) : '' }}"
                                                    type="tel">
                                                <p class="textCancel fw-500 fs-14 pt-2 ls-3 d-none mb-2">Isi harga minimal
                                                    {{ numbFormat('5000') }}</p>
                                            </div>
                                            <aside class="mb-4 variant">
                                                <label for="imageInput_{{ $variant->id }}"
                                                    class="form-label">Gambar*(maksimal 2mb)</label>
                                                    <br>
                                                    <a style="font-size: 12px" href="https://www.iloveimg.com/compress-image" target="_blank">Konvert gambar disini <span>https://www.iloveimg.com/compress-image</span></a>
                                                <figure>
                                                    @if ($variant && $variant->images && is_array($variant->images) && count($variant->images) > 0)
                                                        @if (is_object($variant->images[0]))
                                                        @else
                                                            <img class="img-lg mb-3 img-avatar previewImage"
                                                                src="{{ $variant != null && $variant->images != null ? $variant->images[0] ?? asset('ecom_dashboard/imgs/theme/upload.svg') : asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                                                alt="{{ $variant->name ?? 'produk varian' }}">
                                                        @endif
                                                    @elseif ($variant && $variant->images && is_string($variant->images) && $variant->images != null)
                                                        <img class="img-lg mb-3 img-avatar previewImage"
                                                            src="{{ $variant != null && $variant->images != null ? $variant->images ?? asset('ecom_dashboard/imgs/theme/upload.svg') : asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                                            alt="{{ $variant->name ?? 'produk varian' }}">
                                                    @else
                                                        <img class="img-lg mb-3 img-avatar previewImage"
                                                            src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                                            alt="produk varian">
                                                    @endif
                                                    <figcaption>
                                                        <input id="imageInput_{{ $variant->id }}"
                                                            class="form-control imageInput"
                                                            {{ $variant->images == null ? 'required' : '' }}
                                                            accept="image/*" type="file"
                                                            name="variants[{{ $k }}][images]">
                                                    </figcaption>
                                                </figure>
                                            </aside>
                                            <button type="button" class="removeVariantBtn btn btn-xs-danger mb-4"
                                                id="btn-{{ $k }}">Hapus
                                                Variasi</button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="variants">
                                        <div class="mb-4 variant">
                                            <label class="form-label">Nama Variasi</label>
                                            <input class="form-control name" name="variants[0][name]" type="text"
                                                maxlength="75" required>
                                            <div class="text-end">
                                                <span class="max-name">maksimal panjang nama 0/75</span>
                                            </div>
                                        </div>

                                        <div class="mb-4 variant">
                                            <label class="form-label">Deskripsi Varian*</label>
                                            <textarea class="form-control" name="variants[0][description]" required placeholder="Masukkan keterangan varian"
                                                rows="4"></textarea>
                                        </div>
                                        <div class="mb-4 variant">
                                            <label class="form-label">Satuan*</label>
                                            <input class="form-control" name="variants[0][unit]" type="text" required
                                                placeholder="pcs, buah, butir, dll">
                                        </div>
                                        <div class="mb-4 variant">
                                            <label class="form-label">Jumlah Stok*</label>
                                            <input class="form-control stock" name="variants[0][stock]" required
                                                onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                                        </div>
                                        <div class="mb-4 variant">
                                            <label class="form-label">Berat barang* (gram)</label>
                                            <input class="form-control weight" name="variants[0][weight]" required
                                                onkeypress="return event.charCode>=48&&event.charCode<=57" type="text"
                                                pattern="[0-9]+([,.][0-9]+)?">
                                        </div>
                                        <div class="mb-4 variant">
                                            <label class="form-label">Harga*</label>
                                            <div class="row gx-2"></div>
                                            <input class="form-control price" name="variants[0][price]" required
                                                onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                                            <p class="textCancel fw-500 fs-14 pt-2 ls-3 d-none mb-2">Isi harga minimal Rp
                                                {{ numbFormat('5000') }}</p>
                                        </div>
                                        <aside class="mb-4 variant">
                                            <label class="form-label">Gambar*(maksimal 2mb)</label>
                                            <br>
                                            <a style="font-size: 12px" href="https://www.iloveimg.com/compress-image" target="_blank">Konvert gambar disini <span>https://www.iloveimg.com/compress-image</span></a>
                                            <figure>
                                                <img class="img-lg mb-3 img-avatar previewImage"
                                                    src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                                    alt="produk varian">
                                                <figcaption>
                                                    <input class="form-control imageInput" required accept="image/*"
                                                        type="file" name="variants[0][images]">
                                                </figcaption>
                                            </figure>
                                        </aside>

                                        <button type="button" class="removeVariantBtn btn btn-xs-danger mb-4"
                                            id="btn-0">Hapus
                                            Variasi</button>
                                    </div>

                                @endif

                            </div>
                            <button type="button" id="addVariantBtn" class="btn btn-xs-success mb-4">Tambah
                                Variasi</button>

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
@push('importjs')
    <script>
        $(document).ready(function() {
            var variantsSection = $('#variantsSection');
            var addVariantBtn = $('#addVariantBtn');

            addVariantBtn.click(function() {
                addVariant();
            });


            function addVariant() {
                // Customize this part based on your variant structure
                var k = variantsSection.children('.variant').length; // Get the number of existing variants

                // Add the HTML structure for each variant
                var variantHtml = `
            <div class="variants">
                <div class="mb-4 variant">
                <label class="form-label">Nama Variasi</label>
                <input class="form-control name" name="variants[${k}][name]" type="text" maxlength="75" required>
                <div class="text-end">
                    <span class="max-name">maksimal panjang nama 0/75</span>
                </div>
                </div>

                <div class="mb-4 variant">
                <label class="form-label">Deskripsi Varian*</label>
                <textarea class="form-control" name="variants[${k}][description]" required placeholder="Masukkan keterangan varian" rows="4"></textarea>
                </div>

                <div class="mb-4 variant">
                <label class="form-label">Satuan*</label>
                <input class="form-control" name="variants[${k}][unit]" type="text" required placeholder="pcs, buah, butir, dll">
                </div>

                <div class="mb-4 variant">
                <label class="form-label">Jumlah Stok*</label>
                <input class="form-control stock" name="variants[${k}][stock]" required onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                </div>

                <div class="mb-4 variant">
                <label class="form-label">Berat barang* (gram)</label>
                <input class="form-control weight" name="variants[${k}][weight]" required onkeypress="return event.charCode>=48&&event.charCode<=57" >
                </div>

                <div class="mb-4 variant">
                <label class="form-label">Harga*</label>
                <div class="row gx-2"></div>
                <input class="form-control price" name="variants[${k}][price]" required onkeypress="return event.charCode>=48&&event.charCode<=57" type="tel">
                <p class="textCancel fw-500 fs-14 pt-2 ls-3 d-none mb-2">Isi harga minimal ${formatRupiah('5000','Rp ')}</p>
                </div>


                <aside class="mb-4 variant">
                <label class="form-label">Gambar*(maksimal 2mb)</label>
                <br>
                <a style="font-size: 12px" href="https://www.iloveimg.com/compress-image" target="_blank">Konvert gambar disini <span>https://www.iloveimg.com/compress-image</span></a>
                <figure>
                    <img class="img-lg mb-3 img-avatar previewImage"
                        src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                        alt="produk varian">
                    <figcaption>
                        <input class="form-control imageInput" required accept="image/*"
                            type="file" name="variants[${k}][images]">
                    </figcaption>
                </figure>
                </aside>

                <button type="button" class="removeVariantBtn btn btn-xs-danger mb-4" id="btn-${k}">Hapus Variasi</button>
            </div>`;
                variantsSection.append(variantHtml);
            };

            $('#variantsSection').on('click', '.removeVariantBtn', function() {
                var variantToRemove = $(this).closest('.variants');
                variantToRemove.remove();
                if ($(this).find('.variants').length === 0) {
                    $(this).remove();
                }
            });
            $('#variantsSection').on('input', 'input.name', function() {
                var currentLength = $(this).val().length;

                $('.max-name').text('Maksimal panjang nama ' + currentLength + '/75');

            });
            $('#variantsSection').on('input', 'input.imageInput', function() {
                var file = this.files[0];
                var reader = new FileReader();
                var previewImage = $(this).closest('.variant').find('.previewImage');

                reader.onload = function(event) {
                    previewImage.attr('src', event.target.result);
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            });

            $('#variantsSection').on('input', 'input.price', function() {

                $(this).val(formatRupiah(this.value, 'Rp '));

                // Check if the entered price is less than 50,000
                if (parseFloat(this.value.replace(/[^\d]/g, '')) < 5000) {
                    $('.textCancel').addClass('d-block').removeClass('d-none');
                } else {
                    $('.textCancel').addClass('d-none').removeClass('d-block');
                }
            });
            $('#variantsSection').on('input', 'input.stock', function() {
                $(this).val(formatRupiah(this.value));
            });
            $('#variantsSection').on('input', 'input.weight', function() {
                $(this).val(formatRupiah(this.value));
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

        $('form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            $('.loading').removeClass('d-none').addClass('show-modal');

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                processData: false,
                contentType: false,
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
