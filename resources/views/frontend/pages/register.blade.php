@section('contant')
    <!-- Register Form Start -->
  <div class="container-fluid px-0">
    <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s"">
            <div class=" row justify-content-center">
      <div class="col-lg-5">
        <div class="bg-light text-center p-5 rounded shadow-lg">
          <h1 class="mb-4">Register</h1>
          <form>
            <div class="form-floating mb-4">
              <input type="text" class="form-control rounded-pill border-0 shadow-sm" id="name" placeholder="Nama Anda">
              <label for="name"><i class="fas fa-user"></i> Nama Anda</label>
            </div>
            <div class="form-floating mb-4">
              <input type="email" class="form-control rounded-pill border-0 shadow-sm" id="email"
                placeholder="name@example.com">
              <label for="email"><i class="fas fa-envelope"></i> Email Anda</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control rounded-pill border-0 shadow-sm" id="password"
                placeholder="Password">
              <label for="password"><i class="fas fa-lock"></i> Kata Sandi</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control rounded-pill border-0 shadow-sm" id="confirmPassword"
                placeholder="Konfirmasi Password">
              <label for="confirmPassword"><i class="fas fa-lock"></i> Konfirmasi Kata Sandi</label>
            </div>
            <button class="btn btn-primary w-100 py-3 rounded-pill shadow-sm" type="submit">Register</button>
          </form>
          <p class="mt-4">Sudah punya akun? <a href="login.html" class="text-primary">Login di sini</a></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Register Form End -->
    
@endsection