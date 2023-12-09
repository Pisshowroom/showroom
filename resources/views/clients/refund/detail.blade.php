@extends('clients.master-dashboard')
@section('title', request()->get('status') == 'refund' ? 'Pengajuan Pengembalian' : (request()->get('status') ==
    'complaint' ? 'Komplain' : 'Ajukan'))
@section('refund', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row"
            action="{{ route('dashboard.requestRefund') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
            method="POST">
            @csrf
            <div class="col-12">
                <div class="content-header">
                    @if (request()->get('status') && request()->get('status') == 'refund')
                        <h2 class="content-title">Pengajuan Pengembalian</h2>
                    @elseif (request()->get('status') && request()->get('status') == 'complaint')
                        <h2 class="content-title">Komplain</h2>
                    @else
                        <h2 class="content-title">Ajukan</h2>
                    @endif
                    <div>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up" id="btn-product">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="row all">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Form</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            @if (request()->get('status') && request()->get('status') == 'complaint')
                                <input class="form-control" id="returning_product_type" name="returning_product_type"
                                    type="hidden" value="Komplain">
                            @elseif (request()->get('status') && request()->get('status') == 'refund')
                                <div class="mb-4">
                                    <div class="mb-3">
                                        <label for="returning_product_type" class="form-label">Pilih Pengembalian*</label>
                                        <select id="returning_product_type" class="form-select returning_product_type"
                                            name="returning_product_type" required>
                                            <option style="color:#232323;background:#f5f5f5 !important" value="0"
                                                disabled>
                                                Pilih
                                            </option>
                                            <option value="Refund" selected>Pengembalian Uang</option>
                                            <option value="ReturnProdukDanUang">Pengembalian Pesanan & Uang</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="mb-4">
                                <label class="form-label" for="returning_reason">Alasan</label>
                                <input class="form-control" id="returning_reason" name="returning_reason" type="text"
                                    placeholder="contoh: barang rusak / tidak sesuai">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="returning_description">Deskripsi</label>
                                <textarea class="form-control" id="returning_description"
                                    {{ request()->get('status') && request()->get('status') == 'complaint' ? '' : 'required' }}
                                    name="returning_description" placeholder="contoh: rusak 50% dan tidak bisa diperbaiki" rows="4"></textarea>
                            </div>
                            @if (request()->get('status') && request()->get('status') == 'refund')
                                <aside class="mb-4 variant">
                                    <label class="form-label mb-3">Gambar*</label>
                                    <figure>
                                        <figcaption>
                                            <input class="form-control" id="imageInput" required accept="image/*"
                                                type="file" multiple name="returning_images">
                                        </figcaption>
                                        <div class="preview-container" id="imagePreviewContainer">
                                        </div>
                                    </figure>
                                </aside>
                                <div class="mb-4 variant">
                                    <label class="form-label">Video*</label>

                                    <div class="input-upload">
                                        <label>
                                            <img src="{{ asset('ecom_dashboard/imgs/theme/upload.svg') }}"
                                                alt="Upload Icon">
                                        </label>
                                        <input class="form-control" required id="videoInput" accept="video/*" type="file"
                                            name="returning_video">
                                        <div id="videoPreview"></div>
                                    </div>

                                </div>
                                <div class="mb-4 d-none" id="order_items">
                                    @if (count($order->order_items) > 0)
                                        <label class="form-label">Pilih Produk yang ingin dikembalikan*</label>
                                        @foreach ($order->order_items as $k => $oi)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="order_items[{{ $k }}][{{ $oi }}]"
                                                    value="{{ $order->order_items[$k] }}" id="produk-{{ $k }}"
                                                    {{ $k == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="produk-{{ $k }}">
                                                    {{ $oi?->product?->name ?? '' }}
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>
@endsection

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
@push('importjs')
    <script>
        $(document).ready(function() {


            if ("{{ request()->get('status') && request()->get('status') == 'refund' }}") {

                $('#returning_product_type').on('change', function() {
                    var selectedOption = $(this).find('option:selected');
                    console.log(selectedOption.val());
                    if (selectedOption.val() != 0) {
                        if (selectedOption.val() == 'ReturnProdukDanUang') {
                            $('#order_items').removeClass('d-none').addClass('d-block');
                        } else {
                            $('#order_items').removeClass('d-block').addClass('d-none');

                        }
                    }
                });
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

                function displayImagePreview(file) {
                    var reader = new FileReader();
                    var imageArray = [];
                    reader.onload = function(e) {
                        var previewItem = $(
                            '<div class="preview-item"><img src="' + e.target.result +
                            '" alt="Image Preview">' +
                            '<button class="remove-btn" style="background:white !important;" type="button"><i class="icon material-icons md-delete text-danger"></i></button></div>'
                        );

                        $('#imagePreviewContainer').append(previewItem);
                        // Assuming you have an array called imageArray
                        imageArray.push(file);
                    };

                    reader.readAsDataURL(file);
                }

                $('#videoInput').on('change', function(event) {
                    var videoInput = event.target;
                    var videoPreview = $('#videoPreview');

                    if (videoInput.files && videoInput.files[0]) {
                        var file = videoInput.files[0];
                        var maxSize = 10 * 1024 * 1024; // 10MB limit

                        if (file.size > maxSize) {
                            alert('File size exceeds the limit of 10MB.');
                            videoInput.value = ''; // Clear the file input
                            videoPreview.empty(); // Clear the preview
                            return;
                        }

                        var reader = new FileReader();

                        reader.onload = function(e) {
                            videoPreview.html('<video controls width="300"><source src="' + e.target
                                .result + '" type="video/mp4"></video>');
                        };

                        reader.readAsDataURL(file);
                    } else {
                        videoPreview.empty();
                    }
                });
            }

            $('form').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                if (formData.has('order_items') && Array.isArray(formData.get('order_items'))) {
                    console.log(formData.getAll('order_items'));
                    // Convert the order_items array to a JSON string
                    formData.set('order_items', JSON.stringify(formData.getAll('order_items')));
                }
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
                $('#myDivHandleSuccess').css('display', 'block');
                setTimeout(function() {
                    $('#myDivHandleSuccess').fadeOut('fast');
                }, 2000);
            }

            function messageError(res) {
                $('#myDivHandleError').text('');
                $('#myDivHandleError').text(res);
                $('#myDivHandleError').css('display', 'block');
                setTimeout(function() {
                    $('#myDivHandleError').fadeOut('fast');
                }, 2000);
            }
        });
    </script>
@endpush
