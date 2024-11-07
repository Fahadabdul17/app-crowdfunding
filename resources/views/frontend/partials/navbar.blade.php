<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row align-items-center top-bar">
        <div class="col-lg-3 col-md-12 text-center text-lg-start">
            <a href="" class="navbar-brand m-0 p-0">
                <h1 class="text-primary m-0">Funding Tech Research</h1>
            </a>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                <p class="m-0">Ulbi, Bandung, Indonesia</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="far fa-envelope-open text-primary me-2"></i>
                <p class="m-0"></p>irc@example.com</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->



<!-- resources/views/partials/navbar.blade.php -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">Funding Tech Research</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/project') }}" class="nav-item nav-link">Proyek Teknologi</a>
                <a href="{{ url('/donasi') }}" class="nav-item nav-link">Donasi</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="ms-3">
                    <a href="{{ url('/login') }}" class="nav-item nav-link">
                        <h4 class="m-0 text-white">Login & Register</h4>
                    </a>
                </div>
            </div>
        </div>
    </nav>
