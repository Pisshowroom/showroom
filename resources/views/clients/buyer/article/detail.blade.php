@extends('clients.buyer.master')
@section('title', 'Detail Artikel')
@section('article', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allArticle') }}">Semua Artikel</a></li>
                        <li><a class="font-xs color-gray-500" href="javascript:void(0);">Detail Artikel</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-12 display-list">
                                <h3 class="mt-15 mb-25">{{ $article->title ?? '' }}</h3>
                                <div class="box-author mb-5">
                                    <div class="img-author mr-30"><img src="{{ asset('ecom/imgs/page/blog/author.png') }}"
                                            alt="Ecom"><span class="font-md-bold">By Sugar Rosie</span></div><span
                                        class="datepost color-gray-500 font-sm mr-30">{{ $article->date ?? '' }}</span>
                                </div>
                                <div class="image-feature"><img src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                        alt="artikel {{ $article->title ?? '' }}"></div>
                                <div class="content-text">
                                    {!! $article->content ?? '' !!}
                                </div>
                                <div class="border-bottom-4 mt-20"></div>
                            </div>
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
