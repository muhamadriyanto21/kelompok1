<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourism Surabaya</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- icon from font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/destinasi">Destinasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kuliner">Kuliner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signup">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Hero -->
    <section class="d-flex align-items-center min-vh-100">
      <div class="container">
        <div class="row">
          <!-- left col -->
          
          <!-- right col -->
          <div class="col-md-6">
            <div class="ms-3 ps-5 pe-5">
              <h1 class="text-green display-2 fw-bold mt-3">Welcome <br> to Surabaya</h1>
              <p class="mt-3 mb-5 ">Nikmati berbagai keindahan yang terkenal dengan sebutan kota pahlawan serta kunjungi berbagai tempat bersantai dengan teman dan keluarga. </p>
              <a href="" class="btn btn-brand " style="color: #fff;">Lihat Sekarang</a>
            </div>
          </div>
          
          <div class="col-md-6">
            <img class="img-fluid object-fit-cover rounded-4 shadow" src="{{asset('images/rasyid-maulana-yVwiHXoTrnU-unsplash.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </section>
    
<!-- feature -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-tittle text-center">
              <h1 class="text-green">Feature</h1>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3 col-sm-6 mt-3">
            <div class="feature py-5 px-4 rounded-4 shadow">
              <div class="feature-icon">
                <img class="mb-3" src="{{asset('images/icon/destination.png')}}" alt="">
              </div>
              <h5 class="mt-4">Destinasi Wisata</h5>
              <p>Klik untuk rekomendasi destinasi wisata Surabaya</p>
              <a href="#" class="custom-link text-decoration-underline">Lihat Lebih Lanjut</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3">
            <div class="feature py-5 px-4 rounded-4 shadow">
              <div class="feature-icon">
                <img class="mb-3" src="{{asset('images/icon/fork.png')}}" alt="">
              </div>
              <h5 class="mt-4">Kuliner Surabaya</h5>
              <p>Klik untuk rekomendasi kuliner di Surabaya</p>
              <a href="#" class="custom-link text-decoration-underline">Lihat Lebih Lanjut</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3">
            <div class="feature py-5 px-4 rounded-4 shadow">
              <div class="feature-icon">
                <img class="mb-3" src="{{asset('images/icon/party.png')}}" alt="">
              </div>
              <h5 class="mt-4">Event Surabaya</h5>
              <p>Klik untuk melihat informasi event di Surabaya</p>
              <a href="#" class="custom-link text-decoration-underline">Lihat Lebih Lanjut</a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3">
            <div class="feature py-5 px-4 rounded-4 shadow">
              <div class="feature-icon">
                <img class="mb-3" src="{{asset('images/icon/map.png')}}" alt="">
              </div>
              <h5 class="mt-4">Peta Digital</h5>
              <p>Klik untuk melihat peta digital Surabaya</p>
              <a href="#" class="custom-link text-decoration-underline">Lihat Lebih Lanjut</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <button type="button" class="btn btn-light">Lihat Semua</button>
          </div>
         </div>
      </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h1 class="text-green display-5 fw-bold mt-3">Start Your Best Journey In Surabaya</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <h3 class="display-6 mt-5 text-green fw-bold" style="font-size: 32px; font-weight: 900;">GEDUNG JAWA POS</h3>
            <p class="" style="font-size: 16px;">
              Gedung berlantai dua di Jl. Kembang Jepun <br> (Handelstraat) No. 167 dibangun pada tahun 1880-an. <br> Gedung yang dahulu bernama Unie Bank Voor <br> Nederland en Kolonien ini digunakan hingga tahun 1926.
            </p>
            <a href="" class="text-green">Baca Lebih Lanjut</a>
          </div>
         
          <div class="col-md-4">
            <img src="https://cdn-asset.jawapos.com/wp-content/uploads/2020/07/landscape-kota-surabaya.jpg" style="width: 478px; height: 334px;" class="img-fluid rounded-start rounded-end" alt="">
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>

    <!-- yang kedua -->
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <img src="https://bogordaily.net/wp-content/uploads/2022/12/image_750x_63ad3bb4931ad.jpg" style="width: 478px; height: 334px;" class="img-fluid rounded-start rounded-end" alt="">
          </div>
          
          <div class="col-md-4 ms-5">
            <h3 class="display-6 mt-5 text-green fw-bold" style="font-size: 32px; font-weight: 900;">KONSER TULUS TUR MANUSIA 2023</h3>
            <p class="" style="font-size: 16px;">
              Tulus - Tur Manusia 2023 merupakan <br> roadshow konser tunggal dari penyanyi <br> hits Indonesia, Tulus. Tour di 11 Kota ini <br> akan singgah ke Surabaya pada 12 <br> Februari 2023 di Jatim Expo
            </p>
            <a href="" class="text-green">Baca Lebih Lanjut</a>
          </div>
         <div class="col-md-2"></div>
          
        </div>
      </div>
    </div>
    <!-- yang kedua end -->

    <!-- yang ketiga -->
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <h3 class="display-6 mt-5 text-green fw-bold" style="font-size: 32px; font-weight: 900;">BALAI PEMUDA DAN ALUN-ALUN SURABAYA</h3>
            <p class="" style="font-size: 16px;">
              Gedung Balai Pemuda dibangun pada <br> tahun 1907 dengan nama Simpangsche <br> Societeit atau Simpangsche Club <br> sebagai sarana hiburan malam kaum <br> elit Eropa (terutama warga Belanda) <br> yang tinggal di Surabaya.
            </p>
            <a href="" class="text-green">Baca Lebih Lanjut</a>
          </div>
         
          <div class="col-md-4">
            <img src="https://www.ngopibareng.id/images/uploads/2022/2022-02-12/aktifkan-kegiatan-seni-di-balai-pemuda-sesuai-se-wali-kota--thumbnail-535" style="width: 478px; height: 334px;" class="img-fluid rounded-start rounded-end" alt="">
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    <!-- yang ketiga end -->

    <!-- yang ke empat -->
    <div class="container-fluid mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <img src="https://tourism.surabaya.go.id/storage/tour/1653019735_1.jpg" style="width: 478px; height: 334px;" class="img-fluid rounded-start rounded-end" alt="">
          </div>
          
          <div class="col-md-4 ms-5">
            <h3 class="display-6 mt-2 text-green fw-bold" style="font-size: 32px; font-weight: 900;">G WALK CITRALAND</h3>
            <p class="" style="font-size: 16px;">
              G-Walk berada di kawasan perumahan <br> Citraland berdiri sejak tahun 2002. <br> Konsepnya adalah pusat wisata kuliner <br> sepanjang koridor jalan dengan <br> banyaknya kafe-kafe dan restaurant <br> yang menawarkan berbagai macam <br> daya tarik tersendiri masing-masingnya <br> baik secara hidangan makanan minuman maupun konsep lokasinya.
            </p>
            <a href="" class="text-green">Baca Lebih Lanjut</a>
          </div>
         <div class="col-md-2 mb-5"></div>
          
        </div>
      </div>
    </div>
    <!-- yang keempat end -->

    <!-- footer -->
    <footer class="mt-5 pt-5 pb-5 mb-5" style="background-color: #F3FDEE;">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-2">
            <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" style="width: 100px;" alt="">
          </div>
          <div class="col-md-8 text-center">
            <p style="color: #4AC064;">@2018 - 2023 Wisata Surabaya</p> 
          </div>
          <div class="col-md-2 text-right">
            <i class="fa-brands fa-facebook fa-2x" style="color: #4AC064;"></i>
            <i class="fa-brands fa-instagram fa-2x ms-4" style="color: #4AC064;"></i>
          </div>
          <hr class="mt-5" style="color: #4AC064;">
        </div>


        <!-- oke -->
        <div class="row mt-5">
          <div class="col-md-3">
            <h5>Find Us</h5>
            <p>Tourism Information Center <br>
              Jl. Gubernur Suryo 15</p>
          </div>
          <div class="col-md-2">
            <h5>Contact Us</h5>
            <p>Dinas Kebudayaan m Kepemudaan dan Olahraga serta Pariwisata Kota Surabaya</p>

            <p>
              Jl. Tunjungan No.1-3 Kelurahan <br> Genteng Kecamatan Genteng, Kota <br> Surabaya Jawa Timur, Indonesia, <br> 60275
            </p>

            <p>031-5318409</p>
            <p>disbudporapar@surabaya.go.id</p>
          </div>
          
          <div class="col-md-5">
            <h5>Our Other Sites</h5>
            <p>Disbudporapar Surabaya</p>
            <p>360° Surabaya</p>
            <p>Tiket Wisata Surabaya</p>
            <p>Katalog Museum Surabaya</p>
            <p>Bangga Surabaya</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>

    <!-- my js -->
    <script src="js/app.js"></script>
  </body>
</html>