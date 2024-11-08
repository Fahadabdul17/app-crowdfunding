@extends('frontend.layouts.app')

@section('content')
    
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 py-5">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Proyek</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a class="text-white" href="{{ url('') }}">Home</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">Proyek</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->


  <!-- Project Detail Start -->
  <div class="container-fluid py-5 px-4 px-lg-0">
    <div class="container">
      <div class="row g-5">
        <!-- Project Image -->
        <div class="col-lg-6">
          <div class="mb-4">
            <img src="{{ asset('frontend//img/carousel-1.jpg') }}" alt="Gambar Proyek" class="img-fluid rounded shadow">
          </div>
        </div>

        <!-- Project Info -->
        <div class="col-lg-6">
          <h3 class="mb-3">Blockchain untuk Supply Chain</h3>
          <p>Proyek ini berfokus pada penggunaan blockchain untuk melacak asal-usul produk dalam rantai pasokan,
            meningkatkan transparansi dan kepercayaan dalam proses pengelolaan supply chain. Teknologi ini
            memungkinkan perusahaan untuk menjaga kualitas produk dan memberikan informasi yang akurat kepada
            konsumen tentang asal usul dan perjalanan produk hingga sampai ke tangan mereka.</p>

          <!-- Key Features -->
          <h5 class="mt-4">Fitur Utama</h5>
          <ul class="list-unstyled">
            <li class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Transparansi Data</li>
            <li class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Kepercayaan Konsumen</li>
            <li class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Keamanan Informasi</li>
            <li class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Efisiensi Operasional</li>
          </ul>

          <!-- Project Goals and Expected Impact -->
          <h5 class="mt-4">Tujuan dan Dampak yang Diharapkan</h5>
          <p>Proyek ini diharapkan dapat memberikan dampak positif pada efisiensi rantai pasokan global dengan
            meningkatkan transparansi dan mengurangi risiko penipuan. Selain itu, dengan mengimplementasikan
            teknologi blockchain, perusahaan dapat memastikan setiap produk tercatat dengan benar dan dapat
            diverifikasi.</p>

          <!-- Funding Info -->
          <h5 class="mt-4">Informasi Pendanaan</h5>
          <p><strong>Target Dana:</strong> $10,000</p>
          <p><strong>Dana Terkumpul:</strong> $5,000</p>
          <div class="progress mb-4">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>

          <!-- Donation Button -->
          <a href="#" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#donationModal">Dukung
            Proyek Ini</a>
        </div>
      </div>


      <!-- Modal Donasi -->
      <div class="modal fade" id="donationModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="donationModalLabel">Formulir Donasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row g-3">
                  <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Nama Anda" style="height: 55px;">
                  </div>
                  <div class="col-12 col-sm-6">
                    <input type="email" class="form-control border-0" placeholder="Email Anda" style="height: 55px;">
                  </div>
                  <div class="col-12 col-sm-6">
                    <input type="number" class="form-control border-0" placeholder="Jumlah Donasi (IDR)"
                      style="height: 55px;">
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="date" id="date1" data-target-input="nearest">
                      <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Tanggal Donasi"
                        data-target="#date1" data-toggle="datetimepicker" style="height: 55px; width: 100%;">
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control border-0" placeholder="Pesan atau Dukungan Anda"></textarea>
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
<!-- Modal Donasi end-->

      <!-- Project Team Section -->
      <div class="mt-5">
        <h4>Tim Proyek</h4>
        <div class="row g-4">
          <!-- Team Member 1 -->
          <div class="col-md-6 col-lg-3">
            <div class="bg-light p-4 text-center rounded">
              <img src="/img/about-2.jpg" alt="Dr. John Doe" class="img-fluid rounded-circle mb-3"
                style="width: 100px; height: 100px;">
              <h6 class="mb-1">Dr. John Doe</h6>
              <p class="text-muted small mb-0">Project Lead</p>
              <p class="small mt-2">Pengalaman lebih dari 20 tahun dalam penelitian blockchain dan keamanan data.</p>
            </div>
          </div>
          <!-- Team Member 2 -->
          <div class="col-md-6 col-lg-3">
            <div class="bg-light p-4 text-center rounded">
              <img src="/img/about-2.jpg" alt="Jane Roe" class="img-fluid rounded-circle mb-3"
                style="width: 100px; height: 100px;">
              <h6 class="mb-1">Jane Roe</h6>
              <p class="text-muted small mb-0">Data Analyst</p>
              <p class="small mt-2">Spesialis dalam analisis data dengan pengalaman di perusahaan teknologi terkemuka.
              </p>
            </div>
          </div>
          <!-- Team Member 3 -->
          <div class="col-md-6 col-lg-3">
            <div class="bg-light p-4 text-center rounded">
              <img src="/img/about-2.jpg" alt="Michael Smith" class="img-fluid rounded-circle mb-3"
                style="width: 100px; height: 100px;">
              <h6 class="mb-1">Michael Smith</h6>
              <p class="text-muted small mb-0">Developer</p>
              <p class="small mt-2">Ahli pengembangan aplikasi blockchain dengan latar belakang di fintech.</p>
            </div>
          </div>
          <!-- Team Member 4 -->
          <div class="col-md-6 col-lg-3">
            <div class="bg-light p-4 text-center rounded">
              <img src="/img/about-2.jpg" alt="Alice Johnson" class="img-fluid rounded-circle mb-3"
                style="width: 100px; height: 100px;">
              <h6 class="mb-1">Alice Johnson</h6>
              <p class="text-muted small mb-0">UX/UI Designer</p>
              <p class="small mt-2">Memiliki pengalaman luas dalam merancang antarmuka yang ramah pengguna.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Project Detail End -->

@endsection