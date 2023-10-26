@extends('clients.master-dashboard')
@section('title', 'Profil Toko')
@section('profile', 'active')
@section('dashboard')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Profile setting</h2>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row gx-5">
                <aside class="col-lg-3 border-end">
                    <nav class="nav nav-pills flex-lg-column mb-4"><a class="nav-link active" aria-current="page"
                            href="#">General</a><a class="nav-link" href="#">Moderators</a><a
                            class="nav-link" href="#">Admin account</a><a class="nav-link" href="#">SEO
                            settings</a><a class="nav-link" href="#">Mail settings</a><a class="nav-link"
                            href="#">Newsletter</a></nav>
                </aside>
                <div class="col-lg-9">
                    <section class="content-body p-xl-4">
                        <form>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row gx-3">
                                        <div class="col-6 mb-3">
                                            <label class="form-label">First name</label>
                                            <input class="form-control" type="text" placeholder="Type here">
                                        </div>
                                        <!-- col .//-->
                                        <div class="col-6 mb-3">
                                            <label class="form-label">Last name</label>
                                            <input class="form-control" type="text" placeholder="Type here">
                                        </div>
                                        <!-- col .//-->
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" placeholder="example@mail.com">
                                        </div>
                                        <!-- col .//-->
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input class="form-control" type="tel" placeholder="+1234567890">
                                        </div>
                                        <!-- col .//-->
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" placeholder="Type here">
                                        </div>
                                        <!-- col .//-->
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Birthday</label>
                                            <input class="form-control" type="date">
                                        </div>
                                        <!-- col .//-->
                                        <!-- row.//-->
                                        <!-- col.//-->
                                    </div>
                                </div>
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center"><img class="img-lg mb-3 img-avatar"
                                            src="{{ asset('ecom_dashboard/imgs/people/avatar1.jpg') }}"
                                            alt="User Photo">
                                        <figcaption><a class="btn btn-light rounded font-md" href="#"><i
                                                    class="icons material-icons md-backup font-md"></i> Upload</a>
                                        </figcaption>
                                    </figure>
                                </aside>
                                <!-- col.//-->
                                <!-- row.//-->
                            </div><br>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                        <hr class="my-5">
                        <div class="row" style="max-width:920px">
                            <div class="col-md">
                                <article class="box mb-3 bg-light"><a
                                        class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                    <h6>Password</h6><small class="text-muted d-block" style="width:70%">You can reset
                                        or change your password by clicking here</small>
                                </article>
                            </div>
                            <!-- col.//-->
                            <div class="col-md">
                                <article class="box mb-3 bg-light"><a
                                        class="btn float-end btn-light rounded btn-sm font-md"
                                        href="#">Deactivate</a>
                                    <h6>Remove account</h6><small class="text-muted d-block" style="width:70%">Once you
                                        delete your account, there is no going back.</small>
                                </article>
                            </div>
                            <!-- col.//-->
                            <!-- row.//-->
                            <!-- content-body .//-->
                            <!-- col.//-->
                            <!-- row.//-->
                            <!-- card body end//-->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('importjs')
@endpush
