
@extends('frontend.layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Galang Dana untuk Teknologi Penelitian</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Dukung Penelitian Teknologi untuk Masa Depan</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Mari berkontribusi dalam inovasi teknologi melalui donasi yang akan mendukung penelitian terkini. Setiap dukungan berarti untuk masa depan yang lebih baik.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pelajari Lebih Lanjut</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Donasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

  
@endsection
