<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>@yield('title') - PASTI POLINEMA</title>

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
  @yield('breadcrumbs')

  @yield('content')

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