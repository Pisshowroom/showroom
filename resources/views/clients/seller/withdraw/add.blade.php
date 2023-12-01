@extends('clients.master-dashboard')
@section('title', 'Cairkan Uang')
@section('withdraw', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="alert alert-warning" id="myDiv" style="display:none">
        </div>
        <div class="alert alert-success" id="myDiv2" style="display:none">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Cairkan Uang</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Form Pencairan</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label" for="master_account_id">Pembayaran</label>
                            <select class="form-select" id="master_account_id" name="master_account_id" required>
                                <option disabled>Pilih pembayaran</option>
                                @foreach ($banks as $b)
                                    <option value="{{ $b->id }}" class="master-account-id-{{ $b->id }}">
                                        {{ $b->provider_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="account_bank_number">Nomor</label>
                            <input class="form-control" id="account_bank_number" type="tel" required
                                name="account_bank_number" onkeypress="return event.charCode>=48&&event.charCode<=57"
                                placeholder="Masukkan nomor">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="amount">Nominal</label>
                            <input class="form-control" id="amount" type="tel" name="amount" required
                                onkeypress="return event.charCode>=48&&event.charCode<=57"
                                placeholder="Masukkan nominal Rp 20.000">
                            <p class="textCancel fw-500 ls-3 d-none mb-2 text-danger" style="font-size: 13px;">Isi
                                harga minimal Rp 20.000</p>

                        </div>
                        <div class="mb-4 text-end">
                            <button type="submit" class="btn btn-md rounded font-sm hover-up"
                                id="btn-withdraw">Ajukan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {

            var $amount = $('#amount');
            var $accountBankNumber = $('#account_bank_number');
            var $submitButton = $('#btn-withdraw');

            $submitButton.prop('disabled', true);
            $amount.add($accountBankNumber).on('input', function() {
                var amount = $amount.val().trim();
                var accountBankNumber = $accountBankNumber.val().trim();
                if (amount !== '' && accountBankNumber !== '') {
                    $submitButton.prop('disabled', false);
                } else {
                    $submitButton.prop('disabled', true);
                }
            });
            var tanpa_rupiah = $('#amount');
            tanpa_rupiah.on('keyup', function() {
                // Apply any formatting logic here
                tanpa_rupiah.val(formatRupiah(this.value, 'Rp '));

                // Check if the entered price is less than 50,000
                if (parseFloat(this.value.replace(/[^\d]/g, '')) < 20000) {
                    $('.textCancel').addClass('d-block').removeClass('d-none');
                    $submitButton.prop('disabled', true);
                } else {
                    $('.textCancel').addClass('d-none').removeClass('d-block');
                    var accountBankNumber = $accountBankNumber.val().trim();
                    if (accountBankNumber !== '') {
                        $submitButton.prop('disabled', false);
                    } else {
                        $submitButton.prop('disabled', true);
                    }
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

            $('#btn-withdraw').on('click', function(e) {
                e.preventDefault();
                const selected = $('#master_account_id').find('option:selected');
                const obj = {
                    master_account_id: selected.val(),
                    account_bank_name: selected.text(),
                    account_bank_number: $('#account_bank_number').val(),
                    amount: $('#amount').val(),
                }
                $('.loading').removeClass('d-none').addClass('show-modal');
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });

                $.ajax({
                    url: "{{ route('dashboardSeller.storeOrUpdate') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                    type: "POST",
                    // dataType: "json",
                    data: obj,
                    success: function(data) {
                        if (data && data.status && data.status == 'danger') {
                            console.log('data');
                            $('#myDiv').text('');
                            $('#myDiv').text(data.message);
                            $('#myDiv').css('display', 'block');
                            setTimeout(function() {
                                $('#myDiv').fadeOut('fast');
                            }, 2000);
                        } else {
                            console.log(data);
                            $('#myDiv2').text('');
                            $('#myDiv2').text('Berhasil mengajukan pencairan uang');
                            $('#myDiv2').css('display', 'block');
                            setTimeout(function() {
                                $('#myDiv2').fadeOut('fast');
                                window.location.replace(
                                    "{{ route('dashboardSeller.allWithdraw') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                );
                            }, 2000);

                        }
                        $('.loading').removeClass('show-modal')
                            .addClass('d-none');

                    },
                    error: function(error) {
                        if (error && error.responseJSON && error.responseJSON.message) {
                            $('#myDiv').text('');
                            $('#myDiv').text(error.responseJSON.message);
                            $('#myDiv').css('display', 'block');
                            setTimeout(function() {
                                $('#myDiv').fadeOut('fast');
                            }, 2000);
                            $('.loading').removeClass('show-modal')
                                .addClass('d-none');

                        }

                    },
                });
            });
        })
    </script>
@endpush
