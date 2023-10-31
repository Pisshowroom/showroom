@extends('clients.buyer.master')
@section('title', 'Semua Artikel')
@section('article', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allArticle') }}">Semua Artikel</a></li>
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
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">{{ request()->get('orderBy') == 'asc' ? 'Artikel Terlama' : 'Artikel Terbaru' }}</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item {{ request()->get('orderBy') == 'desc' ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['orderBy' => 'desc']) }}">Artikel
                                                        Terbaru</a>
                                                </li>
                                                <li><a class="dropdown-item {{ request()->get('orderBy') == 'asc' ? 'active' : '' }}""
                                                        href="{{ route('buyer.allArticle', ['orderBy' => 'asc']) }}">Artikel
                                                        Terlama</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Munculkan</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                data-bs-display="static"><span>{{ request()->get('per_page') ?? 30 }}
                                                    items</span></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 30 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 30]) }}">30
                                                        items</a></li>
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 50 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 50]) }}">50
                                                        items</a></li>
                                                <li><a class="dropdown-item {{ request()->get('per_page') == 100 ? 'active' : '' }}"
                                                        href="{{ route('buyer.allArticle', ['per_page' => 100]) }}">100
                                                        items</a></li>
                                            </ul>
                                        </div>
                                    </div>
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
                                            href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}"></a>
                                        <img src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                            alt="artikel {{ $article->title ?? '' }}">
                                    </div>
                                    {{-- <a class="tag-dot font-xs" href="#">Technology</a> --}}
                                    <a class="color-gray-1100"
                                        href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}">
                                        <h4>{{ $article->title ?? ' ' }}</h4>
                                    </a>
                                    <div class="mt-20 d-flex justify-content-between"><span
                                            class="color-gray-500 font-xs mr-30">{{ $article->date ?? '' }}</span>
                                        {{-- <span
                                            class="color-gray-500 font-xs">4<span>Mins read</span></span> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center mt-40">
                            <h4>Tidak ada data Artikel saat ini</h4>
                        </div>
                    @endif
                </div>
                @if (count($articles) > 0)
                    {{-- <div class="nav-center"> --}}
                    {{ $articles->onEachSide(3)->links() }}
                    {{-- <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                        </ul>
                    </nav> --}}
                    {{-- </div> --}}
                @endif
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
@endpush
