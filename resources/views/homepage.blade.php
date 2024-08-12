@extends('layout.layout')

@section('content')

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <img src="{{ asset('/img/bg-1.png') }}" >

    {{-- <div class="container d-flex flex-column">

      <div class="row flex-grow-1">
        <div class="swiper gallery-top">
          
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('/img/bg-1.png') }}" >
            </div>
            <div class="swiper-slide"><img src="{{ asset('/img/bg-2.png') }}" ></div>
            <div class="swiper-slide"><img src="{{ asset('/img/bg-3.png') }}" ></div>
          </div>

          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
      </div>

      <div class="row flex-grow-0" style="height: 40%;">
        <div class="col d-flex justify-content-center align-items-center">
          <img src="{{ asset('/img/explore-thai-1.png') }}" class="exp-thai">
        </div>
        <div class="col d-flex justify-content-center align-items-center">
          <div class="swiper gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="{{ asset('/img/bg-1.png') }}" ></div>
              <div class="swiper-slide"><img src="{{ asset('/img/bg-2.png') }}" ></div>
              <div class="swiper-slide"><img src="{{ asset('/img/bg-3.png') }}" ></div>
            </div>
          </div>
        </div>
      </div>

    </div>   --}}

    {{-- <div class="container d-flex flex-column"> <!-- Full viewport height for container -->

      <div class="row flex-grow-1">
        <div class="swiper gallery-top d-flex">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('/img/bg-1.png') }}" class="img-fluid" alt="Background 1">
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('/img/bg-2.png') }}" class="img-fluid" alt="Background 2">
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('/img/bg-3.png') }}" class="img-fluid" alt="Background 3">
            </div>
          </div>
    
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
      </div>
    
      <div class="row flex-grow-0" style="height: 40%;">
        <div class="col d-flex justify-content-center align-items-center">
          <img src="{{ asset('/img/explore-thai-1.png') }}" class="img-fluid" style="max-height: 100%; max-width: 100%;" alt="Explore Thai">
        </div>
        <div class="col d-flex justify-content-center align-items-center">
          <div class="swiper gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="{{ asset('/img/bg-1.png') }}" class="img-fluid" alt="Thumbnail 1">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('/img/bg-2.png') }}" class="img-fluid" alt="Thumbnail 2">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('/img/bg-3.png') }}" class="img-fluid" alt="Thumbnail 3">
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div> --}}
    

  </div>

  </section><!-- /Hero Section -->

  <section id="about" class="about position-relative">
    <img src="{{ asset('/img/about-bg-img.png') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Background Image">
    <div class="row d-flex position-relative z-1">
  
      <div class="col d-flex justify-content-center align-items-center">
        <img src="{{ asset('/img/about-img.png') }}" class="img-fluid">
      </div>
  
      <div class="col d-flex flex-column justify-content-center">

        <div class="tentang">
          <h2>Tentang Program</h2>
          <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin 
            menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di 
            Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!</p>
            <a class="btn-getstarted" href="{{ url('/register') }}">DAFTAR SEKARANG</a>
        </div>

        <div class="mekanisme">
          <h2>Mekanisme Penjurian</h2>
          <ul class="custom-shape-bullets">
            <li>
              <h4>Isi Formulir</h4>
              <p>1 - 31 Mei 2023</p>
              <p>Lengkapi formulir pendaftaran dengan data sebenarnya</p>
            </li>
            <li>
              <h4>Penjurian</h4>
              <p>1 - 7 Juni 2023</p>
              <p>Ikuti rangkaian penjurian online/offline</p>
            </li>
            <li>
              <h4>Pengumuman Pemenang</h4>
              <p>11 Juni 2023</p>
              <p>Ikuti rangkaian penjurian online/offline</p>
            </li>
          </ul>

          

        </div>

      </div>
  
    </div>
  </section>
  
  <section id="news" class="news position-relative">
    <img src="{{ asset('/img/news-bg.png') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Background Image">
    {{-- <div class="row d-flex position-relative z-1"> --}}

    <div class="container">
      <div class="row d-flex position-relative">
        <div class="col-2">
          <img src="{{ asset('/img/detik-travel-logo.png') }}" >
        </div>

        <div class="col-10">
          <h2 style="color: #F79820; font-size: 35px;"><b>Update</b></h2>
        </div>

        <div class="col-6 p-3">
          <div class="image-overlay position-relative">
            <img src="{{ asset('/img/news-1.png') }}" >
            <div class="gradient-overlay"></div>
            <div class="text-overlay">
              <h4>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h4>
              <p>3 jam yang lalu</p>
            </div>
          </div>
          
        </div>

        <div class="col-6 side-news">

          <div class="row py-3">
            <div class="col-3">
              <img src="{{ asset('/img/news-2.png') }}" >
            </div>
            <div class="col-9">
              <h5>Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</h5>
              <p>1 jam yang lalu</p>
            </div>
          </div>

          <div class="row py-3">
            <div class="col-3">
              <img src="{{ asset('/img/news-3.png') }}" >
            </div>
            <div class="col-9">
              <h5>Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak</h5>
              <p>1 jam yang lalu</p>
            </div>
          </div>

          <div class="row py-3">
            <div class="col-3">
              <img src="{{ asset('/img/news-4.png') }}" >
            </div>
            <div class="col-9">
              <h5>Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</h5>
              <p>1 jam yang lalu</p>
            </div>
          </div>

          <div class="row other-news">
            <h5>Lihat Berita Lainnya</h5>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection
