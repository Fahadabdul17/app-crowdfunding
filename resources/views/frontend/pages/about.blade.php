@extends('frontend.layouts.app')

@section('content')
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 py-5">
  <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">About</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- Page Header End -->

    <!-- project Start -->
    <div class="container-xxl py-4">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 project-item-top wow fadeInUp" data-wow-delay="0.1s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{asset ('frontend/img/service-1.jpg')}}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Pengembangan Kecerdasan Buatan</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                              class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 project-item-top wow fadeInUp" data-wow-delay="0.3s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{ asset ('frontend/img/service-2.jpg')}}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Riset Internet of Things</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                              class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 project-item-top wow fadeInUp" data-wow-delay="0.5s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{ asset('frontend/img/service-3.jpg')}}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Pengembangan Teknologi Blockchain</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                              class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- project End -->

      <!-- About Start -->
      <div class="container-xxl py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Tentang Kami</h6>
                    <h1 class="mb-4">Kami Adalah Platform Terpercaya untuk Galang Dana Penelitian Teknologi</h1>
                    <p class="mb-4">IRC Tech Research berdedikasi untuk mendukung inovasi teknologi yang akan membawa
                        perubahan bagi masa depan. Kami bekerja sama dengan peneliti dan inovator untuk memastikan
                        penelitian yang berpotensi tinggi mendapatkan dukungan yang mereka butuhkan.</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Pendanaan Proyek
                        Teknologi</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Dukungan untuk
                        Inovasi Berkelanjutan</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Transparansi dalam
                        Setiap Donasi</p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Hubungi Kami 24/7</p>
                            <h3 class="m-0 text-secondary">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/about-1.jpg')}}"
                            style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                            src="{{ asset('frontend/img/about-2.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection