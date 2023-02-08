@extends('layouts.app')

@section('title', 'Buat Data')

<div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="index.html"><img class="brand-logo" alt="CryptoDash admin logo" src="assets/app-assets/images/ico/logo pasti.jpg" /></a>
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
            <li class=" nav-item active"><a href="/team"><i class="icon-users"></i><span class="menu-title" data-i18n="">Data DPH 26</span></a>
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
                                    <form class="form-horizontal form-user-profile row mt-2" action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-8">
                                            <fieldset class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" class="form-control" id="name" name="name" required="" autofocus="">
                                            </fieldset>
                                        </div>
                                        @error('name')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <label for="division">Bidang</label><br>
                                                <select name="division" class="form-control">
                                                    <option value="" selected disabled>--- Pilih ---</option>
                                                    <option value="DPH 6">DPH 6</option>
                                                    <option value="Bidang 1">Bidang 1</option>
                                                    <option value="Bidang 2">Bidang 2</option>
                                                    <option value="Bidang 3">Bidang 3</option>
                                                    <option value="Bidang 4">Bidang 4</option>
                                                    <option value="Bidang 5">Bidang 5</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        @error('division')
                                        <small style="color: red;">{{ $message }}</small>
                                        @enderror

                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <label for="position">Jabatan</label><br>
                                                <select name="position" id="positon" class="form-control">
                                                    <option value="" selected disabled>--- Pilih ---</option>
                                                    <optgroup label="DPH 6">
                                                        <option value="Ketua Umum">Ketua Umum</option>
                                                        <option value="Wakil Ketua Umum">Wakil Ketua Umum</option>
                                                        <option value="Sekretaris Umum">Sekretaris Umum</option>
                                                        <option value="Bendahara Umum">Bendahara Umum</option>
                                                        <option value="Sekretaris 1">Sekretaris 1</option>
                                                        <option value="Bendahara 1">Bendahara 1</option>
                                                    </optgroup>
                                                    <optgroup label="BIDANG 1">
                                                        <option value="Ketua Bidang 1">Ketua Bidang 1</option>
                                                        <option value="Sekretaris Bidang 1">Sekretaris Bidang 1</option>
                                                        <option value="Ketua Subbidang Kerohanian">Ketua Subbidang Kerohanian</option>
                                                        <option value="Ketua Subbidang Rumah Tangga">Ketua Subbidang Rumah Tangga</option>
                                                    </optgroup>
                                                    <optgroup label="BIDANG 2">
                                                        <option value="Ketua Bidang 2">Ketua Bidang 2</option>
                                                        <option value="Sekretaris Bidang 2">Sekretaris Bidang 2</option>
                                                        <option value="Ketua Subbidang Peredaran Gelap">Ketua Subbidang Peredaran Gelap</option>
                                                        <option value="Ketua Subbidang Pencegahan">Ketua Subbidang Pencegahan</option>
                                                    </optgroup>
                                                    <optgroup label="BIDANG 3">
                                                        <option value="Ketua Bidang 3">Ketua Bidang 3</option>
                                                        <option value="Sekretaris Bidang 3">Sekretaris Bidang 3</option>
                                                        <option value="Ketua Subbidang Internal">Ketua Subbidang Internal</option>
                                                        <option value="Ketua Subbidang Eksternal">Ketua Subbidang Eksternal</option>
                                                    </optgroup>
                                                    <optgroup label="BIDANG 4">
                                                        <option value="Ketua Bidang 4">Ketua Bidang 4</option>
                                                        <option value="Sekretaris Bidang 4">Sekretaris Bidang 4</option>
                                                        <option value="Ketua Subbidang Terapi">Ketua Subbidang Terapi</option>
                                                        <option value="Ketua Subbidang Rehabilitasi">Ketua Subbidang Rehabilitasi</option>
                                                    </optgroup>
                                                    <optgroup label="BIDANG 5">
                                                        <option value="Ketua Bidang 5">Ketua Bidang 5</option>
                                                        <option value="Sekretaris Bidang 5">Sekretaris Bidang 5</option>
                                                        <option value="Ketua Subbidang Penelitian">Ketua Subbidang Penelitian</option>
                                                        <option value="Ketua Subbidang Pengembangan">Ketua Subbidang Pengembangan</option>
                                                    </optgroup>
                                                </select>
                                            </fieldset>
                                        </div>
                                        @error('position')
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
                                            <a class="btn-gradient-secondary my-1" href="/team">Batal</a>
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