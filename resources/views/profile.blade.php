@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<head>

  <title>Profile</title>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Maiden+Orange&display=swap" rel="stylesheet">

<script>
  AOS.init({
    disable: false,
    once: true,
    duration: 800,
  });
</script>
   <style>
    body {
      background-image: url('{{ asset('images/backgroundfix.jpg') }}');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
      color: black; 
    }

    .bg-transparent-navbar {
      background-color: rgba(238, 218, 107, 0.5);
    }
    .navbar-nav {
  margin-left: 550px;
  color:#8c490e;
}

 @media (max-width: 768px) {
  .text-brown3 h4 {
    font-size: 1.25rem !important;
  }

  .text-brown3 h5 {
    font-size: 1rem !important;
  }
    div.fs-5
  {
    font-size: 1rem !important;
  }
}
.text-brown {
    color:#070500 ;
  }
    .text-brown2 {
    color: #8c490e;
  }
    .text-brown3 {
    color: #8c490e;
  }
  .navbar-nav .nav-link {
    color: #8c490e !important;
  }
    .custom-font {
    font-family: 'Georgia', serif;
  }

.gallery-img {
  width: 85%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
}



  </style>
  
  <style>
  #mainCarousel .carousel-item img {
    max-height: 500px;
    object-fit: cover;
  }
  .custom-font2 {

   font-family: 'Maiden Orange', serif;
   color: #000000
}

    [data-aos][data-aos-delay="4000"] {
  transition-delay: 4000ms !important;
  transition-property: opacity, transform;
  transition-duration: 1800ms; 
}
    [data-aos][data-aos-delay="5000"] {
  transition-delay: 5000ms !important;
  transition-property: opacity, transform;
  transition-duration: 1800ms; 
}
</style>

</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<body>
<section id="Company profile" style="padding-top: 140px;">
  <div class="container-fluid">
    <div class="row align-items-start g-0  d-flex">
<div class="row g-0 align-items-start">
  <!-- FOTO PROFIL -->
  <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center mb-3 mb-md-3 pe-md-4 " 
       data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
    <img src="{{ asset('images/Pak OKI.jpg') }}" 
         class="img-fluid rounded shadow" 
         style="max-width: 250px;">
  </div>

  <!-- PARAGRAF PROFIL -->
  <div class="col-12 col-md-6 custom-font text-brown">
    <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">
      <h5 class="mb-0" style="font-size: 18px;"><strong>OKI SUHARSONO, SE</strong></h5>
    </div>
    <div data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1500">
      <h5 class="mb-0" style="font-size: 18px;">Lahir di Surabaya, 23 Oktober 1983</h5>
      <h5 style="font-size: 18px;">Lulusan S1 Akuntansi, Tahun 2006 di Universitas Pembangunan Nasional <br> Jawa Timur</h5><br>
    </div>
    <div data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1500">
      <h5 style="font-size: 18px;">
        <span class="fw-bold">18 Tahun</span> berkecimpung di akuntansi, manajemen dan operasional <br>
        di beberapa perusahaan, saat ini menjadi owner <span class="fw-bold">PT. Kisha Indonesia Buffer</span> 
        dan menjadi manajer partner di beberapa perusahaan.
      </h5>
    </div>
  </div>
</div>


    <div class="row ">
<div class="col-md-1 d-none d-md-block"></div>
 <div class="col-md-1 text-center ms-md-4" style="margin-top:40px;">
  <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
   <img src="{{ asset('images/logo-kisha3.png') }}" alt="Logo" width="140" height="80" class="me-2">
   </div>
 </div>
      <div class="custom-font2 text-brown col-md-7 ms-md-5" style="margin-top: 25px;">
        <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
  <h3 class=""style="font-weight: normal;"><i>
    Mensyukuri yang telah tersuguhkan, <br>
    terus berkarya, berkembang, maju, <br>dan sukses bersama. Amin..</i>
  </h3>
</div>
</div>
  </div>
</section>

<div style="height: 25vh;"></div> 

