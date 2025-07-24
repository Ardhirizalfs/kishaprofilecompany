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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<body>
  <div class="container">
<section id="kontak" >
  <div class="row" style="padding-top: 140px;">
  <div class="col-md-12 container-fluid text-start" data-aos="fade-up" data-aos-duration="1000">
   
    <div class="custom-font text-brown2">
    <h4 class="fw-bold fw-line"> <u>PT. Kisha Indonesia Buffer</u></h4>
    <h5 class="mb-3">Pesona Sentosa Residence Blok E-24, <br> Ds .Modong, Kec. Tulangan, 
           Kab. Sidoarjo, <br> Jawa Timur, 61273, Indonesia </h5>
   
   <div style="height: 5vh;"></div> 
    <div class="row ">
     <div class="col-12">
    <h6 class="custom-font text-brown2 fw-bold"><i>Contact Person</i> :</h6>
  </div>
       <div class="col-12" style="margin-top: -10px;">
        
      <div class="fs-5">
  <p class="mb-0">
    <strong>NADIA NUR RAHMAH</strong>
  </p>
  
  <p class="mb-0">
    <img src="images/phone-call.png" alt="Phone" style="width: 25px; margin-right: 5px;">
     +62 851-2905-3400
  </p>
  <p class="mb-0">
    <img src="images/phone-call.png" alt="Phone" style="width: 25px; margin-right: 5px;">
      +62 813-3090-9064
  </p>
  <p class="mb-1">
    <img src="images/mail.png" alt="Email" style="width: 25px; margin-right: 5px;">
      kisha.marketing.official@gmail.com
<div style="margin-top: 20px;">
        <div class="d-flex  gap-3">
        
          <a href="https://www.instagram.com/kishaams.official/" target="_blank">
          
            <img src="{{ asset('images/2111463.png') }}" alt="Instagram" width="30">
          </a>
          <a href="http://api.whatsapp.com/send/?phone=%2B6285129053400&text&type=phone_number&app_absent=0" target="_blank">

            <img src="{{ asset('images/733585.png') }}" alt="WhatsApp" width="30">
          </a>
          <a href="https://www.facebook.com/profile.php?id=61559187973286" target="_blank">
      
            <img src="{{ asset('images/733547.png') }}" alt="Facebook" width="30">
          </a>
               <a href="https://mail.google.com/mail/?view=cm&fs=1&to=kisha.marketing.official@gmail.com&su=Permintaan%20Informasi%20Layanan&body=Halo%20Kisha%2C%0A%0ASaya%20tertarik%20dengan%20layanan%20yang%20ditawarkan.%20Mohon%20informasinya%20lebih%20lanjut.%0A%0ATerima%20kasih.">
      
            <img src="{{ asset('images/mail.png') }}" alt="Facebook" width="40">
          </a>
      
        </div>
      </div>
</div>
    </div>
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
  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.logoSwiper', {
      loop: true,
      speed: 5000,
      slidesPerView: 'auto',
      freeMode: true,
      freeModeMomentum: false,
      allowTouchMove: false,
      autoplay: {
        delay: 0,
        disableOnInteraction: false, 
        pauseOnMouseEnter: false,    
      },
    });
  });
</script>





<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</body>



@endsection