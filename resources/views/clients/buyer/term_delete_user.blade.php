@extends('clients.buyer.master')
@section('title', 'Ketentuan Hapus Akun')
@section('more', 'actived')
@section('term', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.termDeleteUser') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Ketentuan
                                Hapus Akun</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto page-content">
                        <h2 class="text-center mb-20">Ketentuan Hapus Akun</h2><img class="mb-30"
                            src="{{ asset('ecom/imgs/page/blog/blog-2.jpg') }}" alt="Ecom">
                        <p>Terima kasih telah mendukung Pishop. berikut ini adalah beberapa ketentuan umum terkait
                            penghapusan akun: .</p>
                        <h5>1. Proses Penghapusan Akun
                        </h5>
                        <p>Proses ini mungkin melibatkan masuk ke akun, mengakses pengaturan akun, dan memilih opsi untuk
                            menghapus atau menonaktifkan akun.</p>
                        <h5>2. Konfirmasi Identitas.</h5>
                        <p>langkah-langkah verifikasi identitas untuk memastikan bahwa orang yang mengakses akun benar-benar
                            pemiliknya. Ini bisa melibatkan konfirmasi melalui email, nomor telepon, atau langkah-langkah
                            keamanan tambahan.
                        </p>
                        <h5>3. Data Pribadi.</h5>
                        <p>Ketentuan umum mencakup informasi tentang bagaimana data pribadi pengguna akan dikelola setelah
                            akun dihapus. Beberapa website mungkin menyimpan data untuk jangka waktu tertentu untuk tujuan
                            audit atau kepatuhan hukum.</p>
                        <h5>4. Pesanan dan Transaksi yang Belum Selesai.</h5>
                        <p>Pengguna diminta untuk menyelesaikan atau membatalkan pesanan tertentu sebelum menghapus akun.
                            .</p>
                        <h5>5. Hak dan Tanggung Jawab Pengguna.</h5>
                        <p>Ketentuan biasanya mencakup hak dan tanggung jawab pengguna sehubungan dengan penghapusan akun,
                            termasuk larangan terhadap tindakan penyalahgunaan atau pelanggaran kebijakan.
                        </p>
                        <h5>6. Waktu Proses</h5>
                        <p>Kami mungkin memiliki waktu pemrosesan untuk menghapus akun setelah permintaan
                            diajukan. Pengguna mungkin diminta untuk bersabar selama periode ini.</p>
                        <h5>6. Pemberitahuan Perubahan Kebijakan</h5>
                        <p>Jika ada perubahan dalam kebijakan penghapusan akun, penyedia layanan biasanya memberikan
                            pemberitahuan kepada pengguna dan meminta persetujuan mereka terhadap perubahan tersebut.</p>
                        <h5>Terima kasih.</h5>
                        @auth
                            <div> <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteAccount">
                                    Hapus Akun
                                </button>
                            </div>
                        @endauth
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

        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
@endpush
