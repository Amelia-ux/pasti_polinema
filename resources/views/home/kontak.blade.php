@extends('layouts.main')

@section('title', 'Kontak')

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
        <li><a href="/struktur">Struktur Organisasi</a></li>
        <li><a href="/kontak" class="active">Kontak</a></li>
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
          <h2>Kontak</h2>
          <p>Kontak serta lokasi sekretariat UKM PASTI POLINEMA</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Kontak</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div>
      <iframe style="border: 0; width: 100%; height: 340px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5044441073164!2d112.61347971411026!3d-7.946708281363994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1674018129961!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>
    <!-- End Google Maps -->


    <div class="row gy-4 mt-4">
      <div class="col-lg-4">
        @foreach($contact as $id=>$con)
        @if($id == 2)
        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Lokasi:</h4>
            <p>{{$con->link}}</p>
          </div>
        </div>
        <!-- End Info Item -->
        @endif
        @endforeach

        @foreach($contact as $id=>$con)
        @if($id == 3)
        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Email:</h4>
            <p>{{$con->link}}</p>
          </div>
        </div>
        <!-- End Info Item -->
        @endif
        @endforeach
      </div>
      <!-- End Contact Form -->
    </div>
  </div>
</section>
<!-- End Contact Section -->
@endsection