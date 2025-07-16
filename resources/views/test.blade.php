@extends('layouts.app')
@section('title', 'Kisha Accounting')
@section('content')

<style>
  body {
    background-image: url('{{ asset('images/background.jpg') }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: black;
    min-height: 100vh;
  }

  .bg-transparent-navbar {
    background-color: rgba(238, 218, 107, 0.5);
  }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent-navbar fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">KISHA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="#why-choose-us">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="pt-5" style="padding-top: 100px; min-height: 85vh;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color: rgba(220, 220, 220, 0.8);">
        <div class="text-center">
          <h1 class="display-1 fw-bold">KISHA</h1>
          <h2 class="fs-4 fw-bold">Accounting and Management Support</h2>
          <p class="fs-6">Accompany Your Success</p>
          <a href="https://wa.me/62xxxxxxxxxxx" target="_blank" class="btn btn-light mt-3 fw-bold">
            <img src="/images/whatsapp-icon.png" alt="WA" width="24" height="24" class="me-2">
            Hubungi Kami
          </a>
        </div>
      </div>
      <div class="col-md-8"></div>
    </div>
  </div>
</section>

<!-- Spacer -->
<div style="height: 30vh;"></div>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container d-flex justify-content-center">
    <div class="rounded shadow p-4" style="background-color: rgba(220, 220, 220, 0.8); max-width: 900px;">
      <h2 class="text-center mb-4">About Company</h2>
      <div class="row align-items-center">
        <div class="col-md-5 text-center mb-4 mb-md-0">
          <img src="{{ asset('images/logo-kisha.png') }}" alt="Logo Kisha" class="img-fluid" style="max-height: 220px;">
        </div>
        <div class="col-md-7">
          <p>Kisha Accounting adalah penyedia jasa akuntansi, keuangan, dan manajemen profesional...</p>
          <p>Kami siap mendampingi Anda dalam setiap tahap pertumbuhan bisnis Anda...</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Spacer -->
<div style="height: 20vh;"></div>

<!-- Services Section -->
<section id="services" class="py-5" style="background-color: rgba(220, 220, 220, 0.8);">
  <div class="container text-center">
    <h2 class="mb-4">Layanan Kami</h2>
    <div class="row">
      <div class="col-md-4"><h5>Jasa Akuntansi</h5><p>Pengelolaan pembukuan, laporan keuangan...</p></div>
      <div class="col-md-4"><h5>Konsultasi Pajak</h5><p>Perencanaan dan pelaporan pajak efisien...</p></div>
      <div class="col-md-4"><h5>Manajemen Bisnis</h5><p>Pengelolaan operasional dan strategi bisnis...</p></div>
    </div>
  </div>
</section>

<!-- Spacer -->
<div style="height: 20vh;"></div>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="py-5">
  <div class="container">
    <div class="p-2 rounded shadow mb-4 bg-white text-center">
      <h2 class="fw-bold text-black">Mengapa Memilih Kami</h2>
    </div>
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 rounded shadow" style="background-color: rgba(220,220,220,0.8);">
          <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" width="60" class="mb-3">
          <h5 class="fw-bold">Tim Profesional</h5>
          <p>Kami terdiri dari akuntan dan konsultan berpengalaman.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 rounded shadow" style="background-color: rgba(220,220,220,0.8);">
          <img src="https://cdn-icons-png.flaticon.com/512/2910/2910768.png" width="60" class="mb-3">
          <h5 class="fw-bold">Berbasis Teknologi</h5>
          <p>Menggunakan sistem digital untuk efisiensi maksimal.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 rounded shadow" style="background-color: rgba(220,220,220,0.8);">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="60" class="mb-3">
          <h5 class="fw-bold">Fokus Klien</h5>
          <p>Kami memberikan solusi tepat dan komunikasi intensif.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Spacer -->
<div style="height: 20vh;"></div>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5">
  <div class="container text-center">
    <div class="p-2 rounded shadow mb-4 bg-white">
      <h2 class="text-black fw-bold">Apa Kata Klien Kami</h2>
    </div>
    <div class="row">
      @for ($i = 0; $i < 6; $i++)
      <div class="col-md-4 mb-4">
        <div class="p-4 rounded shadow-sm h-100 text-center" style="background-color: rgba(220, 220, 220, 0.9);">
          <img src="/images/logo-kisha.png" alt="Logo Klien" class="mb-3" style="max-height: 60px;">
          <p class="text-dark">"Pelayanan sangat profesional dan laporan keuangan rapi."</p>
          <h6 class="text-dark">– Budi, PT Sukses Makmur</h6>
        </div>
      </div>
      @endfor
    </div>
  </div>
</section>

<!-- Spacer -->
<div style="height: 20vh;"></div>

<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <div class="p-4 rounded shadow mb-4 bg-white">
      <h2 class="text-center text-dark fw-bold">Hubungi Kami</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="p-4 rounded shadow bg-white">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label fw-bold">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email</label>
              <input type="email" class="form-control" id="email" placeholder="email@example.com">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label fw-bold">Pesan</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button type="submit" class="btn btn-secondary fw-bold">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection



<!-- Carousel Section -->
<section id="carousel-section" class="container my-5">
  <div class="swiper mySwiper rounded shadow">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="{{ asset('images/slide1.jpg') }}" class="carousel-img" alt="Slide 1">
      </div>

      <div class="swiper-slide">
        <img src="{{ asset('images/slide2.jpg') }}" class="carousel-img" alt="Slide 2">
      </div>

      <div class="swiper-slide">
        <img src="{{ asset('images/slide3.jpg') }}" class="carousel-img" alt="Slide 3">
      </div>

    </div>

    <!-- Navigation & Pagination -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init with Random Effect -->
<script>
  const effects = ['slide', 'fade', 'cube', 'coverflow', 'flip'];
  const randomEffect = effects[Math.floor(Math.random() * effects.length)];

  const swiper = new Swiper(".mySwiper", {
    loop: true,
    effect: randomEffect,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    grabCursor: true,
  });

  console.log('Efek acak yang dipakai:', randomEffect); // hanya untuk debug
</script>

<!-- Styling -->
<style>
  .swiper {
    width: 100%;
    max-width: 800px;
    height: 400px;
  }

  .carousel-img {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Tidak terpotong, tidak melebar */
  }
</style>

<!-- Swiper JS (letakkan sebelum </body>) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
  const effects = ['slide', 'fade', 'cube', 'coverflow', 'flip'];
  const randomEffect = effects[Math.floor(Math.random() * effects.length)];

  const swiper = new Swiper(".mySwiper", {
    loop: true,
    effect: randomEffect,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<!-- Styling -->
<style>
  .swiper {
    width: 100%;
    max-width: 900px;
    height: 500px;
  }

  .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
