<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>UKM PASTI POLINEMA</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{ asset('assets/app-assets/images/ico/logo pasti.jpg') }}" rel="icon" />
  <link href="{{ asset('assets/app-assets/images/ico/logo pasti.jpg') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('guest/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('guest/vendor/aos/aos.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('guest/css/main.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
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
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="/tentang">Tentang</a></li>
          <li><a href="/proker">Program Kerja</a></li>
          <li><a href="/struktur">Struktur Organisasi</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" style="color: #FFFF00">UKM PASTI POLINEMA</h2>
          <h4 data-aos="fade-up" data-aos-delay="100">Unit Kegiatan Mahasiswa Pasukan Anti Narkotika Politeknik Negeri Malang</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container"></div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          @if($about)
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('guest/img/about.png') }}" class="img-fluid" alt="" />
            <a href="https://youtu.be/3qfT2xBV-n0" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last order-lg-first">
            <h3>Tentang UKM PASTI POLINEMA</h3>
            <p>
              {{ $about->description }}
            </p>
          </div>
        </div>
        @endif
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= PROKER ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>PROGRAM KERJA</span>
          <h2>PROGRAM KERJA</h2>
        </div>

        <div class="row gy-4">
          @foreach($workplan as $id=>$work)
          @if($id <=5) <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="image/{{ $work->image }}" alt="" class="img-fluid" />
              </div>
              <h3><a href="proker.html" class="stretched-link">{{ $work->name }}</a></h3>
              <p>{{ $work->description }}</p>
            </div>
        </div>
        @endif
        @endforeach
        <!-- End Card Item -->
      </div>
      <a href="/proker">Selengkapnya<i class="bi bi-arrow-right-short"></i></a>
      </div>
    </section>
    <!-- End PROKER -->

    <!-- ======= RELASI ======= -->
    <div class="section-header">
      <span>RELASI</span>
      <h2>RELASI</h2>
    </div>
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item" style="word-spacing: 6em;">
                <img src="{{ asset('image/BNN.png') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/POLRES.png') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/PEMKOT malang.png') }}" class="testimonial-img" alt="" />
              </div>
              <div class="testimonial-item">
                <h3>&emsp;BNN &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; KAPOLRES MALANG &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; PEMKOT MALANG</h3>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" style="word-spacing: 6em;">
                <img src="{{ asset('image/LOGO GERMAN YES.png') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO UKM PERDANA.jpg') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO_CTA.jpg') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO_GARANK[1].png') }}" class="testimonial-img" alt="" />
              </div>
              <div class="testimonial-item">
                <h3>UKM GERMAN &emsp;&emsp;&emsp;&emsp; UKM PERDANA &emsp;&emsp;&emsp;&emsp; UKM CTA &emsp;&emsp;&emsp;&emsp; UKM GARANK</h3>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" style="word-spacing: 6em;">
                <img src="{{ asset('image/LOGO_GESANK.png') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO_KOMANDO.png') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO_TEGAZS.jpeg') }}" class="testimonial-img" alt="" />
                <img src="{{ asset('image/LOGO_UKM PESAN.jpg') }}" class="testimonial-img" alt="" />
              </div>
              <div class="testimonial-item">
                <h3>UKM GESANK &emsp;&emsp;&emsp;&emsp; UKM KOMANDO &emsp;&emsp;&emsp;&emsp; UKM TEGAZS &emsp;&emsp;&emsp;&emsp; UKM PESAN</h3>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" style="word-spacing: 6em;">
                <img src="{{ asset('image/LOGO_UKM PIKK-R SEHATI.jpg') }}" class="testimonial-img" alt="" />
              </div>
              <div class="testimonial-item">
                <h3>UKM PIKK-R SEHATI</h3>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
        </div>
      </div>
    </section>
    <br>
    <!-- End RELASI -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container mt-4">
      <div class="copyright">
        <div class="social-links d-flex justify-content-center">
          <a href="https://www.instagram.com/pastipolinema/" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/UkmPastiPolinema/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://twitter.com/PastiPolinema" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
        &copy; Copyright <strong><span>UKM PASTI POLINEMA</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('guest/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('guest/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('guest/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('guest/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('guest/js/main.js') }}"></script>
</body>

</html>