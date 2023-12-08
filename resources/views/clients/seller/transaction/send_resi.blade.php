@extends('clients.master-dashboard')
@section('title', 'Input Nomor Resi')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row" id="updateResi">
            @csrf
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Input Nomor Resi</h2>
                    <div>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up" id="btn-sendResi">Simpan</button>
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
                            <input type="hidden" name="id" class="id" value="{{ $order->id }}">
                            <div class="mb-4">
                                <label class="form-label" for="delivery_receipt_number">Nomor Resi*</label>
                                <input class="form-control" id="delivery_receipt_number" name="delivery_receipt_number"
                                    type="text" required placeholder="Masukkan nomor resi">
                            </div>
                            <div class="mb-4">
                                <div class="mb-3">
                                    <label for="delivery_service" class="form-label">Pilih Paket Perjalanan*</label>
                                    <select id="delivery_service" class="form-select delivery_service"
                                        name="delivery_service" required>
                                        <option style="color:#232323;background:#f5f5f5 !important" disabled>
                                            Pilih
                                        </option>
                                        <option value="jne" selected>JNE</option>
                                        <option value="jnt">JNT</option>
                                        <option value="sicepat">Sicepat</option>
                                        <option value="anteraja">Anteraja</option>
                                    </select>
                                </div>
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
            $("#pills-add-address-tabs").on("click", function() {
                $("#pills-add-address-tab").tab("show");
            });
            $('#image').change(function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(event) {
                    $('#previewImage').attr('src', event.target.result);
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            });
            var $delivery_receipt_number = $('#delivery_receipt_number');
            var $delivery_service = $('#delivery_service');
            var $submitButton = $('#btn-sendResi');

            // $submitButton.prop('disabled', true);
            $delivery_service.add($delivery_receipt_number).on('input', function() {
                var delivery_receipt_number = $delivery_receipt_number.val()?.trim();
                var delivery_service = $delivery_service.val()?.trim();
                if (delivery_receipt_number !== '' && delivery_service !== '') {
                    $submitButton.prop('disabled', false);
                } else {
                    $submitButton.prop('disabled', true);
                }
            });

        });
        $('#updateResi').on('submit', function(e) {
            e.preventDefault();
            var delivery_service = $('#delivery_service').val();
            var delivery_receipt_number = $('#delivery_receipt_number').val();
            var id = $('.id').val();
            var dataToSend = {
                id: id,
                delivery_receipt_number: delivery_receipt_number,
                delivery_service: delivery_service,
            };
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $('.loading').removeClass('d-none').addClass('show-modal');
            $.ajax({
                type: "POST",
                url: "{{ route('dashboardSeller.sellerSendOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                data: dataToSend,
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
