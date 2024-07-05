<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>Outday Apps</title>
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <link rel="stylesheet" href="Card_Profile/style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container navbar">
      <a class="navbar-brand text-decoration-none mb-0 brandd text-primary" href="index.php">
        <i class="uil uil-bus-school fs-5" width="30px"></i>
        <strong>Outday Apps</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#destination">Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#topic">Topik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#method">Metode</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#parameter">Parameter & Algorithma</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
              Cari Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-primary" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <label>Tim Petualang</label>
        <h1 class="display-3"><strong><strong>Outday</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">Outday merupakan sistem pendukung keputusan destinasi wisata di kawasan Solo raya. Yuk Cari destinasi wisata mu disini berdasarkan kriteria kamu inginkan!</label> <br>
        <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded btn-primary mt-3 py-3">
          Cari Wisata &nbsp;<i class="uil uil-location-arrow button_icon"></i>
        </a>
      </div>
      <div class="flex-item-right">
        <img src="assets/hiking.png" class="img-fluid rounded-3" alt="">
      </div>
    </div>
    <div class="container home_scroll-button mt-2">
      <a href="#destination">
        <label class="ms-4 text-muted"><i class="uil uil-mouse-alt h3"></i>scroll down</label>
      </a>
    </div>
  </section>

  <!-- ITEM Video -->
  <section class="container my-5" id="destination">
    <span class="text-primary d-flex justify-content-center"><small>Destinasi</small></span>
    <h3 class="text-center mb-4">Terpopuler</h3>
    <div class="body_item">
      <div class="wrapperr">
        <div class="card_destination">
          <img src="https://alodiatour.com/wp-content/uploads/2020/03/lokasi-Riverboarding-Kali-Pusur.jpg" />
          <div class="infoo">
            <h5>Riverboarding Kali Pusur</h5>
            <p><small><small>
                  Tempat di mana Anda dapat merasakan tantangan di sungai pusur
                </small></small></p>
            <a target="_blank" href="https://alodiatour.com/riverboarding-kali-pusur/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://nagantour.com/wp-content/uploads/2023/08/tumurun-private-museum.webp" />
          <div class="infoo">
            <h5>Tumurun Private Museum</h5>
            <p><small><small>
                  Museum Tumurun memiliki banyak sekali koleksi lukisan dari seniman ternama
                </small></small></p>
            <a target="_blank" href="https://www.tumurunmuseum.org/id"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Gajah_Mungkur_dam.jpg" />
          <div class="infoo">
            <h5>Waduk Gajah Mungkur</h5>
            <p><small><small>
                  Kompleks Taman Rekreasi bonbin yang menjadi habitat gajah & rusa.
                </small></small></p>
            <a target="_blank" href="https://tic.wonogirikab.go.id/web/places/detail/110"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://ik.imagekit.io/tvlk/blog/2023/01/Cepogo-Cheese-Park-Boyolali-4-819x1024.jpg?tr=dpr-2,w-675" />
          <div class="infoo">
            <h5>Cepogo Cheese Park</h5>
            <p><small><small>
            merupakan tempat wisata yang menyajikan pemandangan alam indah di daerah Boyolali
                </small></small></p>
            <a target="_blank" href="https://www.instagram.com/cepogo.cheesepark.boyolali/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://napaktilas.net/wp-content/uploads/2022/03/Tempat-Camping-di-Sekitar-Tawangmangu-Campgrounds-Sekipan.webp" />
          <div class="infoo">
            <h5>Bumi Perkemahan Camping Lawu Resort</h5>
            <p><small><small>
                  Salah satu bumi perkemahan di Tawangmangu, Karanganyar
                </small></small></p>
            <a target="_blank" href="https://www.instagram.com/the_lawupark/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://asset.kompas.com/crops/ZNcQfU7kUsdbKNPKR0vMy3zWv-4=/0x0:1800x1200/750x500/data/photo/2021/11/21/6199d94c1d04d.jpg" />
          <div class="infoo">
            <h5>Museum Manusia Purba Sangiran</h5>
            <p><small><small>
                  Destinasi wisata tentang sejarah zaman dahulu
                </small></small></p>
            <a target="_blank" href="https://wonderfulimages.kemenparekraf.go.id/read/1333/museum-manusia-purba-sangiran-wisata-edukasi-sejarah-purbakala-yang-mendunia"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO -->
  <section>
      <div class="container">
        <span class="text-primary d-flex justify-content-center"><small>Candi Cetho</small></span>
        <h3 class="text-center mb-2">Rekomendasi Wisata</h3>
      <div class="flex-container mt-2">
      <div class="flex-item-left">
          <h5 class="video_title">Pesona Sejarah Di Atas Awan</h5>
          <label class="text-muted"><small><small>27,800 views - Premiered oct 1, 2019</small></small></label>
          <p class="video_p">"Berada di Dusun Cetho, Desa Gumeng, Kabupaten Karanganyar, Jawa Tengah. Candi Cetho berada di lereng Gunung Lawu, dengan ketinggian sekitar 1.496 meter di atas permukaan laut ini menyajikan pemandangan luar biasa. Candi bercorak agama Hindu yang diperkirakan bangunan ini dibuat pada masa kerajaan Majapahit. Anda tertarik untuk wisata sejarah ke Candi Cetho? "</p>
          <a href="https://maps.app.goo.gl/EHDhKLu8MNqekWARA" target="_blank" class="btn text-decoration-none rounded-pill btn-primary mt-2 py-3">
            Visited &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      <div class="flex-item-right">
          <a href="https://youtu.be/dhodAaIjyTA?si=riNEVlOR7wv9n5mH" target="_blank">
            <img class="img-fluid rounded-3" src="https://img.youtube.com/vi/dhodAaIjyTA/maxresdefault.jpg" alt="Thumbnail video YouTube"/>
          </a>
        </div>
      </div>
      <div class="container">
      <div class="video_row">
        <div class="video_item">
          <h5>Fasilitas</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Lengkap <br> <label class="text-muted"><small><small>Memperoleh Nilai 90</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Spot Foto</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Keren <br> <label class="text-muted"><small><small>Memperoleh Nilai 85</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Lahan Parkir</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Luas <br> <label class="text-muted"><small><small>Memperoleh Nilai 90</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Harga</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Murah <br> <label class="text-muted"><small><small>Rp. 10.000</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Jarak dari Pusat Kota Solo</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Jauh <br> <label class="text-muted"><small><small>44 KM</small></small></label>
            </label>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- TOPIC -->
  <section class="container my-5" id="topic">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 topic_3">
        <img src="assets/sea.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Topik Tim Petualang</small></span>
        <h3>Studi Kasus Yang Diangkat</h3>
        <p class="topic_p mt-3 text-dark">
          Luasnya wilayah Solo raya dan banyaknya objek wisata yang ada belum dapat dimaksimalkan
          karena <strong>terbatasnya informasi objek wisata</strong> yang ada di Kawasan Solo raya. </p>
        </p>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!--  Problem Solving -->
  <section class="container my-5" id="solusi">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Ide Tim Petualang</small></span>
        <h3>Problem Solving</h3>
        <p class="topic_p mt-3 text-dark">
          Membuat Website untuk Sistem Pendukung Keputusan Destinasi Wisata di Kawasan Solo raya.
          Dengan menggunakan <strong>metode Fuzzy Logic</strong>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-5 topic_3">
        <img src="assets/solvee.png" class="img-fluid rounded-3 solve_img" alt="">
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!-- FUZZY -->
  <div class="container my-5" id="method">
    <div class="row justify-content-md-center">
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <img src="assets/question.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component">
        <span class="text-primary"><small>Metode Tim Petualang</small></span>
        <h4>Kenapa Memilih Metode Fuzzy Logic ?</h4>
        <span class="text-muted"><small>Logika Fuzzy adalah suatu cara yang tepat untuk memetakan suatu ruang input ke dalam ruang output.
          </small></span>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-4">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-star fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Mudah</strong></label><br>
            <span class="text-muted"><small>Konsep logika Fuzzy mudah dimengerti</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-check-circle fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Fleksibel</strong></label><br>
            <span class="text-muted"><small>Implementasi Fuzzy tak terbatas</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-border-alt fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Toleransi</strong></label><br>
            <span class="text-muted"><small>Toleransi terhadap data yang tidak akurat</small></span>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>

  <!-- PARAMETERS -->
  <center>
    <div class="container" id="parameter">
      <div class="parameter_img">
        <div>
          <span><small>Parameter Kelompok 5</small></span>
          <h4>Parameter Yang Digunakan</h4>
        </div>
        <div class="parameter_text">
          <h5 class="parameter1"><i class="uil uil-map-pin-alt"> </i> Jarak</h5>
          <h5 class="parameter2"><i class="uil uil-bill"> </i> Harga</h5>
          <h5 class="parameter4"><i class="uil uil-star"> </i> Fasilitas</h5>
          <h5 class="parameter5"><i class="uil uil-sign-alt"> </i> Parkiran</h5>
          <h5 class="parameter3"><i class="uil uil-camera-plus"> </i> Spot Foto</h5>
        </div>
      </div>
    </div>
  </center>

  <!-- Alghoritma -->
  <div class="container my-5">
    <span class="text-primary d-flex justify-content-center"><small>Perhitungan</small></span>
    <h3 class="text-center mb-4">Alghoritma Parameter</h3>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Parameter Jarak
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Jarak.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Jarak.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Parameter Harga
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Parameter Fasilitas
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Parameter Luas Parkir
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Parkiran.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Parkiran.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Parameter Spot Foto
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bodyy">
    <div class="containerrr">
      <div class="text-white mb-5 text-center">
        <span><small>Anggota Kelompok 3</small></span>
        <h3>Tim Petualang</h3>
      </div>
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />
      <div class="main-card">
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/eka2.jpg" alt="">
              </div>
              <div class="details">
                <div class="name">Eka Yulianti</div>
                <div class="job">220101051</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/safa2.avif" alt="">
              </div>
              <div class="details">
                <div class="name">Keisha Safa</div>
                <div class="job">220101059</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/salma.avif" alt="">
              </div>
              <div class="details">
                <div class="name">Hafizhah Salma</div>
                <div class="job">220101060</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/nabila1.jpg" alt="">
              </div>
              <div class="details">
                <div class="name">Nabila Putri</div>
                <div class="job">220101067</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/rizki.avif" alt="">
              </div>
              <div class="details">
                <div class="name">Rizki Anisa</div>
                <div class="job">220101073</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button">
        <label for="one" class="active one"></label>
        <label for="two" class="two"></label>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
