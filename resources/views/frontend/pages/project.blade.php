@extends('frontend.layouts.app')

@section('content')
  
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 py-5">
  <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Project</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Project</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->


    <!-- Project Start -->
    <!-- IoT Project Fundraising Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
      <div class="row g-0">
          <div class="col-lg-3 d-none d-lg-flex">
              <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                  <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Dukung Proyek IoT Kami</h1>
              </div>
          </div>
          <div class="col-md-12 col-lg-9">
              <div class="ms-lg-5 ps-lg-5">
                  <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                      <h6 class="text-secondary text-uppercase">Proyek IoT Kami</h6>
                      <h1 class="mb-5">Dukung Pengembangan Teknologi IoT untuk Masa Depan</h1>
                  </div>
                  <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                      <!-- IoT Project 1 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">IoT untuk Pertanian Pintar</h4>
                          <p>Proyek ini berfokus pada pengembangan sensor IoT untuk memonitor kelembaban tanah, suhu,
                              dan nutrisi guna meningkatkan hasil pertanian.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Mendukung
                              Pertanian Berkelanjutan</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Optimalisasi
                              Hasil Panen</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh
                              Dukungan Anda</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat
                              Selengkapnya<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- IoT Project 2 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">Smart City IoT</h4>
                          <p>Mengembangkan solusi IoT untuk kota pintar yang mencakup monitoring kualitas udara,
                              manajemen limbah, dan sistem lalu lintas yang efisien.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Lingkungan
                              Bersih</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Sistem Kota
                              Cerdas</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kebutuhan
                              Donasi</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat
                              Selengkapnya<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- IoT Project 3 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">IoT untuk Kesehatan</h4>
                          <p>Inisiatif IoT untuk mendukung peralatan medis yang terhubung, pemantauan kesehatan pasien
                              secara jarak jauh, dan manajemen rumah sakit.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Pemantauan
                              Jarak Jauh</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Teknologi
                              untuk Kesehatan</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh Bantuan
                              Anda</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat
                              Selengkapnya<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- IoT Project 4 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">Smart Home IoT</h4>
                          <p>Proyek ini bertujuan untuk mengembangkan teknologi IoT yang meningkatkan keamanan dan
                              kenyamanan rumah pintar dengan perangkat terhubung.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Keamanan
                              Rumah</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kenyamanan
                              Penghuni</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh Donasi
                          </p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat
                              Selengkapnya<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- IoT Project Fundraising End -->

  <!-- AI Project Fundraising Start -->
  <div class="container-fluid py-5 px-4 px-lg-0">
      <div class="row g-0">
          <div class="col-lg-3 d-none d-lg-flex">
              <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                  <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Dukung Proyek AI Kami</h1>
              </div>
          </div>
          <div class="col-md-12 col-lg-9">
              <div class="ms-lg-5 ps-lg-5">
                  <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                      <h6 class="text-secondary text-uppercase">Proyek AI Kami</h6>
                      <h1 class="mb-5">Dukung Pengembangan Teknologi AI untuk Masa Depan</h1>
                  </div>
                  <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                      <!-- AI Project 1 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">AI untuk Pertanian Pintar</h4>
                          <p>Proyek ini berfokus pada pengembangan model AI untuk memprediksi kelembaban tanah, suhu,
                              dan nutrisi guna meningkatkan hasil pertanian.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Mendukung
                              Pertanian Berkelanjutan</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Optimalisasi
                              Hasil Panen</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh
                              Dukungan Anda</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- AI Project 2 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">AI untuk Smart City</h4>
                          <p>Mengembangkan solusi AI untuk kota pintar yang mencakup prediksi kualitas udara,
                              manajemen limbah, dan sistem lalu lintas yang efisien.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Lingkungan
                              Bersih</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Sistem Kota
                              Cerdas</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kebutuhan
                              Donasi</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- AI Project 3 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">AI untuk Kesehatan</h4>
                          <p>Inisiatif AI untuk mendukung diagnosa medis otomatis, pemantauan kesehatan pasien
                              secara jarak jauh, dan manajemen rumah sakit.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Pemantauan
                              Jarak Jauh</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Teknologi
                              untuk Kesehatan</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh Bantuan
                              Anda</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- AI Project 4 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">AI untuk Smart Home</h4>
                          <p>Proyek ini bertujuan untuk mengembangkan teknologi AI yang meningkatkan keamanan dan
                              kenyamanan rumah pintar dengan perangkat cerdas.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Keamanan
                              Rumah</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kenyamanan
                              Penghuni</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh Donasi
                          </p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- AI Project Fundraising End -->


  <!-- Blockchain Project Fundraising Start -->
  <div class="container-fluid py-5 px-4 px-lg-0">
      <div class="row g-0">
          <div class="col-lg-3 d-none d-lg-flex">
              <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                  <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Dukung Proyek Blockchain
                      Kami</h1>
              </div>
          </div>
          <div class="col-md-12 col-lg-9">
              <div class="ms-lg-5 ps-lg-5">
                  <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                      <h6 class="text-secondary text-uppercase">Proyek Blockchain Kami</h6>
                      <h1 class="mb-5">Dukung Pengembangan Teknologi Blockchain untuk Masa Depan</h1>
                  </div>
                  <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                      <!-- Blockchain Project 1 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="/img/team-1.jpg" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">Blockchain untuk Supply Chain</h4>
                          <p>Proyek ini berfokus pada penggunaan blockchain untuk melacak asal-usul produk dalam
                              rantai pasokan, meningkatkan transparansi dan kepercayaan.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Transparansi
                              Data</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kepercayaan
                              Konsumen</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Dukungan Anda
                              Dibutuhkan</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- Blockchain Project 2 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="/img/team-1.jpg" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">Blockchain untuk Sistem Keuangan</h4>
                          <p>Pengembangan solusi blockchain untuk meningkatkan keamanan dan efisiensi transaksi dalam
                              industri keuangan.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Keamanan
                              Transaksi</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Efisiensi
                              Biaya</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Butuh Donasi
                              Anda</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- Blockchain Project 3 -->
                      <div class="bg-light p-4">
                          <div class="text-center mb-4">
                              <img src="/img/team-1.jpg" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>
                          <h4 class="mb-3">Blockchain untuk Identitas Digital</h4>
                          <p>Proyek ini bertujuan untuk membangun sistem identitas digital yang aman dan
                              terdesentralisasi menggunakan teknologi blockchain.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Privasi Data
                          </p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Akses Aman
                          </p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Dukungan Anda
                              Dibutuhkan</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                      <!-- Blockchain Project 4 -->
                      <div class="bg-light p-4">
                          <!-- Tambahkan Gambar di Sini -->
                          <div class="text-center mb-4">
                              <img src="/img/team-1.jpg" alt="Gambar Blockchain untuk Supply Chain"
                                  style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                          </div>

                          <h4 class="mb-3">Blockchain untuk Supply Chain</h4>
                          <p>Proyek ini berfokus pada penggunaan blockchain untuk melacak asal-usul produk dalam
                              rantai pasokan, meningkatkan transparansi dan kepercayaan.</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Transparansi
                              Data</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kepercayaan
                              Konsumen</p>
                          <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Dukungan Anda
                              Dibutuhkan</p>
                          <a href="{{ url('/detail-project') }}" class="btn bg-white text-primary w-100 mt-2">Lihat Selengkapnya<i
                                  class="fa fa-arrow-right text-secondary ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Blockchain Project Fundraising End -->

  <!-- Project End -->


@endsection