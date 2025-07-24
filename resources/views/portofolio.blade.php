@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<head>

  <title>Kontak</title>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



   <style>

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
     .text-brown3 {
    color: #8c490e;
  }
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
<section id="portofolio" class="d-none d-md-block">
  <div class="row"  style="padding-top: 140px;">
  <div class="col-md-12 container-fluid text-start mb-3" data-aos="fade-up" data-aos-duration="1000">
   
    <div class="custom-font text-brown2">
    <h4 class="fw-bold "> Portofolio :</h4>
  </div>
</div>
</div>

<div class="row"  class="col-md-12 container-fluid text-start mb-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" >
  <div class="col-6 col-md-2 order-1">
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

  <div class="col-6 col-md-2 order-2">
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

<section id="portofolio-mobile" class="d-block d-md-none">
  <div class="row" style="padding-top: 140px;">
    <div class="col-12 mb-3" data-aos="fade-up" data-aos-duration="1000">
      <div class="custom-font text-brown2">
        <h4 class="fw-bold">Portofolio :</h4>
      </div>
    </div>

    <div class="col-12 mb-3">
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
            <li>Asosiasi</li>
          <li>Yayasan</li>
          <li>Koperasi</li>
          <li>Pelayaran</li>
          <li>Restaurant</li>
          <li>Kontraktor</li>
          <li>Dock Kapal</li>
          <li>Forwading</li>
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



<div style="height: 15vh;"></div>

<section id="methodologi">


<div class="row justify-content-center">
  <div class="col-md-6 mb-3 text-center" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
    
    <div class="custom-font text-brown">
      <h4 class="fw-bold">Methodologi</h4>
    </div>
    
    <img src="{{ asset('images/portofolio/Picture2.png') }}" alt="Foto Portofolio"
         class="rounded d-block mx-auto"
         style="width: 400px; height: auto;">
         
  </div>

   <div class="col-md-6 mb-3 text-center" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
    
    <div class="custom-font text-brown">
      <h4 class="fw-bold">Maintenance</h4>
    </div>
    
    <img src="{{ asset('images/portofolio/Picture4.png') }}" alt="Foto Portofolio"
         class="rounded d-block mx-auto"
         style="width: 400px; height: auto;">
         
  </div>
</div>
<div class="row">
<div class="col-md-10  col-12 mb-3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" style="margin-top:30px;"> 
   <div class="custom-font text-brown">
<h4>Dengan Pendekatan :</h4>
<ul class="mb-4 fs-5 ">
  <li>Review Dokumen</li>
  <li>Interview</li>
  <li>Focus Group Discussion</li>
</ul>
</div>

</div>
</div>

<div style="height: 20vh;"></div>

<section id="kontak">
  <div class="container-fluid px-3 text-brown2" data-aos="fade-up" data-aos-duration="500">
   
    <div class="custom-font text-brown3">
    <h5 class=" text-center custom-font text-brown3 mb-2">Hubungi Kami :</h5>

    <div class="row justify-content-center">
      <div class="col-md-6 text-center fs-5">
        <p class="mb-1">
          <strong>  NADIA NUR RAHMAH</strong>
        </p>
        <p style="margin-bottom:-1px;">
          Telepon / WhatsApp : 
          </p>
          <p style="margin-bottom:-1px;">+62 851-2905-3400</p>
          <p style="margin-bottom:-1px;">
           +62 813-3090-9064
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
         <a href="https://mail.google.com/mail/?view=cm&fs=1&to=kisha.marketing.official@gmail.com&su=Permintaan%20Informasi%20Layanan&body=Halo%20Kisha%2C%0A%0ASaya%20tertarik%20dengan%20layanan%20yang%20ditawarkan.%20Mohon%20informasinya%20lebih%20lanjut.%0A%0ATerima%20kasih.">
      
            <img src="{{ asset('images/mail.png') }}" alt="Facebook" width="50">
          </a>
      
        </div>
      </div>
    </div>
        </div>
  </div>
</section>

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