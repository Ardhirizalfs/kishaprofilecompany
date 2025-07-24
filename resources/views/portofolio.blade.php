@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<head>

  <title>Kontak</title>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



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

  
</style>

</head>

<body>
  <div class="container">
<section id="portofolio">
  <div class="row">
  <div class="col-md-12 container-fluid text-start mb-3" data-aos="fade-up" data-aos-duration="1000">
   
    <div class="custom-font text-brown2">
    <h4 class="fw-bold "> Portofolio PT. Kisha Indonesia Buffer</h4>
  </div>
</div>
</div>

<div class="row"  class="col-md-12 container-fluid text-start mb-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" >
  <div class="col-6 col-md-4 order-1">
    <div class="custom-font text-brown2">
      <ul class="mb-4 fs-5">
        <li>Jasa</li>
        <li>Lelang</li>
        <li>Retail</li>
        <li>Dealer</li>
        <li>Apotik</li>
        <li>Bengkel</li>
        <li>Garmen</li>
        <li>Sekolah</li>
      </ul>
    </div>
  </div>

  <div class="col-6 col-md-4 order-2">
    <div class="custom-font text-brown2">
      <ul class="mb-4 fs-5">
        <li>Asosiasi</li>
        <li>Yayasan</li>
        <li>Koperasi</li>
        <li>Pelayaran</li>
        <li>Restaurant</li>
        <li>Kontraktor</li>
        <li>Dock Kapal</li>
        <li>Forwading</li>
      </ul>
    </div>
  </div>

  <div class="col-12 col-md-4 order-3">
    <div class="custom-font text-brown2">
      <ul class="mb-4 fs-5">
        <li>Manufaktur</li>
        <li>Developer & Real Estate</li>
        <li>Outshorching</li>
        <li>Media Televisi</li>
        <li>Kursus Musik</li>
        <li>Budidaya Perikanan</li>
        <li>Karoseri</li>
      </ul>
    </div>
  </div>
</div>

</section>


<div style="height: 10vh;"></div>

<section id="methodologi">
 <div class="row">
  <div class="col-md-12 container-fluid text-center mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
   
    <div class="custom-font text-brown">
    <h4 class="fw-bold "> Methodologi Pendampingan Client</h4>
  </div>
</div>
</div>

<div class="row justify-content-center">
  <div class="col-md-6 text-center mb-3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
    <div class="p-3 border border-3 rounded shadow" style="display: inline-block;">
      <img src="{{ asset('images/portofolio/Picture2.png') }}" alt="Foto Portofolio"
           class="rounded"
           style="width: 400px; height: auto;">
    </div>
  </div>
</div>



</section>










</div>
<div style="height: 20vh;"></div> 

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




<script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</body>



@endsection