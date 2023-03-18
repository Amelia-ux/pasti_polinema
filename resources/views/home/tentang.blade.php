@extends('layouts.main')

@section('title', 'Tentang')


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
        <li><a href="/tentang" class="active">Tentang</a></li>
        <li><a href="/proker">Program Kerja</a></li>
        <li><a href="/struktur">Struktur Organisasi</a></li>
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
          <h2>Tentang</h2>
          <p>Sejarah dan Visi Misi UKM PASTI POLINEMA</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Tentang</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('content')
<!-- ======= SEJARAH ======= -->
<main id="main">
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        @foreach($about as $id=>$ab)
        @if($id == 0)
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="image/{{ $ab->image }}" class="img-fluid" alt="" />
          <a href="https://youtu.be/3qfT2xBV-n0" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last order-lg-first">
          <h3>Tentang UKM PASTI POLINEMA</h3>
          <p>
            {{ $ab->description }}
          </p>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </section>
  <!-- End SEJARAH -->

  <!-- ======= VISI MISI ======= --> -->
  <section id="features" class="features">
    <div class="container">
      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        @foreach($about as $id=>$ab)
        @if($id == 1)
        <div class="col-md-5">
          <img src="image/{{ $ab->image }}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-7 order-2 order-md-1">
          <h3>VISI UKM PASTI</h3>
          <p>
            {{ $ab->description}}
          </p>
        </div>
        @endif
        @endforeach
      </div>
      <!-- Features Item -->

      @foreach($about as $id=>$ab)
      @if($id == 2)
      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="image/{{ $ab->image }}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-7">
          <h3>MISI UKM PASTI</h3>
          <p>
            {{ $ab->description }}
          </p>
        </div>
        @endif
        @endforeach
      </div>
      <!-- Features Item -->
    </div>

  </section>
  <!-- End VISI MISI -->
</main>
@endsection