<!DOCTYPE html>
<html lang="en">

<head>
  <title>VIDEDUTECH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
  <link href="../asset/style/style.css" rel="stylesheet">
  <!-- Google Fonts -->
</head>

<body>
  <!-- Navbar start -->
  <article>
    <section>
      <header>
        <nav class="navbar">
          <div class="search-container">
            <input type="text" id="search-bar" placeholder="Cari...">
            <button class="search-btn" id="search-button">Cari</button>
          </div>
          <div id="search-results">
            <!-- Hasil pencarian akan ditampilkan di sini -->
          </div>
          <script src="../src/js/script.js"></script>
          <a href="#home" class="navbar-logo"><img src="../asset/img/logo-navbar2.png" alt=""></a>
          <div class="navbar-nav">
            <a href="#about">Home</a>
            <a href="#container-about">Belajar </a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="sign-in.php">Profile</a>
          </div>
          <!-- Navbar Extra Start -->
          <button class="masuk" id="msk" onclick="window.location.href='sign-in.php'">Login</button>
          <!-- Navbar Extra End -->
        </nav>
      </header>
    </section>
  </article>
  <!-- Navbar End -->

  <!-- Home Page -->
  <article>
    <section class="about" id="about">
      <div class="isi-1">
        <img src="../asset/img/foto-home.png" alt="">
      </div>
      <div class="isi-2">
        <h2 class="isi-1">Untuk semua siswa dan mahasiswa. <BR>VIDEDUTECH.com</BR> </h2>
        <hr>
        <br>
        <H1>menciptakan sebuah platform pendidikan yang menggunakan teknologi dan media video untuk menghadirkan pengalaman pembelajaran yang inovatif dan menarik.</H1>
        <button class="daftar" id="dftr" onclick="window.location.href='sign-up.php'">Daftar</button>
      </div>
    </section>
  </article>
  <!-- hompage end -->

  <!-- about start -->
  <article class="container-about" id="container-about">
    <section class="container2">
      <section class="about-isi-1">
        <h2>Materi Pembelajaran</h2>
      </section>
      <section class="about-isi-2">
        <button class="bab" onclick="window.location.href='sign-in.php'">BAB 1</button>
        <button class="bab" onclick="window.location.href='sign-in.php'">BAB 2</button>
        <button class="bab" onclick="window.location.href='sign-in.php'">BAB 3</button>
      </section>
    </section>
  </article>
  <!-- about end -->

  <!-- Keunggulan Start -->
  <article class="container-keunggulan">
    <div class="keunggulan-container" id="keunggulan">
      <h2>Alasan Memilih Kami?</h2>
      <div class="isi-unggul">
        <div class="border">
          <img src="../asset/img/inovasi.png" alt="ini gambar der" class="foto-1" />
          <p>Terus Berinovasi</p>
        </div>
        <div class="border">
          <img src="../asset/img/pengalaman.png" alt="ini gambar der" class="foto-2" />
          <p>Berpengalaman</p>
        </div>
        <div class="border">
          <img src="../asset/img/relasi.png" alt="ini gambar der" class="foto-3" />
          <p>Relasi Luas</p>
        </div>
      </div>
    </div>
  </article>
  <!-- Keunggulan End -->

  <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="bio">
        <h2>VIDEDUTECH</h2>
        <p>
          Follow Sosial Media Kami dibawah ini
        </p>
      </div>
      <div class="sosmed">
        <img src="../asset/img/Twitter.png" alt="twt">
        <img src="../asset/img/Facebook.png" alt="fb">
        <img src="../asset//img/Yt.png" alt="yt">
        <img src="../asset/img/IG.png" alt="ig">
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  <script src="../src/js/responsif.js"></script>
</body>

</html>