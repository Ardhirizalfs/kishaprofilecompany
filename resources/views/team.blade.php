@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>

img[style*="transform: scale"] {
  will-change: transform;
}


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
    color: #8c490e;
  }

  .text-brown {
    color: #8c490e;
  }

  .navbar-nav .nav-link {
    color: #8c490e !important;
  }

  .custom-font {
    font-family: 'Georgia', serif;
  }
  .custom-border {
    border: 4px solid #8c490e;
  }
.gradient-border {
  background: linear-gradient(to top right, #d00000, #ffd700);
}
</style>

<style>
  #mainCarousel .carousel-item img {
    max-height: 500px;
    object-fit: cover;
  }
</style>



</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<body>
  
<section id="squad" class="py-1">
  <div class="container">
    <div class="row ">
<div class="col-md-2"></div>
      <!-- Gambar 1 -->
      <div class="col-md-12 text-center">
        <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <img src="{{ asset('images/team1/pak oki profile.webp') }}"
        loading="lazy"
             class="img-fluid  rounded-circle"
             style="width: 300px; height: 300px; object-fit: cover;" 
             alt="Oki Suharsono">
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown ">Oki Suharsono, SE.</h5>
          <p class="card-text text-muted custom-font text-brown">Direktur PT. Kisha Indonesia Buffer</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
</div>
<div class="row text-center">
      <!-- Gambar 2 (di kanan & lebih bawah) -->
      <div class="col-md-6"  style="padding-left:200px">
            <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <img src="{{ asset('images/team1/pak oki profile 2.webp') }}" 
        loading="lazy"
                class="img-fluid rounded-circle"
             style="width: 220px; height: 220px; object-fit: cover; border-radius: 12px;" 
             alt="Hans Taufan">
             </div>
        <div class="card-body mt-3 text-center" >
          <h5 class="card-title custom-font text-brown ">Hans Taufan, SE. Ak, CA. BKP.</h5>
          <p class="card-text text-muted custom-font text-brown">Manajer Partner</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>

</div>
<div class="col-md-6" style="padding-right:220px" >
   <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <img src="{{ asset('images/team/aldi.jpeg') }}"
        loading="lazy"
             class="img-fluid rounded-circle"
             style="width: 220px; height: 220px; object-fit: cover;" 
             alt="Hans Taufan">
             </div>
        <div class="card-body mt-3 text-center">
          <h5 class="card-title custom-font text-brown">Aldi Maulana Dwi Putra</h5>
          <p class="card-text text-muted custom-font text-brown">Manajer Partner</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      </div>


      <!--KARYAWANNNNNNNNN -->
      <div class="row text-center ">
      <div class="col-md-4" >
        <div style="padding-left: 0px;">
           <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
     <div class="mx-auto"
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden;">
  <img src="{{ asset('images/team1/nadia - Copy.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.4); margin-left:10px;"
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3 text-center">
          <h5 class="card-title custom-font text-brown ">Nadia Nur Rahmah</h5>
          <p class="card-text text-muted custom-font text-brown">Supervisor</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
</div>
</div>
 <div class="col-md-4" >
        <div style="padding-left: 0px;">
          <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <div class="mx-auto" 
style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/anita.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.3); margin-left:12px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3 text-center">
          <h5 class="card-title custom-font text-brown ">Anita Wahyuning Safitri</h5>
          <p class="card-text text-muted custom-font text-brown">Senior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
</div>
</div>
<div class="col-md-4" >
  <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
         <div class=" mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/tsabita.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(1.9); margin-top:-25px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown">Tsabita Zahiyah Putri</h5>
          <p class="card-text text-muted custom-font text-brown">Senior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      </div>

     <!-- BARISSSS 2 -->

         <div class="row text-center ">
 <div class="col-md-4" >
        <div style="padding-left: 0px;">
          <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <div class="mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/mirna.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.2); margin-left: -14px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3 text-center">
          <h5 class="card-title custom-font text-brown">Mirna Andryany Susilo Putri</h5>
          <p class="card-text text-muted custom-font text-brown">Senior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
</div>
</div>

<div class="col-md-4" >
        <div style="padding-left: 0px;">
          <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
        <div class=" mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/arum.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.4); margin-top: -35px; " 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3 text-center">
          <h5 class="card-title custom-font text-brown ">Arum Arimbi Safitri</h5>
          <p class="card-text text-muted custom-font text-brown">Senior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
</div>
</div>



<div class="col-md-4" >
<div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
         <div class=" mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/kiky.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.0); margin-left:13px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown">Kiky Delbia Herliani</h5>
          <p class="card-text text-muted custom-font text-brown">Junior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      </div>

      <!-- BARIS 3------------------ -->
        <div class="row text-center ">
       <div class="col-md-4" >
        <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
         <div class="mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/indra.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(2.0); margin-left:10px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown">Indra Syafiudin Naufal</h5>
          <p class="card-text text-muted custom-font text-brown">Junior Staff</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    
      


      <div class="col-md-4" >
        <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
         <div class="mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/irma.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(1.5); margin-left:-13px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown">Siti Nur Komariyah</h5>
          <p class="card-text text-muted custom-font text-brown">Finance & GA</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>

           <div class="col-md-4" >
            <div class="gradient-border rounded-circle" style="padding: 4px; display: inline-block;">
         <div class="mx-auto" 
     style="width: 220px; height: 220px; border-radius: 50%; overflow: hidden; position: relative;">
  <img src="{{ asset('images/team1/rzl.webp') }}"
  loading="lazy"
       style="width: 100%; height: 100%; object-fit: cover; transform: scale(1.2); margin-left:3px; margin-top:10px;" 
       alt="Nadia">
</div>
</div>
        <div class="card-body mt-3">
          <h5 class="card-title custom-font text-brown">Ardhi Rizal Fanani</h5>
          <p class="card-text text-muted custom-font text-brown">Sosial Media & IT</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      </div>
      </div>
      


      
    </div>
    </div>
</section>

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