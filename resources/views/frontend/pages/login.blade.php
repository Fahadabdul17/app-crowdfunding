@extends('frontend.layouts.app')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 py-5">
  <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Login Form Start -->
<div class="container-fluid px-0">
  <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s">
      <div class="row justify-content-center">
          <div class="col-lg-5">
              <div class="bg-light text-center p-5 rounded shadow-lg">
                  <h1 class="mb-4">Login</h1>
                  <form>
                      <div class="form-floating mb-4">
                          <input type="email" class="form-control rounded-pill border-0 shadow-sm" id="email"
                              placeholder="name@example.com">
                          <label for="email"><i class="fas fa-envelope"></i> Email Anda</label>
                      </div>
                      <div class="form-floating mb-4">
                          <input type="password" class="form-control rounded-pill border-0 shadow-sm"
                              id="password" placeholder="Password">
                          <label for="password"><i class="fas fa-lock"></i> Kata Sandi</label>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                              <label class="form-check-label" for="rememberMe">
                                  Ingat Saya
                              </label>
                          </div>
                          <a href="#" class="text-primary">Lupa Kata Sandi?</a>
                      </div>
                      <button class="btn btn-primary w-100 py-3 rounded-pill shadow-sm"
                          type="submit">Login</button>
                  </form>
                  <p class="mt-4">Belum punya akun? <a href="{{ url('/register')}}" class="text-primary">Register di
                          sini</a></p>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Login Form End -->


@endsection