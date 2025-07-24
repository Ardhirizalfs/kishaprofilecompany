@extends('layouts.app')
@section('title','Kisha Accounting')
@section('content')


<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <title>Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Js swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">



<style>
  /* html, body {
  overflow-x: hidden;
} */
.swiper-slide {
  max-width: 100vw;
}


  .logoSwiper {
  pointer-events: none !important;
}

  .logoSwiper .swiper-wrapper {
    transition-timing-function: linear !important;
  }

  .logoSwiper .swiper-slide {
    width: auto !important;
    flex-shrink: 0;
    padding: 0 60px; 
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>




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
    color:#8c490e ;
  }
.text-brown2 {
    color:#8c490e ;
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

<style>
    [data-aos][data-aos-delay="3500"] {
  transition-delay: 3500ms !important;
  transition-property: opacity, transform;
  transition-duration: 1500ms;
}

    [data-aos][data-aos-delay="4500"] {
  transition-delay: 4500ms !important;
  transition-property: opacity, transform;
  transition-duration: 1500ms; 
}
    [data-aos][data-aos-delay="5500"] {
  transition-delay: 5500ms !important;
  transition-property: opacity, transform;
  transition-duration: 1500ms; 
}
    [data-aos][data-aos-delay="6500"] {
  transition-delay: 6500ms !important;
  transition-property: opacity, transform;
  transition-duration: 1500ms; 
}
   [data-aos][data-aos-delay="7000"] {
  transition-delay: 7000ms !important;
  transition-property: opacity, transform;
}
   [data-aos][data-aos-delay="7200"] {
  transition-delay: 7200ms !important;
  transition-property: opacity, transform;
}
</style>
<style>
  .oval-shape {
  background-color: rgb(253, 232, 232, 0.8);
  padding: 1px 30px;
  border-radius: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 8px rgba(154, 81, 15, 0.3);
  min-height: 60px;
  text-align: center;
}
  .oval-shape h5 {
    margin: 0;
    line-height: 1.4;
  }

</style>
<style>

  @media (max-width: 768px) {
  .text-brown h4 {
    font-size: 1.25rem !important;
  }

  .text-brown h5 {
    font-size: 1rem !important;
  }
}
.fade-in {
  opacity: 0;
  transform: translateX(-30px);
  transition: opacity 1s ease, transform 1s ease;
}
.fade-in.show {
  opacity: 1;
  transform: translateX(0);
}
</style>


<body>
  

<div class="container-fluid">
  <div class="row" style="min-height: 85vh;">
    
    <!-- Bagian Kiri (Konten) -->
    <div class="col-md-1 d-flex align-items-center justify-content-center" >
      <!-- style="background-color: rgba(220, 220, 220, 0.8);" -->
      <!-- <div class="text-center">
       <h1 style="font-size: 5rem; font-weight: bold; color: black;">KISHA</h1>
    <h2 style="font-size: 1,5em; font-weight: bold; color: black;">Accounting and Management Support</h2>
    <p style="font-size: 1rem; color: black;">Accompany Your Success</p>
        <a href="https://wa.me/62xxxxxxxxxxx" target="_blank" 
           class="d-inline-flex align-items-center mt-3 px-4 py-2" 
           style="background-color: rgba(255, 255, 255, 0.9); color: black; font-weight: bold; border-radius: 12px; text-decoration: none;">
          <img src="/images/whatsapp-icon.png" alt="WA" width="24" height="24" class="me-2">
          Hubungi Kami
        </a>
      </div> -->
    </div>

    <div class="col-md-7" data-aos="fade-right" data-aos-duration="1000">
  <h5 class="custom-font mb-4 text-brown2">
    Kami perusahaan jasa konsultan manajemen yang telah berpengalaman lebih dari 15 tahun telah mendampingi banyak klien.
  </h5>

  <h5 class="custom-font text-brown2 mb-4"   data-aos="fade-right"
     data-aos-delay="1000"
     data-aos-duration="1000"
     data-aos-anchor-placement="top-bottom"> 
    Komitmen kami memberikan pelayanan profesional menerbitkan laporan keuangan yang valid dan berkualitas sesuai dengan standart akutansi Indonesia, kami tidak ragu memberikan nilai tambah lainnya terhadap klien sehingga mendorong kemajuan, sukses dan mempunyai daya saing.
  </h5>
  <!-- <h5 class="custom-font text-brown mb-4"> 
    Komitmen kami memberikan pelayanan profesional menerbitkan laporan keuangan yang valid dan berkualitas sesuai dengan standart akutansi Indonesia, kami tidak ragu memberikan nilai tambah lainnya terhadap klien sehingga mendorong kemajuan, sukses dan mempunyai daya saing.
  </h5> -->
</div>

   <section id="services">
  <div class="container text-center">
    <h4 class="mb-4 custom-font text-brown2 fw-bold" data-aos="fade-right"
     data-aos-delay="1500"
     data-aos-duration="500"
     data-aos-anchor-placement="top-bottom">Layanan Kami :</h4>

    <div class="row mb-1">
      <div class="col-md-4 mb-3" data-aos="fade-right"
     data-aos-delay="1800"
        data-aos-duration="500"
     data-aos-anchor-placement="top-bottom">
        <a href="#Implementasi" class="text-decoration-none">
          <div class="oval-shape">
            <h5 class="custom-font text-brown2">Implementasi Software Akutansi Accurate Online.</h5>
          </div>
        </a>
      </div>
            <div class="col-md-4 mb-3"
            data-aos="fade-up"
     data-aos-delay="2100"
      data-aos-duration="500"
     data-aos-anchor-placement="top-bottom">
        <a href="#LaporanKeuangan" class="text-decoration-none">
          <div class="oval-shape">
            <h5 class="custom-font text-brown2">Penyusunan Laporan Keuangan.</h5>
          </div>
        </a>
      </div>
             <div class="col-md-4 mb-3"
             data-aos="fade-left"
     data-aos-delay="2400"
      data-aos-duration="1000"
     data-aos-anchor-placement="top-bottom">
        <a href="#Perpajakan" class="text-decoration-none">
          <div class="oval-shape">
            <h5 class="custom-font text-brown2">Pelaporan Perpajakan dan Tax Planning.</h5>
          </div>
        </a>
      </div>
     
    </div>

 <div class="row mb-4" >
  <div class="col-md-6 mb-3"  data-aos="fade-up"
     data-aos-delay="2700"
      data-aos-duration="1000"
     data-aos-anchor-placement="top-bottom">
    <a href="#SOP" class="text-decoration-none">
      <div class="oval-shape">
        <h5 class="custom-font text-brown2">
          Konsultasi Bisnis, Manajemen & Pembuatan Standart Operasional dan Prosedur (S.O.P).
        </h5>
      </div>
    </a>
  </div>

  <div class="col-md-6 mb-3"
   data-aos="fade-down"
     data-aos-delay="2000"
      data-aos-duration="500"
     data-aos-anchor-placement="top-bottom">
    <a href="#SoftwareCustom" class="text-decoration-none">
      <div class="oval-shape">
        <h5 class="custom-font text-brown2">
          Pembuatan Software Custom, Aplikasi Dan Website.
        </h5>
        <h5>&nbsp;</h5>
      </div>
    </a>
  </div>
</div>
  </div>






</section>



    <div class="col-md-1 d-flex align-items-center justify-content-center" >
    </div>

    <div class="custom-font col-md-8" > 
      <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
      <h4 class="fw-bold text-brown2" >Accompany Your Success</h4>
      <h5 class="text-brown2">Bermodal dari kecintaan terhadap akuntansi serta pengalaman terjun langsung menyelesaikan masalah, case demi case, menciptakan benih solusi lalu memupuk nilai tambah didukung daya kreasi, menjadikan bekal kuat, meyakinkan pelaku usaha, membagi sekaligus mengembangkan karya sehingga menerbitkan visi sebagai berikut :
</h5>
</div>
<div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
<div style="height: 5vh;"></div> 
      <h4 class="text-brown2 fw-bold">Visi : </h4>
  <h5 class="custom-font mb-4 text-brown2">
  Menjadi partner usaha terpercaya bagi pelaku usaha dalam menerapkan sistem informasi akuntansi yang bisa diandalkan, membangun manajemen, mendukung sistem pengendalian internal, mendorong efisiensi, efektifitas sehingga bertumbuh, maju dan berkembang.
  </h5>
  </div>
</div>

  </div>
</div>
<div style="height: 5vh;"></div> 

<!-- Carousel Section -->
 <h5 class="text-center text-brown2 fw-bold"> Didukung Penuh Oleh :</h5>
@php
  $logos = [
        ['file' => '696f0fbf-9ac0-490e-8581-0fff84a0a746_removalai_preview.png', 'height' => '80%', 'width' => '70%'],
    ['file' => 'TAHTA.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'SS.png', 'height' => '140%', 'width' => '130%'],
    ['file' => 'Logo SIG.jpeg-Photoroom.png', 'height' => '60%', 'width' => 'auto'],
        ['file' => 'ANIG.png', 'height' => '90%', 'width' => 'auto'],
    ['file' => 'Logo RCI.jpeg-Photoroom.png', 'height' => '80%', 'width' => 'auto'],
    ['file' => 'Logo_GSU.jpeg-removebg-preview.png', 'height' => '90%', 'width' => '70%'],
    ['file' => 'Logo ION 2.jpeg-Photoroom.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => '0a014214-9683-4c27-ab30-8ae573106cfb.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => '8ef1b774-cb57-4315-b16f-248020a964b4.png', 'height' => '130%', 'width' => '120%'],
    ['file' => '164f16f7-c32a-48eb-ac96-471d88c130f2.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => '406b3250-b87c-480e-b073-44b2d00b55ce.png', 'height' => '150%', 'width' => '120%'],
    ['file' => 'IMA.png', 'height' => '110%', 'width' => '150%'],
    ['file' => '241768f6-1aba-4e70-a521-9215c9e6744e.png', 'height' => '120%', 'width' => 'auto'],
    ['file' => 'Salinan_dari_Teks_paragraf_Anda-removebg-preview.png', 'height' => '100%', 'width' => '120%'],
    ['file' => '876343bb-576a-4d88-8741-9a48f718b679.png', 'height' => '60%', 'width' => 'auto'],
    ['file' => 'YML.png', 'height' => '110%', 'width' => 'auto'],
    ['file' => 'cc096b3b-a8b9-4105-a55a-4a5b90f802ed.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'Lofo SN Baru-Photoroom.png', 'height' => '60%', 'width' => 'auto'],
    ['file' => 'PTGP.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'JAYABERSAMA.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'IMS.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'logo enzo tnp background.png', 'height' => '100%', 'width' => 'auto'],
    ['file' => 'DBC.png', 'height' => '100%', 'width' => 'auto'],

  ];
@endphp

<section id="carousel-section" class="container-fluid py-4">
  <div class="swiper logoSwiper">
    <div class="swiper-wrapper">

      @foreach ($logos as $logo)
        <div class="swiper-slide d-flex justify-content-center align-items-center" style="height: 150px;">
          <img 
            src="{{ asset('images/CLIENT/' . $logo['file']) }}"
            class="img-fluid"
            style="
              height: {{ $logo['height'] }};
              width: {{ $logo['width'] }};
              object-fit: contain;
            " 
            alt="Logo">
        </div>
      @endforeach


      

    </div>
  </div>
</section>



<div style="height: 5vh;"></div>

<section id="Implementasi">
  <div class="container-fluid px-3" data-aos="fade-right" data-aos-duration="1000">
  <div class="row">
    <div class="col-md-1 d-flex align-items-center justify-content-center"></div>
    <div class="custom-font col-md-9 text-brown">
      <h4 class="fw-bold">Implementasi Software Akuntansi Accurate Online</h4>
      <h5>Kami siap membantu melakukan setting dan implementasi software akuntansi “Accurate Online”, dengan ruang lingkup sebagai berikut:</h5>
      <ol type="a" class="mb-4 fs-5">
        <li>Membuat alur ringkas bisnis proses & penerapannya pada sistem Accurate Online.</li>
        <li>Setting awal database, disesuaikan dengan kebutuhan operasional usaha sehingga efisien dan efektif, membentuk sistem pengendalian intern. Termasuk setting preferensi, membuat daftar akun, setting penomoran, desain cetakan, dan settingan lainnya.</li>
        <li>Setting hak akses login pengguna, persetujuan transaksi (approval) sesuai kebijakan manajemen.</li>
        <li>Membantu melakukan custom / modifikasi laporan dan lainnya yang diperlukan manajemen disesuaikan dengan standar operasional dan prosedur. (Terbatas kepada optimalisasi setting custom yang disediakan oleh “Accurate Online”).</li>
        <li>Melakukan simulasi, training, dan SUPPORT HARIAN ONLINE DAN ONSITE.</li>
        <li>Melakukan impor master barang, daftar pelanggan, daftar pemasok, daftar aset dan lainnya.</li>
        <li>Mereview hasil inputan operator (pengguna).</li>
        <li>Menyambungkan buku besar dan pemasangan saldo awal keuangan (periode sebelum tanggal Go Live / sebelum tanggal dimulai penggunaan Accurate Online).</li>
        <li>Menjadi administrator independen dan melakukan maintenance custom “Accurate Online”.</li>
        <li>Support setting pelaporan perpajakan dari Accurate Online. </li>
        <li>    Informasi fitur lengkap Accurate Online bisa kunjungi: <a href="https://accurate.id/fitur/" target="_blank">accurate.id/fitur</a> </li>
        </li>
      </ol>
    </div>
    </div>
  </div>
</section>

<div style="height: 5vh;"></div>


<section id="LaporanKeuangan">
  <div class="container-fluid px-3" data-aos="fade-right" data-aos-duration="500">
<div class="row">
    <div class="col-md-1 d-flex align-items-center justify-content-center"></div>
    <div class="custom-font col-md-9 text-brown">
      <h4 class="fw-bold">Menyusun Laporan Keuangan Reguler Bulanan (Cover Kisha AMS)</h4>
      <h5>Laporan keuangan yang valid, relefan dan bisa diandalkan akan berguna sebagai alat pertanggung jawaban operasional bagi manajemen untuk mengevaluasi kinerja perusahaan serta untuk menentukan kebijakan strategis perusahaan kedepan. </h5>
    <ol type="a" class="mb-4 fs-5">    
            <li>Laporan Posisi Keuangan (Neraca)</li>
            <li>Laporan Penghasilan Komprehensif (Laba Rugi)</li>
            <li>Laporan Perubahan Ekuitas</li>
            <li>Laporan Arus Kas</li>
            <li>Catatan Atas Laporan Keuangan</li>
            <li>Laporan Sumber-Sumber dan Penggunaan Dana</li>
            <li>Analisa Laporan Keuangan</li>
    </ol>
  </div>
</div>
        </div>
</section>
<div style="height: 5vh;"></div>
<section id="Perpajakan">
  <div class="container-fluid px-3">
  <div class="row">
    <div class="col-md-1 d-flex align-items-center justify-content-center"></div>
    <div class="custom-font col-md-9 text-brown">
      <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
      <h4 class="fw-bold">Pelaporan Perpajakan dan Tax Planning.</h4>
      <h5>Kami siap membantu perencanaan pajak anda menghasilkan nilai pembayaran pajak yang wajar dan efisien dengan memberikan alternatif-alternatif sesuai dengan peraturan pajak yang berlaku. </h5>
      <h5>Melakukan pengkajian aspek perpajakan terhadap semua transaksi yang telah terjadi sampai dengan kondisi tahun terakhir termasuk dokumen kontrak/perjanjian antara perusahaan dengan pihak ketiga lainnya, guna mendapatkan suatu solusi/alternatif terbaik sebagai pedoman bagi manajemen untuk pelaksanaan perpajakan sesuai ketentuan peraturan perpajakan yang berlaku.</h5>
      
      <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
      <h5 class="fw-bold">Ruang Lingkup Pendampingan Perpajakan :</h5>

      <ol type="a" class="mb-4 fs-5">
        <li>Melakukan bimbingan kepada staff pajak, mereview serta equalisasi SPT Masa, meliputi:
          <ul>
            <li>SPT Masa PPh 21</li>
            <li>SPT Masa PPh 23/26</li>
            <li>SPT Masa PPh Final</li>
            <li>SPT Masa PPN/PPnBM</li>
          </ul>
        </li>
        <li>Melakukan Penghitungan Pajak sesuai dengan Undang-Undang dan Peraturan Perpajakan.</li>
        <li>Melakukan pengumpulan data dokumen terkait dengan aspek perpajakan.</li>
        <li>Memberikan konsultasi perpajakan, termasuk informasi peraturan perpajakan yang berkaitan dengan ruang lingkup dan kegiatan usaha perusahaan, mulai dari Peraturan Pemerintah, Keputusan Presiden, Surat Keputusan Menteri Keuangan sampai dengan Surat Edaran Direktorat Jenderal Pajak.</li>
      </ol>
</div>
<div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
    <h5 class="fw-bold">Ruang lingkup Pendampingan Pemeriksaan Pajak :</h5>
      <ol type="a" class="mb-4 fs-5">
        <li>Mereview kelengkapan data/informasi dan/atau dokumen yang akan diserahkan kepada pemeriksa berdasarkan permintaan yang akan dilakukan oleh tim pemeriksa.</li>
        <li>Mengkoordinasikan permintaan data/informasi dari tim pemeriksa dan memberikan saran kepada perusahaan tentang cara terbaik untuk memberikan data tersebut; apa yang tidak biasanya diberikan dan apa yang dapat diberikan sebagai salinan, bukan asli, dan lain-lain.</li>
        <li>Membantu mengidentifikasi dokumen–dokumen yang perlu diserahkan pada tim pemeriksa dan memastikan bahwa informasi yang diberikan adalah sesuai dan konsisten dengan posisi perusahaan dalam berbagai aspek.</li>
        <li>Memberikan saran kepada perusahaan mengenai penjelasan sehubungan dengan poin-poin temuan tim pemeriksa, sesuai dengan peraturan perpajakan yang berlaku dan memastikan bahwa Undang-Undang Pajak dan peraturan-peraturan pelaksananya telah diterapkan secara konsisten.</li>
        <li>Menghadiri dan mendampingi pertemuan dengan pemeriksa dan mereview temuan serta bukti–bukti yang menjadi dasar temuan serta bersama-sama dengan perusahaan untuk menangani setiap potensi temuan sehingga terbatas hanya ada temuan terkait kesalahan atau penerapan UU dan peraturan perpajakan yang berlaku sampai dengan hasil pemeriksaan yang dikeluarkan.</li>
      </ol>
      </div>
    </div>
  </div>
</section>
</div>
<div style="height: 5vh;"></div>

<section id="SoftwareCustom">
    <div class="container-fluid px-3">
      <div class="row">
        <div class="col-md-1 d-flex align-items-center justify-content-center"></div>
          <div class="custom-font col-md-9 text-brown">
            <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
            <h4 class="fw-bold">Pembuatan Software Custom, Aplikasi, dan Website</h4>
            <h5>Kami menyediakan layanan pengembangan perangkat lunak (software) sesuai kebutuhan spesifik bisnis 
              Anda. Mulai dari aplikasi desktop, sistem informasi, hingga website profesional. Layanan ini dirancang untuk membantu efisiensi operasional, 
              memperkuat brand Anda di dunia digital, dan memberikan solusi teknologi yang tepat guna. Dengan ruang lingkup layanan sebagai berikut :
            </h5>
            </div>
            <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
            <ol type="1" class="mb-4 fs-5">
              <li>Software Custom (Sistem Informasi)
               <ul>
                  <li>Pembuatan software berbasis web atau desktop untuk operasional bisnis.</li>
                  <li>Sistem kasir, manajemen gudang, inventory, HRD/payroll, CRM, ERP sederhana, dan lainnya.</li>
                  <li>Dirancang sesuai kebutuhan proses bisnis dan SOP perusahaan Anda.</li>
              </ul>
            </li>
              <li>Aplikasi Mobile
               <ul>
                  <li>Pengembangan aplikasi berbasis Android/iOS.</li>
                  <li>Cocok untuk kebutuhan bisnis retail, booking, pemesanan layanan, katalog digital, dll.</li>
                  <li>Bisa terintegrasi dengan sistem backend & dashboard admin.</li>
              </ul>
            </li>
            <li>Website Company Profile
              <ul>
                <li>Pembuatan website profesional sebagai representasi digital perusahaan.</li>
                <li>Desain responsif dan SEO-friendly.</li>
                <li>Termasuk layanan domain, hosting, dan keamanan dasar (SSL).</li>
              </ul>
            </li>
            <li>Dashboard dan Laporan
              <ul>
                <li>Pembuatan dashboard interaktif untuk visualisasi data bisnis.</li>
                <li>Laporan operasional, laporan keuangan, atau analisa penjualan secara real-time.</li>
              </ul>
            </li>
            <li> Integrasi API & Otomatisasi
              <ul>
                <li>Integrasi sistem dengan aplikasi pihak ketiga seperti Accurate, WhatsApp API, Google Sheets, dan lainnya.</li>
                <li>Otomatisasi laporan, reminder, atau notifikasi untuk efisiensi operasional.</li>
              </ul>
            </li>
        </ol>
        </div>
            </div>
           </div>
         </div>
</section>

<div style="height: 7vh;"></div>

<section id="SOP">
  <div class="container-fluid px-3">
    <div class="row">
      <div class="col-md-1 d-flex align-items-center justify-content-center"></div>
          <div class="custom-font col-md-9 text-brown">
            <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">
              <h4 class="fw-bold">Pembuatan Standart Operasional dan Prosedur (S.O.P).</h4>
              <h5>Yaitu membuat panduan tertulis berisi langkah-langkah rinci tentang bagaimana suatu pekerjaan atau tugas harus 
                dilakukan secara konsisten dan efektif, 
                memastikan bahwa semua karyawan mengikuti prosedur yang sama, meningkatkan efisiensi, mengurangi kesalahan, 
                dan menjaga standar kualitas.
              </h5> 
            </div>
             <div data-aos="fade-right" data-aos-delay="500"data-aos-duration="500" data-aos-anchor-placement="top-bottom">

            </div>
  </div>
</section>
<div style="height: 7vh;"></div>
<div></div>
<section id="kontak">
  <div class="container-fluid px-3" data-aos="fade-up" data-aos-duration="500">
   
    <div class="custom-font text-brown">
    <h5 class=" text-center custom-font text-brown mb-4">Hubungi Kami :</h5>

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

<!-- <div style="height: 20vh;"></div> 
<section id="SOP">

</section>
<section id="SoftwareCustom">

</section>

<div style="height: 20vh;"></div>  -->








<!-- <div style="height: 60vh;"></div>  -->
<!-- About Section -->
<!-- <section id="about" class="py-5">
  <div class="container d-flex justify-content-center">
  <div class="rounded shadow p-4" style="background-color: rgba(220, 220, 220, 0.8); max-width: 900px; width: 100%;">

      <h2 class="text-center mb-4">About Company</h2>
      <div class="row align-items-center">
        
      
        <div class="col-md-5 text-center align-self-start mb-4 mb-md-0">
  <img src="{{ asset('images/logo-kisha.png') }}" alt="Logo Kisha"
       class="img-fluid"
       style="max-height: 220px; margin-top: -20px;">
</div>

      
        <div class="col-md-7">
          <p>
            Kisha Accounting adalah penyedia jasa akuntansi, keuangan, dan manajemen profesional yang siap membantu perusahaan Anda tumbuh secara berkelanjutan. Kami mengutamakan transparansi, efisiensi, dan solusi berbasis teknologi.
          </p>
          <p>
            Dengan pengalaman bertahun-tahun di berbagai industri, kami siap mendampingi Anda dalam setiap tahap pertumbuhan bisnis, mulai dari pencatatan hingga strategi keuangan tingkat lanjut.
          </p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Spacer -->
<!-- <div style="height: 30vh;"></div>  -->


<!-- Spacer -->
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    AOS.init();

    const delayedElements = document.querySelectorAll("[data-aos][data-aos-delay]");

    delayedElements.forEach(function (el) {
      const delay = parseInt(el.getAttribute("data-aos-delay"));

      if (delay > 3000) {
        const originalAos = el.getAttribute("data-aos");

        
        el.removeAttribute("data-aos");
        el.classList.remove("aos-init", "aos-animate");

        el.style.opacity = 0;

  
        setTimeout(function () {
          el.setAttribute("data-aos", originalAos);
          el.style.opacity = ""; 
          AOS.refreshHard(); 
        }, delay);
      }
    });
  });
</script> -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const hash = window.location.hash;
    if (hash === "#kontak") {
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



</body>



@endsection



