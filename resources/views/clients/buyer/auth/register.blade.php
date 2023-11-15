@extends('clients.buyer.master')
@section('title', 'Daftar sebagai Pembeli')
@section('register', 'actived')

@section('childs')

    <main class="main">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <h3>Buat sebuah akun</h3>
                        <p class="font-md color-gray-500">Akses ke semua fitur.</p>
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
                        <div style="display:none" class="alert alert-warning" id="myDiv2"></div>
                        <div style="display:none" class="alert alert-success" id="myDiv3"></div>
                        <form class="form-register mt-30 mb-30" id="submitRegister" method="post">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Nama Lengkap *</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    placeholder="Steven job" required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input class="form-control" type="email" id="email" name="email"
                                    placeholder="stevenjob@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Ulangi Password *</label>
                                <input class="form-control" type="password" id="repassword" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input class="checkagree" type="checkbox" checked disabled>Dengan mengklik tombol
                                    Daftar, Anda menyetujui
                                    syarat dan kebijakan kami,
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="font-md-bold btn btn-buy" type="submit" id="registerEmail">Daftar</button>
                            </div>
                        </form>
                        <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Sudah memiliki
                                akun?</span><a class="font-xs color-brand-3 font-medium" href="{{ route('buyer.login') }}">
                                Masuk</a></div>
                        <div class="box-login-social pt-65">
                            <h5 class="text-center">Atau daftar dengan</h5>
                            <div class="box-button-login mt-25"><button
                                    class="btn btn-login font-md-bold color-brand-3 mb-15" id="googleRegister"><img src="{{ asset('ecom/imgs/page/account/google.svg') }}"
                                        alt="daftar menggunakan akun google"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
@push('importjs')
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>
    <script src="{{ asset('ecom/js/firebase.js') }}"></script>
    <script>
        $(document).ready(function() {
            var $name = $('#name');
            var $email = $('#email');
            var $password = $('#password');
            var $repassword = $('#repassword');
            var $submitButton = $('#registerEmail');
            $submitButton.prop('disabled', true);
            $name.add($email).add($password).add($repassword).on('input', function() {
                var name = $name.val().trim();
                var email = $email.val().trim();
                var password = $password.val().trim();
                var repassword = $repassword.val().trim();
                if (email !== '' && password !== '' && name !== '' && repassword !== '') {
                    if (password == repassword) {
                        $submitButton.prop('disabled', false);
                    }
                } else {
                    $submitButton.prop('disabled', true);
                }
            });
        });

        $("#googleRegister").click(function() {
            firebase
                .auth()
                .signInWithPopup(googleProvider)
                .then(function(result) {
                    /** @type {firebase.auth.OAuthCredential} */
                    var credential = result.credential;

                    // This gives you a Google Access Token. You can use it to access the Google API.
                    var token = credential.accessToken;
                    // The signed-in user info.
                    var user = result.user;
                    // console.log(user.providerData[0]);
                    // console.log('user.providerData[0]');
                    // var URL = $('meta[name="baseURL"]').attr('content');
                    const obj = {
                        displayName: user.providerData[0].displayName,
                        email: user.providerData[0].email,
                        phoneNumber: user.providerData[0].phoneNumber,
                        photoURL: user.providerData[0].photoURL,
                        uid: user.providerData[0].uid,
                        api_token: credential.idToken
                    }
                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                    });

                    $.ajax({
                        url: "{{ route('registerUsingGoogle') }}",
                        type: "POST",
                        data: obj,
                        success: function(data) {
                            if (data.status == "success") {
                                var div = document.getElementById('myDiv3');
                                $('#myDiv3').css('display', 'block');
                                div.innerHTML = '';
                                div.innerHTML += data.message;
                                setTimeout(function() {
                                    $('#myDiv3').fadeOut('fast');
                                }, 2000);
                                window.location.replace("{{ route('dashboard.settings') }}");

                            } else {
                                var div = document.getElementById('myDiv4');
                                $('#myDiv4').css('display', 'block');
                                div.innerHTML = '';
                                div.innerHTML += data.message;
                                setTimeout(function() {
                                    $('#myDiv4').fadeOut('fast');
                                }, 2000);
                                window.location.replace("{{ route('dashboard.myOrder') }}");
                            }
                        },
                        error: function(error) {
                            var div = document.getElementById('myDiv2');
                            $('#myDiv2').css('display', 'block');
                            div.innerHTML += error.message;
                            setTimeout(function() {
                                $('#myDiv2').fadeOut('fast');
                            }, 2000);
                        },
                    });
                    // ...
                })
                .catch((error) => {
                    var div = document.getElementById('myDiv2');
                    $('#myDiv2').css('display', 'block');
                    div.innerHTML += error.message;
                    setTimeout(function() {
                        $('#myDiv2').fadeOut('fast');
                    }, 2000);
                });
        });
        $('#submitRegister').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: "{{ route('registerEmail') }}",
                data: {
                    name: name,
                    email: email,
                    password: password,
                },
                success: function(data) {
                    if (data.status == "success") {
                        var div = document.getElementById('myDiv3');
                        $('#myDiv3').css('display', 'block');
                        div.innerHTML = '';
                        div.innerHTML += data.message;
                        setTimeout(function() {
                            $('#myDiv3').fadeOut('fast');
                        }, 2000);
                        window.location.replace("{{ route('dashboard.myOrder') }}");

                    } else {
                        var div = document.getElementById('myDiv2');
                        $('#myDiv2').css('display', 'block');
                        div.innerHTML = '';
                        div.innerHTML += data.message;
                        setTimeout(function() {
                            $('#myDiv2').fadeOut('fast');
                        }, 2000);
                    }
                },
                error: function(error) {
                    var div = document.getElementById('myDiv2');
                    $('#myDiv2').css('display', 'block');
                    div.innerHTML += error.message;
                    setTimeout(function() {
                        $('#myDiv2').fadeOut('fast');
                    }, 2000);
                },
            });
        });
    </script>
@endpush
