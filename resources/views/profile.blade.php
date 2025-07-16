@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Maiden+Orange&display=swap" rel="stylesheet">


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
.text-brown {
    color:#070500 ;
  }
    .text-brown2 {
    color: #8c490e;
  }
  .navbar-nav .nav-link {
    color: #8c490e !important;
  }
    .custom-font {
    font-family: 'Georgia', serif;
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
<section id="Company profile">
  <div class="container-fluid">
    <div class="row align-items-start g-0  d-flex">
      <div class="col-md-1"> </div>
      <!-- FOTO -->
      <div class="col-md-9 px-0 d-flex justify-content-center" >
        <div data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
          <img src="{{ asset('images/Pak OKI.jpg') }}" class="img-fluid rounded shadow mb-3" style="max-width: 250px;">
        </div>
      

      <!-- PARAGRAF PROFIL -->
      <div class="custom-font text-brown"  style="padding-left: 20px;">
        <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1800">
        
        <h5 class="mb-0">
         <strong> OKI SUHARSONO, SE </strong></h5> </div>
         <div data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1800">
          <h5 class="mb-0">Lahir di Surabaya, 23 Oktober 1983</h5> 
          
          <h5 > Lulusan S1 Akuntansi, Tahun 2006 di Universitas Pembangunan Nasional <br> Jawa Timur</h5> <br> </div>
           <div data-aos="zoom-in" data-aos-delay="3000" data-aos-duration="1800">
          <h5>   <span class="fw-bold">18 Tahun</span> berkecimpung di akuntansi, manajemen dan operasional <br>
          di beberapa perusahaan, saat ini menjadi owner <span class="fw-bold">PT. Kisha Indonesia Buffer</span> 
          dan menjadi manajer partner di beberapa perusahaan. </h5>
</div>

      </div>
</div>
    </div>
    <div class="row ">
      <div class="col-md-1"></div>
 <div class="col-md-1 text-center" style="margin-top:40px; margin-left:25px;">
  <div data-aos="zoom-in" data-aos-delay="5000" data-aos-duration="1800">
   <img src="{{ asset('images/logo-kisha3.png') }}" alt="Logo" width="140" height="80" class="me-2">
   </div>
 </div>
      <div class="custom-font2 text-brown col-md-7" style="margin-top: 25px; margin-left:70px;">
        <div data-aos="zoom-in" data-aos-delay="4000" data-aos-duration="1800">
  <h2 class=""style="font-weight: normal;"><i>
    Mensyukuri yang telah tersuguhkan, <br>
    terus berkarya, berkembang, maju, <br>dan sukses bersama. Amin..</i>
  </h2>
</div>
</div>
  </div>
</section>

<div style="height: 25vh;"></div> 
<section id="galeri" class="container py-5">
  <div class="row text-center">
     <div data-aos="fade-down" data-aos-delay="800" data-aos-duration="1500">
    <div class="class-md-12 custom-font text-brown2 mb-5">
        <h3 class="fw-bold">Galeri</h3>
</div>
    </div>
  </div>
  <!-- Baris pertama -->
  <div class="row  mb-4">
    <div class="col-md-3 ">
      <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1400">
        <img src="{{ asset('images/Dokumentasi/keluarga kisha.jpg') }}"  style="max-height: 171px; object-fit: cover; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1400">
        <img src="{{ asset('images/Dokumentasi/foto21.jpg') }}" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1400">
        <img src="{{ asset('images/Dokumentasi/foto22.jpg') }}" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1400">
        <img src="{{ asset('images/Dokumentasi/foto 99.jpg') }}" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>
<div style="height: 5vh;"></div> 
  <!-- Baris kedua -->
    <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 101.jpg') }}" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 101.jpg') }}" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 100.jpg') }}" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 99.jpg') }}" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>

  <div style="height: 5vh;"></div> 
  <!-- Baris KETIGA -->
    <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/pesawat.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/timezone.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/komatsu.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/museum.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>

  <div style="height: 5vh;"></div> 
  <!-- Baris KEEMPAT -->
    <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/taman.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/tulangan.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/rapat.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/pantai.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>


  <div style="height: 5vh;"></div> 
  <!-- Baris kelima -->
    <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/jogja.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/sawah.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 102.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/foto 103.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>



  <div style="height: 5vh;"></div> 
  <!-- Baris KEENAM -->
    <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/kueh.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/restoran.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/hewan.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/makan.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>
  <!--baris ke tujuh -->
   <div class="row  mb-4">
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/gkjelas.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/restoran.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height: 171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/makan.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
    <div class="col-md-3">
      <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="1500">
        <img src="{{ asset('images/Dokumentasi/hewan.jpg') }}" class="img-fluid rounded" style="height:250px; object-fit:cover;" style="max-height:171px; object-fit: cover;  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);" alt="Galeri">
      </div>
    </div>
  </div>
</section>

<section id="kontak">
  <div class="container-fluid px-3" data-aos="fade-up" data-aos-duration="1000">
   
    <div class="custom-font text-brown2">
    <h5 class=" text-center custom-font text-brown2 mb-4">Hubungi Kami :</h5>

    <div class="row justify-content-center">
      <div class="col-md-6 text-center fs-5">
        <p class="mb-1">
          <strong>  NADIA NUR RAHMA</strong>
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
</html>


@endsection

