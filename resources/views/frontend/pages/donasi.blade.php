@extends('frontend.layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
      <div class="container">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Donasi</h1>
          <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb text-uppercase">
                  <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                  <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
              </ol>
          </nav>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- Booking Start -->
  <div class="container-fluid px-0" style="margin: 6rem 0;">
      <div class="video wow fadeInUp" data-wow-delay="0.1s">
          <button type="button" class="btn-play" data-bs-toggle="modal"
              data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
          </button>

          <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content rounded-0">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Video Pengenalan</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!-- 16:9 aspect ratio -->
                          <div class="ratio ratio-16x9">
                              <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                  allowscriptaccess="always" allow="autoplay"></iframe>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <h1 class="text-white mb-4">Dukung Penelitian Teknologi</h1>
          <h3 class="text-white mb-0">Bersama Kita Wujudkan Inovasi Masa Depan</h3>
      </div>
      <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="bg-light text-center p-5">
                      <h1 class="mb-4">Formulir Donasi</h1>
                      <form>
                          <div class="row g-3">
                              <div class="col-12 col-sm-6">
                                  <input type="text" class="form-control border-0" placeholder="Nama Anda"
                                      style="height: 55px;">
                              </div>
                              <div class="col-12 col-sm-6">
                                  <input type="email" class="form-control border-0" placeholder="Email Anda"
                                      style="height: 55px;">
                              </div>
                              <div class="col-12 col-sm-6">
                                  <select class="form-select border-0" style="height: 55px;">
                                      <option selected>Pilih Proyek</option>
                                      <option value="1">Proyek AI</option>
                                      <option value="2">Proyek IoT</option>
                                      <option value="3">Proyek Blockchain</option>
                                  </select>
                              </div>
                              <div class="col-12 col-sm-6">
                                  <input type="number" class="form-control border-0" placeholder="Jumlah Donasi (IDR)"
                                      style="height: 55px;">
                              </div>
                              <div class="col-12">
                                  <div class="date" id="date1" data-target-input="nearest">
                                      <input type="text" class="form-control border-0 datetimepicker-input"
                                          placeholder="Tanggal Donasi" data-target="#date1"
                                          data-toggle="datetimepicker" style="height: 55px; width: 100%;">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <textarea class="form-control border-0"
                                      placeholder="Pesan atau Dukungan Anda"></textarea>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-primary w-100 py-3" type="submit">Donasi Sekarang</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Booking End -->

@endsection