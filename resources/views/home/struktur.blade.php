@extends('layouts.main')

@section('title', 'Struktur Organisasi')


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('guest/img/logo pasti.jpg') }}" alt="" />
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="tentang.html" >Tentang</a></li>
          <li><a href="proker.html">Program Kerja</a></li>
          <li><a href="struktur.html" class="active">Struktur Organisasi</a></li>
          <li><a href="kontak.html">Kontak</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Masuk</a></li>
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
          <h2>Struktur Organisasi</h2>
          <p>Sebagai suatu organisasi, tentunya UKM PASTI terdiri dari beberapa bidang yang memiliki beberapa staff ahli kepengurusan yang bekerja dalam satu periode.</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li>Struktur Organisasi</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('contact')
<!-- ======= Our Team Section ======= -->
<section id="team" class="team pt-0">
  <div class="container" data-aos="fade-up">
    <!-- ======= DPH 6 ======= -->
    <div class="section-header">
      <span>DEWAN PENGURUS HARIAN 6</span>
      <h2>DEWAN PENGURUS HARIAN 6</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="{{ asset('guest/img/team/dph_ketum.jpg') }}" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Shobir Juntri Yoga</h4>
            <span>Ketua Umum</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/dph_waketum.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Alfian Wardhana Jarot Cantika Putra</h4>
            <span>Wakil Ketua Umum</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/dph_sekum.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Wiam Ferdyansyah</h4>
            <span>Sekretaris Umum</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/dph_bendum.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Iftahul Huda</h4>
            <span>Bendahara Umum</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3"></div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/dph_sektu.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Andini Pramesti Kusumawardani</h4>
            <span>Sekretaris Satu</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/dph_bentu.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Karmila Novi Arfiana</h4>
            <span>Bendahara Satu</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End DPH 6 -->

    <!-- ======= BIDANG 1 ======= -->
    <div class="section-header">
      <span>BIDANG 1 - INTERNAL</span>
      <h2>BIDANG 1 - INTERNAL</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/1_kabid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Novian Putra Abdullah</h4>
            <span>Ketua Bidang 1</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/1_sekbid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Rosita Ayu Tri Lestari</h4>
            <span>Sekretaris Bidang 1</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/1_kerohanian.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Dea Rizki Wulan Oktafia</h4>
            <span>Ketua Subbidang Kerohanian</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/1_rt.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Imam Muhadi</h4>
            <span>Ketua Subbidang Rumah Tangga</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End BIDANG 1 -->

    <!-- ======= BIDANG 2 ======= -->
    <div class="section-header">
      <span>BIDANG 2 - PENCEGAHAN</span>
      <h2>BIDANG 2 - PENCEGAHAN</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/2_kabid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Ryandra Diotama Subagja</h4>
            <span>Ketua Bidang 2</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/2_sekbid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Utari Zain Athaya</h4>
            <span>Sekretaris Bidang 2</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/2_penyalahgunaan.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Yulia Eka Ardhani</h4>
            <span>Ketua Subbidang Pencengahan Penyalahgunaan</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/2_peredaran.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Dini Pratiwi</h4>
            <span>Ketua Subbidang Peredaran Gelap Narkoba</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End BIDANG 2 -->

    <!-- ======= BIDANG 3 ======= -->
    <div class="section-header">
      <span>BIDANG 3 - HUBUNGAN MASYARAKAT</span>
      <h2>BIDANG 3 - HUBUNGAN MASYARAKAT</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/3_kabid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Devanda Enrico Firmansyah</h4>
            <span>Ketua Bidang 3</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/3_sekbid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Savira Aprilia Sintia Dewi</h4>
            <span>Sekretaris Bidang 3</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/3_internal.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Amelia Marshanda Syahputri</h4>
            <span>Ketua Subbidang Internal</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/3_eksternal.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Safrina Putri Kusumawardani</h4>
            <span>Ketua Subbidang Eksternal</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End BIDANG 3 -->

    <!-- ======= BIDANG 4 ======= -->
    <div class="section-header">
      <span>BIDANG 4 - TERAPI & REHABILITASI</span>
      <h2>BIDANG 4 - TERAPI & REHABILITASI</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/4_kabid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Muhammad Faried Akmal Alaudien Yahya</h4>
            <span>Ketua Bidang 4</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/4_sekbid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Ratih Luthfiya Dewi Fashihah</h4>
            <span>Sekretaris Bidang 4</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/4_terapi.png" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Nadhira Aulia</h4>
            <span>Ketua Subbidang Terapi</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/4_rehab.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Dolro Maruli Ritonga</h4>
            <span>Ketua Subbidang Rehabilitasi</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End BIDANG 4 -->

    <!-- ======= BIDANG 5 ======= -->
    <div class="section-header">
      <span>BIDANG 5 - PENELITIAN & PENGEMBANGAN</span>
      <h2>BIDANG 5 - PENELITIAN & PENGEMBANGAN</h2>
    </div>
    <div class="row g-2 g-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/5_kabid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Hanif Fikri Fauzan</h4>
            <span>Ketua Bidang 5</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/5_sekbid.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Hanni Syamrotul Ilmi</h4>
            <span>Sekretaris Bidang 5</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/5_penelitian.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Ainun Chumairoh</h4>
            <span>Ketua Subbidang Penelitian</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="member">
          <img src="assets/img/team/5_pengembangan.jpg" class="img-fluid" alt="" />
          <div class="member-content">
            <h4>Hadyan Dwi Ariyanta</h4>
            <span>Ketua Subbidang Pengembangan</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End BIDANG 1 -->
  </div>
</section>
<!-- End Our Team Section -->
@endsection