@extends('clients.buyer.master')
@section('title', 'Masuk sebagai Pembeli')
@section('login', 'actived')

@section('childs')
    <main class="main">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <h3>Masuk</h3>
                        <p class="font-md color-gray-500">Selamat Datang!</p>
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
                        <div style="display:none" class="alert alert-info" id="myDiv4"></div>
                        <form class="form-register mt-30 mb-30" id="submit" method="post">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input class="form-control" type="text" id="email" placeholder="stevenjob@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input class="form-control" type="password" id="password" placeholder="******************" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="color-gray-500 font-xs">
                                            <input class="checkagree" type="checkbox">Ingat aku
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="font-md-bold btn btn-buy" type="submit" id="loginEmail">Masuk</button>
                            </div>
                        </form>

                        <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Belum punya akun?</span><a
                                class="font-xs color-brand-3 font-medium" href="{{ route('buyer.register') }}"> Daftar</a>
                        </div>
                        <div class="box-login-social pt-65">
                            <h5 class="text-center">Gunakan Akun Sosmed</h5>
                            <div class="box-button-login mt-25">
                                <button class="btn btn-login font-md-bold color-brand-3 mb-15" id="googleLogin">Masuk
                                    Menggunakan<img src="{{ asset('ecom/imgs/page/account/google.svg') }}"
                                        alt="masuk menggunakan akun google"></button>
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
    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);
    </script>
    <script>
        $(document).ready(function() {
            var $email = $('#email');
            var $password = $('#password');
            var $submitButton = $('#loginEmail');
            $submitButton.prop('disabled', true);
            $email.add($password).on('input', function() {
                var email = $email.val().trim();
                var password = $password.val().trim();
                if (email !== '' && password !== '') {
                    $submitButton.prop('disabled', false);
                } else {
                    $submitButton.prop('disabled', true);
                }
            });
        });

        $("#googleLogin").click(function() {
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
                    // console.log(URL);
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
                        url: "{{ route('loginUsingGoogle') }}",
                        type: "POST",
                        // dataType: "json",
                        data: obj,
                        success: function(data) {
                            if (data.status == "success") {

                                // window.location.href = URL + "/dashboard"
                                var div = document.getElementById('myDiv3');
                                $('#myDiv3').css('display', 'block');
                                div.innerHTML = '';
                                div.innerHTML += data.message;
                                setTimeout(function() {
                                    $('#myDiv3').fadeOut('fast');
                                }, 2000);
                                window.location.replace(
                                    "{{ route('dashboard.dashboard') }}");

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

        $('#submit').on('submit', function(e) {
            e.preventDefault();
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
                url: "{{ route('loginEmail') }}",
                data: {
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
                        window.location.replace("{{ route('dashboard.dashboard') }}");

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
