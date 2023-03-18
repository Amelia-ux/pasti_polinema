@extends('layouts.main')

@section('title', 'Program Kerja')


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
        <li><a href="/proker" class="active">Program Kerja</a></li>
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
          <h2>Program Kerja</h2>
          <p>Program Kerja dan kegiatan UKM PASTI POLINEMA</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Program Kerja</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->

@section('content')
<!-- ======= BIDANG 1 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 1</span>
      <h2>BIDANG 1</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 1 (Internal)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bertugas dalam mendayagunakan dan memaksimalkan potensi yang dimiliki oleh UKM PASTI POLINEMA, baik individualnya maupun di berbagai
        kelengkapan organisasi lainnya.
      </p>
    </div>
    <div class="row gy-4">
      @foreach($workplan as $id=>$work)
      @if($id <=3) <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">{{ $work->name }}</a></h3>
          <p>{{ $work->description }}</p>
        </div>
    </div>
    @endif
    @endforeach
    <!-- End Card Item -->
  </div>
  </div>
</section>
<!-- End BIDANG 1 -->

<!-- ======= BIDANG 2 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 2</span>
      <h2>BIDANG 2</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 2 (Pencegahan)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang melaksanakan fungsi Pencegahan, Pemberantasan, Penyalahgunaan, dan Peredaran Gelap Narkoba (P4GN) khususnya di civitas akademika
        POLINEMA dan masyarakat pada umumnya.
      </p>
    </div>
    <div class="row gy-4">
      @foreach($workplan as $id=>$work)
      @if($id >=4 && $id <= 5) <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">{{ $work->name }}</a></h3>
          <p>{{ $work->description }}</p>
        </div>
    </div>
    @endif
    @endforeach
    <!-- End Card Item -->
  </div>
  </div>
</section>
<!-- End BIDANG 2 -->

<!-- ======= BIDANG 3 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 3</span>
      <h2>BIDANG 3</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 3 (Hubungan Masyarakat)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bergerak dalam hubungan masyarakat untuk menjalin hubungan di lingkup internal dan eksternal Politeknik Negeri Malang utamanya
        BNN, organisasi sejenis, dan seluruh elemen yang bergerak di ranah kerja yang sama khususnya Kota Malang.
      </p>
    </div>
    <div class="row gy-4">
      @foreach($workplan as $id=>$work)
      @if($id == 6)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">{{ $work->name }}</a></h3>
          <p>{{ $work->description }}</p>
        </div>
      </div>
      @endif
      @endforeach
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 3-->

<!-- ======= BIDANG 4 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 4</span>
      <h2>BIDANG 4</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 4 (Terapi dan Rehabilitasi)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang memfokuskan kegiatannya terhadap pengembangan pengetahuan tentang proses terapi dan rehabilitasi.
      </p>
    </div>
    <div class="row gy-4">
      @foreach($workplan as $id=>$work)
      @if($id >=7 && $id <= 8) <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">{{ $work->name }}</a></h3>
          <p>{{ $work->description }}</p>
        </div>
    </div>
    @endif
    @endforeach
    <!-- End Card Item -->
  </div>
  </div>
</section>
<!-- End BIDANG 4 -->

<!-- ======= BIDANG 5 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 5</span>
      <h2>BIDANG 5</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 5 (Penelitian dan Pengembangan)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bergerak dalam pengembangan sumber daya manusia dan bertugas mencetak seluruh fungsionaris yang berkualitas.
      </p>
    </div>
    <div class="row gy-4">
      @foreach($workplan as $id=>$work)
      @if($id >=9)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">{{ $work->name }}</a></h3>
          <p>{{ $work->description }}</p>
        </div>
      </div>
      @endif
      @endforeach
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 5 -->
@endsection