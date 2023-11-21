@extends('clients.buyer.master')
@section('title', 'Semua Artikel')
@section('article', 'actived')
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
                                href="{{ route('buyer.allArticle') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                Artikel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-0 text-lg-start text-center">
                                    <h5 class="color-brand-3 text-uppercase">Semua Artikel</h5>
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-0 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        {{ count($articles) > 0 ? count($articles) : 0 }} hasil</span>
                                    {{-- <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">{{ request()->get('orderBy') == 'asc' ? 'Artikel Terlama' : 'Artikel Terbaru' }}</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item {{ request()->get('orderBy') == 'desc' ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['orderBy' => 'desc']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Artikel
                                                        Terbaru</a>
                                                </li>
                                                <li><a class="dropdown-item {{ request()->get('orderBy') == 'asc' ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['orderBy' => 'asc']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Artikel
                                                        Terlama</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Munculkan</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                data-bs-display="static"><span>{{ request()->get('per_page') ?? 30 }}
                                                    items</span></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 30 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 30]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">30
                                                        items</a></li>
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 50 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 50]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">50
                                                        items</a></li>
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 100 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 100]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">100
                                                        items</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    @if (count($articles) > 0)
                        @foreach ($articles as $article)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a
                                            href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"></a>
                                        <img src="{{ $article?->image ? $article->image : asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                            alt="artikel {{ $article->title ?? '' }}">
                                    </div>
                                    <a class="color-gray-1100"
                                        href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                        <h6 class="line-2 text-start">{{ $article->title ?? ' ' }}</h6>
                                    </a>
                                    <div class="d-flex justify-content-between"><span
                                            class="color-gray-500 font-xs mr-30">{{ $article->date ?? '' }}</span>
                                        <span
                                            class="color-gray-500 font-xs">{{ $article->view && $article->view>0 ? moneyFormat($article->view) . 'x dilihat' : 'belum dilihat' }}</span>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center mt-40">
                            <h4>Tidak ada Artikel saat ini</h4>
                        </div>
                    @endif
                </div>
                @if (count($articles) > 0)
                    {{ $articles->onEachSide(3)->appends(request()->except('page'))->links() }}
                @endif
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            $('.card-grid-style-1').each(function() {
                var text = $(this).find('h6.line-2').text();
                console.log('text');
                console.log(text);

                // Menghapus spasi ekstra dan memeriksa jumlah baris
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('h6.line-2').css('height', '40px');
                }
            });

        });
    </script>
@endpush
