@extends('clients.master-dashboard')
@section('title', 'Cairkan Uang')
@section('withdraw', 'active')
@section('dashboard')
<section class="content-main">
    <div class="row">
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title">Cairkan Uang</h2>
                <div>
                    <button class="btn btn-md rounded font-sm hover-up">Ajukan</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Form Pencairan</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label" for="product_name">Bank</label>
                            <input class="form-control" id="product_name" type="text" placeholder="Type here">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="product_name">Nominal</label>
                            <input class="form-control" id="product_name" type="text" placeholder="Type here">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('importjs')
@endpush
