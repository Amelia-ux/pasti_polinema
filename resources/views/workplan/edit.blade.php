@extends('layouts.app')

@section('title', 'Edit Data')

<div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="index.html"><img class="brand-logo" alt="CryptoDash admin logo" src="{{ asset('assets/app-assets/images/ico/logo pasti.jpg') }}" /></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="/dashboard"><i class="icon-home"></i></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="/" target="_blank"><i class="icon-eye"></i><span class="menu-title" data-i18n="">Lihat Website</span></a>
            </li>
            <li class=" nav-item"><a href="/about"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Data Tentang UKM</span></a>
            </li>
            <li class=" nav-item"><a href="/faq"><i class="icon-question"></i><span class="menu-title" data-i18n="">Data FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="/relation"><i class="icon-cup"></i><span class="menu-title" data-i18n="">Data Relasi</span></a>
            </li>
            <li class=" nav-item"><a href="/team"><i class="icon-users"></i><span class="menu-title" data-i18n="">Data DPH 26</span></a>
            </li>
            <li class=" nav-item active"><a href="/workplan"><i class="icon-calendar"></i><span class="menu-title" data-i18n="">Program Kerja</span></a>
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
                                    <form class="form-horizontal form-user-profile row mt-2" action="{{ route('workplan.update', $workplan->id) }}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <label for="division">Bidang</label><br>
                                                <select name="division" class="form-control">
                                                    <option value="" selected disabled>--- Pilih ---</option>
                                                    <option value="{{$workplan->division}}">Bidang 1</option>
                                                    <option value="{{$workplan->division}}">Bidang 2</option>
                                                    <option value="{{$workplan->division}}">Bidang 3</option>
                                                    <option value="{{$workplan->division}}">Bidang 4</option>
                                                    <option value="{{$workplan->division}}">Bidang 5</option>
                                                </select>
                                            </fieldset>
                                        </div>

                                        <div class="col-8">
                                            <fieldset class="form-group">
                                                <label for="title">Nama Program Kerja</label>
                                                <input type="text" class="form-control" name="title" autofocus="" value="{{$workplan->name}}">
                                            </fieldset>
                                        </div>
                                        @error('name')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="description">Isi</label>
                                                <textarea class="form-control" rows="10" cols="20" id="description" name="description" autofocus="">{{$workplan->description}}</textarea>
                                            </fieldset>
                                        </div>
                                        @error('description')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <img src="/image/{{$workplan->image}}" alt="" class="img-fluid" width="300">
                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <label for="">Foto</label>
                                                <input type="file" class="form-control" name="image">
                                            </fieldset>
                                        </div>
                                        @error('image')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn-gradient-primary my-1">Simpan</button>
                                            <a class="btn-gradient-secondary my-1" href="/workplan">Batal</a>
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