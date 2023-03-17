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
  <div class="page-header d-flex align-items-center" style="background-image: url('guest/img/page-header.jpg')">
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
        @if($about)
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="image/{{ $about->image }}" class="img-fluid" alt="" />
          <a href="https://youtu.be/3qfT2xBV-n0" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last order-lg-first">
          <h3>Tentang UKM PASTI POLINEMA</h3>
          <p>
            {{ $about->description }}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End SEJARAH -->

  <!-- ======= VISI MISI ======= --> -->
  <section id="features" class="features">
    <div class="container">
      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5">
          <img src="image/{{ $about->image }}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-7 order-2 order-md-1">
          <h3>VISI UKM PASTI</h3>
          <p>
            {{ $about->description}}
          </p>
        </div>
      </div>
      <!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="image/{{ $about->image }}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-7">
          <h3>MISI UKM PASTI</h3>
          <p>
            {{ $about->description }}
          </p>
        </div>
      </div>
      <!-- Features Item -->
    </div>
    @endif
  </section>
  <!-- End VISI MISI

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-10">
          <div class="accordion accordion-flush" id="faqlist">
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="bi bi-question-circle question-icon"></i>
                  Non consectetur a erat nam at lectus urna duis?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</div>
              </div>
            </div>
            <!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="bi bi-question-circle question-icon"></i>
                  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                  dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>
            <!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="bi bi-question-circle question-icon"></i>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna
                  duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
              </div>
            </div>
            <!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <i class="bi bi-question-circle question-icon"></i>
                  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  <i class="bi bi-question-circle question-icon"></i>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                  dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>
            <!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <i class="bi bi-question-circle question-icon"></i>
                  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                  blandit turpis cursus in
                </div>
              </div>
            </div>
            <!-- # Faq item-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Frequently Asked Questions Section -->
</main>
@endsection