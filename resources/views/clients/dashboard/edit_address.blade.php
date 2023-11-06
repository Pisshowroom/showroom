@extends('clients.master-dashboard')
@section('title', 'Ubah Alamat')
@section('settings', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title">Ubah Alamat</h2>
            </div>
            <div> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAddress">
                    Hapus Alamat
                </button>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-warning" id="mydiv">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" id="mydiv">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row gx-5">
                    <div class="col-12">
                        <section class="content-body p-xl-4">
                            <form method="POST" action="{{ route('dashboard.updateAddress') }}">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="id">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row gx-3">
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="person_name">Nama Penerima</label>
                                                <input class="form-control" id="person_name" name="person_name"
                                                    value="{{ $data->person_name }}" type="text"
                                                    placeholder="Masukkan nama" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="phone_number">Nomor
                                                    Handphone</label>
                                                <input type="tel" name="phone_number" class="w-100" required
                                                    value="{{ $data->phone_number }}" pattern="[0-9]*" inputmode="numeric"
                                                    id="phone_number"
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="place_name">Tempat</label>
                                                <input class="form-control" id="place_name" name="place_name" type="text"
                                                    value="{{ $data->place_name }}" placeholder="Rumah/Kantor" required>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="ro_province_id" class="form-label w-100">Provinsi:</label>
                                                    <select id="ro_province_id" class="form-select ro_province_id"
                                                        name="ro_province_id" required>
                                                        <option style="color:#232323;background:#f5f5f5 !important" selected
                                                            disabled></option>
                                                        @foreach ($data['provinces'] as $province)
                                                            <option value="{{ $province['id'] }}"
                                                                {{ $province['id'] == $data->ro_province_id ? 'selected' : '' }}>
                                                                {{ $province['province_name'] }}
                                                            </option>
                                                        @endforeach
                                                        <div class="ro_province_id invalid-feedback" style="display: none">
                                                            Harap isi Provinsi kamu.
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            @if (strlen($data->ro_province_id) > 0)
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="ro_city_id" class="form-label w-100">Kota /
                                                            Kabupaten:</label>
                                                        <select id="ro_city_id" class="form-select ro_city_id"
                                                            name="ro_city_id">
                                                            <option style="color:#232323;background:#f5f5f5 !important"
                                                                selected disabled>Pilih
                                                                Kota /
                                                                Kabupaten</option>
                                                            @foreach ($data['cities'] as $cities)
                                                                <option value="{{ $cities['id'] }}"
                                                                    {{ $cities['id'] == $data->ro_city_id ? 'selected' : '' }}>
                                                                    {{ $cities['city_name'] . ', Kode Pos ' . $cities['postal_code'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-12 div_ro_city_id dnone">
                                                    <div class="mb-3">
                                                        <label for="ro_city_id" class="form-label w-100">Kota /
                                                            Kabupaten:</label>
                                                        <select id="ro_city_id" class="form-select ro_city_id"
                                                            name="ro_city_id">
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($data->ro_province_id != null && $data->ro_city_id != null)
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="ro_subdistrict_id"
                                                            class="form-label w-100">Kecamatan:</label>
                                                        <select id="ro_subdistrict_id" class="form-select ro_subdistrict_id"
                                                            name="ro_subdistrict_id">
                                                            <option style="color:#232323;background:#f5f5f5 !important"
                                                                selected disabled>Pilih
                                                                Kecamatan</option>
                                                            @foreach ($data['districts'] as $district)
                                                                <option value="{{ $district['id'] }}"
                                                                    {{ $district['id'] == $data->ro_subdistrict_id ? 'selected' : '' }}>
                                                                    {{ $district['subdistrict_name'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-12 div_ro_subdistrict_id dnone">
                                                    <div class="mb-3">
                                                        <label for="ro_subdistrict_id"
                                                            class="form-label w-100">Kecamatan:</label>
                                                        <select id="ro_subdistrict_id" class="form-select ro_subdistrict_id"
                                                            name="ro_subdistrict_id">
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="address_description">Alamat</label>
                                                    <textarea class="form-control" id="address_description" name="address_description"
                                                        placeholder="no bangunan atau keterangan lain" rows="4">{{ $data->address_description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <div class="form-check form-switch ps-5">
                                                        <label class="form-check-label" for="main">Atur
                                                            sebagai Alamat Utama</label>
                                                        <input class="form-check-input" type="checkbox" id="main"
                                                            checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <button class="btn btn-primary" type="submit">Simpan Alamat</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteAddress" tabindex="-1" aria-labelledby="deleteAddressLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark" id="deleteAddressLabel">Hapus Alamat</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin menghapus alamat ini ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 10px !important">Tutup</button>
                        <a class="btn btn-danger"
                            href="{{ route('dashboard.deleteAddress', ['id' => $data->id]) }}">Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('importcss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.5/js/intlTelInput.min.js"></script>

    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);

        var input = document.querySelector("#phone_number");
        window.intlTelInput(input, {
            initialCountry: "ID",
            separateDialCode: true
        });


        //province
        $("#ro_province_id").select2({
            placeholder: "Pilih Provinsi Kamu",
            allowClear: true
        });

        $('.ro_province_id').change(function() {
            $('.div_ro_city_id').css('display', 'block');
            var id = this.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getCity') }}" + '/' + id,
                dataType: "json",
                success: function(data) {
                    var html = '';
                    html +=
                        `<option style="color:#232323;background:#f5f5f5 !important" selected disabled>Pilih Kota / Kabupaten kamu</option>`;
                    data.forEach((element, i) => {

                        html += `<option value="${element['id']}">${element['city_name']}, Kode Pos ${element['postal_code']}
                                </option>`;
                    })
                    $(`.ro_city_id`).html(html);
                }
            });
        });

        //city
        $("#ro_city_id").select2({
            placeholder: "Pilih Kota / Kabupaten Kamu",
            allowClear: true
        });

        $('.ro_city_id').change(function() {
            $('.div_ro_subdistrict_id').css('display', 'block');
            var id = this.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getDistrict') }}" + '/' + id,
                dataType: "json",
                success: function(data) {
                    var html = '';
                    html +=
                        `<option style="color:#232323;background:#f5f5f5 !important" selected disabled>Pilih Kecamatan kamu</option>`;
                    data.forEach((element, i) => {

                        html += `<option value="${element['id']}">${element['subdistrict_name']}
                                </option>`;
                    })
                    $(`.ro_subdistrict_id`).html(html);
                }
            });
        });

        // district
        $("#ro_subdistrict_id").select2({
            placeholder: "Pilih Kecamatan Kamu",
            allowClear: true
        });
    </script>
@endpush
