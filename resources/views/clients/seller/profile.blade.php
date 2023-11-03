@extends('clients.master-dashboard')
@section('title', 'Profil Toko')
@section('profile', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Profil Toko</h2>
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
                    {{-- <aside class="col-lg-3 border-end">
                        <ul class="nav nav-pills flex-lg-column mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#" id="pills-general-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-general" type="button" role="tab"
                                    aria-controls="pills-general" aria-selected="true">Umum</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#" id="pills-address-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-address" type="button" role="tab"
                                    aria-controls="pills-address" aria-selected="false">Alamat</a>
                            </li>
                        </ul>
                    </aside>
                    <div class="col-lg-9">
                        <section class="content-body p-xl-4">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-general" role="tabpanel"
                                    aria-labelledby="pills-general-tab">
                                    <form method="POST" action="{{ route('dashboard.updateProfile') }}">
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
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control" type="email"
                                                            placeholder="andi@mail.com"
                                                            value="{{ Auth::guard('web')->user()->email }}" required>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input class="form-control" type="password" id="password"
                                                            placeholder="*****">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label" for="birthdate">Tanggal Lahir</label>
                                                        <input class="form-control" type="date" id="birthdate">
                                                    </div>
                                                </div>
                                                <aside>
                                                    <label for="image" class="form-label">Gambar</label>
                                                    <figure>
                                                        <img class="img-lg mb-3 img-avatar"
                                                            src="{{ Auth::guard('web')->user() ? Auth::guard('web')->user()->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                                            alt="User">
                                                        <figcaption>
                                                            <input class="form-control" type="file" id="image"
                                                                name="image" accept="image/*">

                                                        </figcaption>
                                                    </figure>
                                                </aside>
                                            </div>
                                        </div><br>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                    aria-labelledby="pills-address-tab">...</div>
                            </div>
                        </section>
                    </div> --}}

                    <div class="col-12">
                        <section class="content-body p-xl-4">
                            <form method="POST" action="{{ route('dashboardSeller.updateProfile') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row gx-3">
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="name">Nama Toko</label>
                                                <input class="form-control" id="name" name="name" type="text"
                                                    placeholder="Masukkan nama"
                                                    value="{{ Auth::guard('web')->user()->name }}" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="seller_description">Deskripsi Toko</label>
                                                <textarea class="form-control" name="seller_description" id="seller_description" placeholder="Masukkan alamat"
                                                    rows="5" required>{{ Auth::guard('web')->user()->seller_description }}</textarea>
                                            </div>
                                            {{-- <div class="col-lg-6 mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="email" placeholder="andi@mail.com"
                                                    value="{{ Auth::guard('web')->user()->email }}" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="password">Password</label>
                                                <input class="form-control" type="password" id="password"
                                                    placeholder="*****">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="birthdate">Tanggal Lahir</label>
                                                <input class="form-control" type="date" id="birthdate">
                                            </div> --}}
                                        </div>
                                        <aside>
                                            <label for="image" class="form-label">Gambar</label>
                                            <figure>
                                                <img class="img-lg mb-3 img-avatar" id="previewImage"
                                                    src="{{ Auth::guard('web')->user() ? asset(Auth::guard('web')->user()->image) ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                                    alt="User">
                                                <figcaption>
                                                    <input class="form-control" type="file" id="image" name="image"
                                                        accept="image/*">

                                                </figcaption>
                                            </figure>
                                        </aside>
                                    </div>
                                </div><br>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
@push('importjs')
    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);
        $(document).ready(function() {
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
        });
    </script>
@endpush
