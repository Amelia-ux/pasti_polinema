@extends('layouts.main')

@section('title', 'Struktur Organisasi')


<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center">
      <img src="{{ asset('guest/img/logo pasti.jpg') }}" alt="" />
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/tentang">Tentang</a></li>
        <li><a href="/proker">Program Kerja</a></li>
        <li><a href="/struktur" class="active">Struktur Organisasi</a></li>
        <li><a href="/kontak">Kontak</a></li>
      </ul>
    </nav>
    <!-- .navbar -->
  </div>
</header>
<!-- End Header -->
@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('guest/img/OPREC.jpg')">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Struktur Organisasi</h2>
          <p>Sebagai suatu organisasi, tentunya UKM PASTI terdiri dari beberapa bidang yang memiliki beberapa staff ahli kepengurusan yang bekerja dalam satu periode.</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Struktur Organisasi</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('content')
<!-- ======= Our Team Section ======= -->
<section id="team" class="team pt-0">
  <div class="container" data-aos="fade-up">
    <!-- ======= DPH 6 ======= -->
    <div class="section-header">
      <span>DEWAN PENGURUS HARIAN 6</span>
      <h2>DEWAN PENGURUS HARIAN 6</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      @foreach($team as $id=>$t)
      @if($id <= 5) <div class="col-6 col-md-3">
        <div class="member">
          <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>{{ $t->name }}</h4>
            <span>{{ $t->position }}</span>
          </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- End DPH 6 -->

    <!-- ======= BIDANG 1 ======= -->
    <div class="section-header">
      <span>BIDANG 1 - INTERNAL</span>
      <h2>BIDANG 1 - INTERNAL</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      @foreach($team as $id=>$t)
      @if($id >= 6 && $id<=9) <div class="col-6 col-md-3">
        <div class="member">
          <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>{{ $t->name }}</h4>
            <span>{{ $t->position }}</span>
          </div>
        </div>
    </div>
    @endif
    @endforeach
  </div>
  <!-- End BIDANG 1 -->

  <!-- ======= BIDANG 2 ======= -->
  <div class="section-header">
    <span>BIDANG 2 - PENCEGAHAN</span>
    <h2>BIDANG 2 - PENCEGAHAN</h2>
  </div>
  <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
    @foreach($team as $id=>$t)
    @if($id >= 10 && $id <= 13) <div class="col-6 col-md-3">
      <div class="member">
        <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
        <div class="member-content">
          <h4>{{ $t->name }}</h4>
          <span>{{ $t->position }}</span>
        </div>
      </div>
  </div>
  @endif
  @endforeach
  </div>
  <!-- End BIDANG 2 -->

  <!-- ======= BIDANG 3 ======= -->
  <div class="section-header">
    <span>BIDANG 3 - HUBUNGAN MASYARAKAT</span>
    <h2>BIDANG 3 - HUBUNGAN MASYARAKAT</h2>
  </div>
  <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
    @foreach($team as $id=>$t)
    @if($id >= 14 && $id<=17) <div class="col-6 col-md-3">
      <div class="member">
        <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
        <div class="member-content">
          <h4>{{ $t->name }}</h4>
          <span>{{ $t->position }}</span>
        </div>
      </div>
  </div>
  @endif
  @endforeach
  </div>
  <!-- End BIDANG 3 -->

  <!-- ======= BIDANG 4 ======= -->
  <div class="section-header">
    <span>BIDANG 4 - TERAPI & REHABILITASI</span>
    <h2>BIDANG 4 - TERAPI & REHABILITASI</h2>
  </div>
  <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
    @foreach($team as $id=>$t)
    @if($id >= 18 && $id<=21) <div class="col-6 col-md-3">
      <div class="member">
        <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
        <div class="member-content">
          <h4>{{ $t->name }}</h4>
          <span>{{ $t->position }}</span>
        </div>
      </div>
  </div>
  @endif
  @endforeach
  </div>
  <!-- End BIDANG 4 -->

  <!-- ======= BIDANG 5 ======= -->
  <div class="section-header">
    <span>BIDANG 5 - PENELITIAN & PENGEMBANGAN</span>
    <h2>BIDANG 5 - PENELITIAN & PENGEMBANGAN</h2>
  </div>
  <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
    @foreach($team as $id=>$t)
    @if($id >= 22 && $id<=25) <div class="col-6 col-md-3">
      <div class="member">
        <img src="image/{{ $t->image }}" class="img-fluid" alt="" />
        <div class="member-content">
          <h4>{{ $t->name }}</h4>
          <span>{{ $t->position }}</span>
        </div>
      </div>
  </div>
  @endif
  @endforeach
  </div>
  <!-- End BIDANG 5 -->
  </div>
</section>
<!-- End Our Team Section -->
@endsection