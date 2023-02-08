@extends('layouts.app')

@section('title', 'Buat Data')

<div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="index.html"><img class="brand-logo" alt="CryptoDash admin logo" src="assets/app-assets/images/ico/logo pasti.jpg" /></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="/dashboard"><i class="icon-home"></i></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="/" target="_blank"><i class="icon-eye"></i><span class="menu-title" data-i18n="">Lihat Website</span></a>
            </li>
            <li class=" nav-item active"><a href="/about"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Data Tentang UKM</span></a>
            </li>
            <li class=" nav-item"><a href="/faq"><i class="icon-question"></i><span class="menu-title" data-i18n="">Data FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="/relation"><i class="icon-cup"></i><span class="menu-title" data-i18n="">Data Relasi</span></a>
            </li>
            <li class=" nav-item"><a href="/team"><i class="icon-users"></i><span class="menu-title" data-i18n="">Data DPH 26</span></a>
            </li>
            <li class=" nav-item"><a href="/workplan"><i class="icon-calendar"></i><span class="menu-title" data-i18n="">Program Kerja</span></a>
            </li>
            <li class=" nav-item"><a href="/contact"><i class="icon-envelope"></i><span class="menu-title" data-i18n="">Kontak</span></a>
            </li>
        </ul>
    </div>
</div>


@section('content')
<div class="content-body">
    <div class="row">
        <div class="col-12 col-md-12">
            <!-- User Profile -->
            <section class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <form class="form-horizontal form-user-profile row mt-2" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-8">
                                            <fieldset class="form-group">
                                                <label for="title">Kategori</label>
                                                <input type="text" class="form-control" id="title" name="title" required="" autofocus="">
                                            </fieldset>
                                        </div>
                                        @error('title')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="description">Isi</label>
                                                <textarea class="form-control" rows="10" cols="20" id="description" name="description" value="" required="" autofocus=""></textarea>
                                            </fieldset>
                                        </div>
                                        @error('title')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <label for="image">Foto</label>
                                                <input type="file" class="form-control" id="image" name="image" value="" required="" autofocus="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn-gradient-primary my-1">Simpan</button>
                                            <a class="btn-gradient-secondary my-1" href="/about">Batal</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection