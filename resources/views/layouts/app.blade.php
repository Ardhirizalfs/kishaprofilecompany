<!DOCTYPE html>
<html lang="id">
<head>
  
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title', 'Kisha Accounting')</title>
  <link rel="icon" href="{{ asset('favicon2.png') }}" type="image/png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (untuk modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }
  </style>
</head>
<body class="font-sans text-gray-800">
  @include('partials.nav')

  <main>
    @yield('content')
  </main>


  </body>
<!-- Footer -->
<!-- Footer -->
<!-- <footer class="text-dark py-3" style="background-color: rgba(220, 220, 220, 0.8); font-size: 0.9rem;">
  <div class="container">
    <div class="row align-items-start gy-3">

   
      <div class="col-md-4">
        <h6 class="fw-bold mb-2">Kisha Accounting</h6>
        <p class="mb-1">Solusi akuntansi & manajemen terpercaya.</p>
        <p class="mb-0">© {{ date('Y') }} Kisha. All rights reserved.</p>
      </div>

      <div class="col-md-4">
        <h6 class="fw-bold mb-2">Navigasi</h6>
        <ul class="list-unstyled mb-0">
          <li><a href="#about" class="text-dark text-decoration-none">Tentang</a></li>
          <li><a href="#services" class="text-dark text-decoration-none">Layanan</a></li>
          <li><a href="#testimonials" class="text-dark text-decoration-none">Testimoni</a></li>
          <li><a href="#contact" class="text-dark text-decoration-none">Kontak</a></li>
        </ul>
      </div>


      <div class="col-md-4">
        <h6 class="fw-bold mb-2">Kontak</h6>
        <p class="mb-1">Email: info@kishaaccounting.com</p>
        <p class="mb-2">Telp: +62 812-xxxx-xxxx</p>
        <div class="d-flex gap-2">
          <a href="https://wa.me/62xxxxxxxxxxx" target="_blank">
            <img src="/images/733585.png" alt="WA" width="20">
          </a>
          <a href="https://facebook.com" target="_blank">
            <img src="/images/733547.png" alt="FB" width="20">
          </a>
          <a href="https://instagram.com" target="_blank">
            <img src="/images/2111463.png" alt="IG" width="20">
          </a>
          <a href="mailto:info@kishaaccounting.com">
            <img src="/images/732200.png" alt="Email" width="20">
          </a>
        </div>
      </div>

    </div>
  </div>
</footer> -->
