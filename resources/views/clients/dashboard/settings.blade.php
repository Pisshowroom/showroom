@extends('clients.master-dashboard')
@section('title', 'Pengaturan')
@section('settings', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title">Profil</h2>
            </div>
            <div> <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal" data-bs-target="#deleteAccount">
                    Hapus Akun
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
                    <aside class="col-lg-3 border-end">
                        <ul class="nav nav-pills flex-lg-column mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ !request()->get('param') || request()->get('param') != 'alamat' ? 'active' : '' }}"
                                    href="#" id="pills-general-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-general" type="button" role="tab"
                                    aria-controls="pills-general"
                                    aria-selected="{{ !request()->get('param') || request()->get('param') != 'alamat' ? 'true' : 'false' }}">Umum</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ request()->get('param') == 'alamat' ? 'active' : '' }}" href="#"
                                    id="pills-address-tab" data-bs-toggle="pill" data-bs-target="#pills-address"
                                    type="button" role="tab" aria-controls="pills-address"
                                    aria-selected="{{ request()->get('param') == 'alamat' ? 'true' : 'false' }}">Alamat</a>
                            </li>
                            <li class="nav-item d-none" role="presentation">
                                <a class="nav-link" href="#" id="pills-add-address-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-add-address" type="button" role="tab"
                                    aria-controls="pills-add-address" aria-selected="false">Tambah Alamat</a>
                            </li>
                        </ul>
                    </aside>
                    <div class="col-lg-9">
                        <section class="content-body p-xl-4">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade {{ !request()->get('param') || request()->get('param') != 'alamat' ? 'show active' : '' }}"
                                    id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                                    <form method="POST" id="updateProfile">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row gx-3">
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="name">Nama</label>
                                                        <input class="form-control" id="name" name="name"
                                                            type="text" placeholder="Masukkan nama"
                                                            value="{{ Auth::guard('web')->user()->name }}" required>
                                                    </div>
                                                    <!-- col .//-->
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input class="form-control" type="email" id="email"
                                                            placeholder="andi@mail.com" name="email"
                                                            value="{{ Auth::guard('web')->user()->email }}" required>
                                                    </div>
                                                    <!-- col .//-->
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input class="form-control" type="password" id="password"
                                                            placeholder="*****">
                                                    </div>
                                                    <!-- col .//-->
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="birthdate">Tanggal Lahir</label>
                                                        <input class="form-control" type="date" name="birth_date"
                                                            id="birthdate"
                                                            value="{{ Auth::guard('web')->user()->birth_date }}">
                                                    </div>
                                                </div>
                                                <aside>
                                                    <label for="image" class="form-label">Gambar</label>
                                                    <figure>
                                                        <img class="img-lg mb-3 img-avatar" id="previewImage"
                                                            src="{{ Auth::guard('web')->user() && Auth::guard('web')->user()->image ? asset(Auth::guard('web')->user()->image) ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                                            alt="User">
                                                        <figcaption>
                                                            <input class="form-control" type="file" id="image"
                                                                name="image" accept="image/*">

                                                        </figcaption>
                                                    </figure>
                                                </aside>
                                            </div>
                                        </div><br>
                                        <button class="btn btn-primary" type="submit" id="btn-updateProfile">Simpan
                                            Profil</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade {{ request()->get('param') == 'alamat' ? 'show active' : '' }}"
                                    id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab">
                                    <div class="new-member-list">
                                        @if ($data['addresses'] && count($data['addresses']) > 0)
                                            <div class="mb-4" style="text-align: -webkit-right;">
                                                <button class="nav-link btn btn-primary" id="pills-add-address-tabs"
                                                    style="width:fit-content;" type="button">Tambah
                                                    Alamat</button>
                                            </div>
                                            @foreach ($data['addresses'] as $address)
                                                @if ($address->id)
                                                    <div
                                                        class="d-flex align-items-center w-100 gap-2 justify-content-between">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center gap-2">
                                                                @if ($address->main)
                                                                    <i class="icon material-icons md-home"
                                                                        style="color: #E9A92E"></i>
                                                                @else
                                                                    <i class="icon material-icons md-home"></i>
                                                                @endif
                                                                <h4>{{ $address->person_name ?? '' }}
                                                                </h4>
                                                                @if ($address->main)
                                                                    <button class="btn btn-xs"
                                                                        style="background-color: #E9A92E !important;border-radius:5px !important">Utama</button>
                                                                @endif

                                                            </div>
                                                            <p class="text-muted font-xs line-2 text-start">
                                                                {!! $address->address_description !!}
                                                            </p>
                                                        </div>
                                                        <a class="btn btn-xs"
                                                            href="{{ route('dashboard.changeAddress', ['id' => $address->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Ubah</a>
                                                    </div>
                                                    <hr>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 text-center mt-40">
                                                <h4>Kamu belum menyimpan alamat. Yuk, simpan alamat dulu biar ga ribet pas
                                                    belanja</h4>
                                                <div class="w-100 mt-20" style="text-align:-webkit-center">
                                                    <button class="nav-link btn btn-primary" id="pills-add-address-tabs"
                                                        type="button">Tambah
                                                        Alamat</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-add-address" role="tabpanel"
                                    aria-labelledby="pills-add-address-tab">
                                    <form method="POST" id="updateAddresses">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row gx-3">
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="person_name">Nama Penerima</label>
                                                        <input class="form-control" id="person_name" name="person_name"
                                                            type="text" placeholder="Masukkan nama" required>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="phone_number">Nomor
                                                            Handphone</label>
                                                        <input type="tel" name="phone_number" class="w-100" required
                                                            pattern="[0-9]*" inputmode="numeric" id="phone_number"
                                                            onkeypress="return event.charCode>=48&&event.charCode<=57">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="place_name">Tempat</label>
                                                        <input class="form-control" id="place_name" name="place_name"
                                                            type="text" placeholder="Rumah/Kantor" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="ro_province_id"
                                                                class="form-label w-100">Provinsi:</label>
                                                            <select id="ro_province_id" class="form-select ro_province_id"
                                                                name="ro_province_id" required>
                                                                <option style="color:#232323;background:#f5f5f5 !important"
                                                                    selected disabled></option>
                                                                @foreach ($data['provinces'] as $province)
                                                                    <option value="{{ $province['id'] }}">
                                                                        {{ $province['province_name'] }}
                                                                    </option>
                                                                @endforeach
                                                                <div class="ro_province_id invalid-feedback"
                                                                    style="display: none">
                                                                    Harap isi Provinsi kamu.
                                                                </div>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 div_ro_city_id dnone">
                                                        <div class="mb-3">
                                                            <label for="ro_city_id" class="form-label w-100">Kota /
                                                                Kabupaten:</label>
                                                            <select id="ro_city_id" class="form-select ro_city_id"
                                                                required name="ro_city_id">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 div_ro_subdistrict_id dnone">
                                                        <div class="mb-3">
                                                            <label for="ro_subdistrict_id"
                                                                class="form-label w-100">Kecamatan:</label>
                                                            <select id="ro_subdistrict_id"
                                                                class="form-select ro_subdistrict_id" required
                                                                name="ro_subdistrict_id">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="address_address">Alamat</label>
                                                        <input type="text" id="address-input" name="address_address"
                                                            id="address_address" required class="form-control map-input">
                                                        <input type="hidden" name="lat" id="address-latitude"
                                                            value="0" />
                                                        <input type="hidden" name="long" id="address-longitude"
                                                            value="0" />
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
                                                                placeholder="no bangunan atau keterangan lain" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <div class="form-check form-switch ps-5">
                                                                <label class="form-check-label" for="main">Atur
                                                                    sebagai Alamat Utama</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="main" id="main" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        <button class="btn btn-primary" type="submit" id="btn-address">Simpan
                                            Alamat</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteAccount" tabindex="-1" aria-labelledby="deleteAccountLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="deleteAccountLabel">Hapus Akun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin menghapus akun ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-danger" style="background-color:#dc3545 !important;"
                            href="{{ route('dashboard.deleteAccount', ['id' => Auth::guard('web')->user()->id ?? 0]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Hapus
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

                const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -6.2297209;
                const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 106.664705;

                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {
                        lat: latitude,
                        lng: longitude
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
            var $email = $('#email');
            var $name = $('#name');
            var $submitButton = $('#btn-updateProfile');

            // $submitButton.prop('disabled', true);
            $name.add($email).on('input', function() {
                var email = $email.val()?.trim();
                var name = $name.val()?.trim();
                if (email !== '' && name !== '') {
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

        $('#updateProfile').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var birth_date = $('#birthdate').val();
            var image = $('#image').val();
            var dataToSend = {
                email: email,
                name: name,
            };
            if (password !== null && password !== '') {
                dataToSend.password = password;
            }
            if (birth_date !== null && birth_date !== '') {
                dataToSend.birth_date = birth_date;
            }
            if (image !== null && image !== '') {
                dataToSend.image = image;
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
                url: "{{ route('dashboard.updateProfile') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                data: dataToSend,
                success: function(data) {
                    if (data.status == "success") {
                        messageSuccess(data.message);
                        location.reload(true);
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
