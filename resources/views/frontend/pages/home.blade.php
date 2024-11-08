
@extends('frontend.layouts.app')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(0, 0, 0, .4);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Galang Dana untuk
                                Teknologi Penelitian</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Dukung Penelitian Teknologi
                                untuk Masa Depan</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Mari berkontribusi dalam inovasi
                                teknologi melalui donasi yang akan mendukung penelitian terkini. Setiap dukungan
                                berarti untuk masa depan yang lebih baik.</p>

                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pelajari
                                Lebih Lanjut</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Donasi
                                Sekarang</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset ('frontend/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(0, 0, 0, .4);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Galang Dana Inovasi
                                Teknologi</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Bersama Membangun Masa Depan
                                Teknologi</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Bantu mendukung proyek penelitian
                                teknologi yang akan memberikan solusi inovatif dan berkelanjutan untuk dunia. Setiap
                                kontribusi membuat perubahan.</p>
                            <a href=""
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Beri
                                Dukungan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Carousel End -->

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

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

        <!-- Booking Start -->
        <div class="container-fluid px-0">
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