@php
  $galleryImages = [
  
    'images/Dokumentasi/rapat.jpg',
    'images/Dokumentasi/restoran.jpg',
    'images/Dokumentasi/sawah.jpg',
    'images/Dokumentasi/taman.jpg',
    'images/Dokumentasi/timezone.jpg',
    'images/Dokumentasi/tulangan.jpg',
    'images/Dokumentasi/ultah irma.jpg',
    'images/Dokumentasi/enak.jpg',
    'images/Dokumentasi/foto 99.jpg',
    'images/Dokumentasi/foto 100.jpg',
    'images/Dokumentasi/foto 101.jpg',
    'images/Dokumentasi/foto 102.jpg',
    'images/Dokumentasi/foto 103.jpg',
    'images/Dokumentasi/foto21.jpg',
    'images/Dokumentasi/foto22.jpg',
    'images/Dokumentasi/gkjelas.jpg',
    'images/Dokumentasi/hewan.jpg',
    'images/Dokumentasi/image20.jpg',
    'images/Dokumentasi/jogja.jpg',
    'images/Dokumentasi/keluarga kisha.jpg',
    'images/Dokumentasi/komatsu.jpg',
    'images/Dokumentasi/kueh.jpg',
    'images/Dokumentasi/makan.jpg',
    'images/Dokumentasi/museum.jpg',
    'images/Dokumentasi/pantai.jpg',
    'images/Dokumentasi/pesawat.jpg',

  ];
@endphp


<section id="galeri" class="container py-5">
  <div class="row text-center">
    <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="1500">
      <div class="col-md-12 custom-font text-brown2 mb-5">
        <h3 class="fw-bold">Galeri</h3>
      </div>
    </div>
  </div>

  <div class="row g-4 gy-md-5">
    @foreach($galleryImages as $image)
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
        <img src="{{ asset($image) }}" class="gallery-img" alt="Galeri">
      </div>
    @endforeach
  </div>
</section>


<section id="kontak">
  <div class="container-fluid px-3" data-aos="fade-up" data-aos-duration="1000">
   
    <div class="custom-font text-brown3">
    <h5 class=" text-center custom-font text-brown3 mb-4">Hubungi Kami :</h5>

    <div class="row justify-content-center">
      <div class="col-md-6 text-center fs-5">
        <p class="mb-1">
          <strong>  NADIA NUR RAHMAH</strong>
        </p>
        <p class="mb-1">
          Telepon / WhatsApp : +62 851-2905-3400
          </p>
          <p class="mb-1">
          Telepon / WhatsApp : +62 813-3090-9064
        </p>
        <p class="mb-3">
          Email : kisha.marketing.official@gmail.com
        </p>

        <div class="d-flex justify-content-center gap-3">
        
          <a href="https://www.instagram.com/kishaams.official/" target="_blank">
          
            <img src="{{ asset('images/2111463.png') }}" alt="Instagram" width="30">
          </a>
          <a href="http://api.whatsapp.com/send/?phone=%2B6285129053400&text&type=phone_number&app_absent=0" target="_blank">

            <img src="{{ asset('images/733585.png') }}" alt="WhatsApp" width="30">
          </a>
          <a href="https://www.instagram.com/kishaams.official/" target="_blank">
      
            <img src="{{ asset('images/733547.png') }}" alt="Facebook" width="30">
          </a>
      
        </div>
      </div>
    </div>
        </div>
  </div>
</section>
<div style="height: 20vh;"></div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const hash = window.location.hash;
    if (hash === "#galeri") {
      const galeriSection = document.querySelector(hash);
      if (galeriSection) {
        // Scroll langsung ke galeri tanpa kelihatan efek scroll dari atas
        galeriSection.scrollIntoView({ behavior: "instant", block: "start" });

        // Alternatif: Pakai scroll tanpa efek halus
        // window.scrollTo(0, galeriSection.offsetTop);
      }
    }
  });
</script>
<a href="https://wa.me/+6285129053400" target="_blank" class="wa-float">
  <img src="/images/wa3.png" alt="Chat via WhatsApp" width="50" height="50">
</a>

<style>
  .wa-float {
    position: fixed;
    right: 20px;           /* Jarak dari sisi kiri */
    bottom: 20%;          /* Tengah vertikal */
    z-index: 999;
    display: block;
    transition: transform 0.3s;
  }

  .wa-float:hover {
    transform: scale(1.1);
  }

  .wa-float img {
    border-radius: 70%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  }
</style>

<a href="https://wa.me/+6281330909064" target="_blank" class="wa-float2">
  <img src="/images/wa3.png" alt="Chat via WhatsApp" width="50" height="50">
</a>

<style>
  .wa-float2 {
    position: fixed;
    right: 20px;           /* Jarak dari sisi kiri */
    bottom: 10%;          /* Tengah vertikal */
    z-index: 999;
    display: block;
    transition: transform 0.3s;
  }

  .wa-float2:hover {
    transform: scale(1.1);
  }

  .wa-float2 img {
    border-radius: 70%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  }
</style>



</body>



@endsection

