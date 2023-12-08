@extends('clients.master-dashboard')
@section('title', 'Ubah Alamat')
@section('settings', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title">Ubah Alamat</h2>
            </div>
            <div> <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal" data-bs-target="#deleteAddress">
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
                            <form id="updateAddresses" method="POST">
                                @csrf
                                <input type="hidden" class="id" value="{{ $data->id }}" name="id">

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
                                                        <select id="ro_city_id" class="form-select ro_city_id" required
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
                                                        <select id="ro_city_id" class="form-select ro_city_id" required
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
                                                        <select id="ro_subdistrict_id" class="form-select ro_subdistrict_id" required
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
                                                        <select id="ro_subdistrict_id" class="form-select ro_subdistrict_id" required
                                                            name="ro_subdistrict_id">
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="form-group mb-3">
                                                <label for="address_address">Alamat</label>
                                                <input type="text" id="address-input" name="address_address"
                                                    {{ $data->lat && $data->long ? '' : 'required' }}
                                                    class="form-control map-input">
                                                <input type="hidden" name="lat" id="address-latitude"
                                                    value="{{ $data->lat }}" value="0" />
                                                <input type="hidden" name="long" id="address-longitude"
                                                    value="{{ $data->long }}" value="0" />
                                            </div>
                                            <div class="mb-3" id="address-map-container"
                                                style="width:100%;height:400px; ">
                                                <div style="width: 100%; height: 100%" id="address-map"></div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="address_description">Deskripsi
                                                        Alamat</label>
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
                                                            name="main" {{ $data->main == true ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <button class="btn btn-primary" type="submit" id="btn-address">Simpan Alamat</button>
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
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="deleteAddressLabel">Hapus Alamat</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin menghapus alamat ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-danger" style="background-color:#dc3545 !important;"
                            href="{{ route('dashboard.deleteAddress', ['id' => $data->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Hapus
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
        async defer></script>
    <script>
        function initialize() {
            $('#updateAddresses').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });

            const locationInputs = document.getElementsByClassName("map-input");

            const autocompletes = [];
            const geocoder = new google.maps.Geocoder;
            for (let i = 0; i < locationInputs.length; i++) {

                const input = locationInputs[i];
                const fieldKey = input.id.replace("-input", "");
                const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(
                    fieldKey +
                    "-longitude").value != '';
                let latitude;
                let longitude;
                if ("{{ $data->lat }}") {
                    latitude = parseFloat("{{ $data->lat }}") || -6.2297209;
                } else {
                    latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -6.2297209;
                }
                if ("{{ $data->long }}") {
                    longitude = parseFloat("{{ $data->long }}") || 106.664705;
                } else {
                    longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 106.664705;
                }

                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {
                        lat: latitude || -6.2297209,
                        lng: longitude || 106.664705
                    },
                    zoom: 13
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: {
                        lat: latitude,
                        lng: longitude
                    },
                });

                marker.setVisible(isEdit);

                const autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.key = fieldKey;
                autocompletes.push({
                    input: input,
                    map: map,
                    marker: marker,
                    autocomplete: autocomplete
                });
            }

            for (let i = 0; i < autocompletes.length; i++) {
                const input = autocompletes[i].input;
                const autocomplete = autocompletes[i].autocomplete;
                const map = autocompletes[i].map;
                const marker = autocompletes[i].marker;

                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    marker.setVisible(false);
                    const place = autocomplete.getPlace();

                    geocoder.geocode({
                        'placeId': place.place_id
                    }, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const lat = results[0].geometry.location.lat();
                            const lng = results[0].geometry.location.lng();
                            setLocationCoordinates(autocomplete.key, lat, lng);
                        }
                    });

                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        input.value = "";
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                });
            }
        }

        function setLocationCoordinates(key, lat, lng) {
            const latitudeField = document.getElementById(key + "-" + "latitude");
            const longitudeField = document.getElementById(key + "-" + "longitude");
            latitudeField.value = lat;
            longitudeField.value = lng;
        }
    </script>
    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);
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
            var $person_name = $('#person_name');
            var $phone_number = $('#phone_number');
            var $place_name = $('#place_name');
            var $submitButton = $('#btn-address');

            // $submitButton.prop('disabled', true);
            $person_name.add($phone_number).on('input', function() {
                var phone_number = $phone_number.val()?.trim();
                var person_name = $person_name.val()?.trim();
                var place_name = $place_name.val()?.trim();
                if (phone_number !== '' && person_name !== '' && place_name !== '') {
                    $submitButton.prop('disabled', false);
                } else {
                    $submitButton.prop('disabled', true);
                }
            });

        });
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
                url: "{{ route('getCity') }}" + '/' + id +
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
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
                url: "{{ route('getDistrict') }}" + '/' + id +
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
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


        $('#updateAddresses').on('submit', function(e) {
            e.preventDefault();
            var person_name = $('#person_name').val();
            var phone_number = $('#phone_number').val();
            var place_name = $('#place_name').val();
            var birth_date = $('#birthdate').val();
            var ro_province_id = $('#ro_province_id').find('option:selected').val();
            var ro_subdistrict_id = $('#ro_subdistrict_id').find('option:selected').val();
            var ro_city_id = $('#ro_city_id').find('option:selected').val();
            var lat = $('#address-latitude').val();
            var long = $('#address-longitude').val();
            var id = $('.id').val();
            var address_description = $('#address_description').val();
            var main = $('#main').prop('checked');

            var dataToSend = {
                phone_number: phone_number,
                id: id,
                place_name: place_name,
                person_name: person_name,
                ro_subdistrict_id: ro_subdistrict_id,
                ro_city_id: ro_city_id,
                ro_province_id: ro_province_id,
                person_name: person_name,
            };
            if (main !== null && main !== '') {
                dataToSend.main = main;
            }

            if (lat !== null && lat !== '') {
                dataToSend.lat = lat;
            }
            if (long !== null && long !== '') {
                dataToSend.long = long;
            }
            if (address_description !== null && address_description !== '') {
                dataToSend.address_description = address_description;
            }
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
                url: "{{ route('dashboard.updateAddress') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
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
