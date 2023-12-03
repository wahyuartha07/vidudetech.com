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
    <section class="keunggulan-container" id="keunggulan">
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
    </section>
  </article>
  <!-- Keunggulan End -->

  <!-- Footer Start -->
    <footer>
      <div class="footer-container">
        <div class="bio">
          <h2>VIDEDUTECH</h2>
          <p>
            Created by Wahyu Artha Anugrah | © 2023.
          </p>
        </div>
        <div class="sosmed">
          <img src="../asset/img/Twitter.png" alt="twt">
          <img src="../asset/img/Facebook.png" alt="fb" onclick="redirectToFacebook()">
          <img src="../asset//img/Yt.png" alt="yt" onclick="redirectToYoutube()">
          <img src="../asset/img/IG.png" alt="ig" onclick="redirectToInstagram()">
        </div>
      </div>
    </footer>
  <!-- Footer End -->
</body>
<script src="../src/js/responsif.js"></script>
<script>
  function redirectToInstagram() {
    // Gantilah 'USERNAME' dengan username Instagram Anda
    var instagramUsername = 'whyuanuggrahh';

    // Konstruksi tautan Instagram
    var instagramLink = 'https://www.instagram.com/whyuanuggrahh/' + instagramUsername;

    // Buka tautan Instagram di jendela baru
    window.open(instagramLink, '_blank');
  }

  function redirectToYoutube() {
    var youtubeUsername = 'Wahyu Artha';
    var youtubeLink = 'https://youtube.com/@wahyuartha8570?si=oq88MhARQI1ErEwR' + youtubeUsername;
    window.open(youtubeLink, '_blank');
  }

  function redirectToFacebook() {
    var facebookUsername = 'Wahyu Artha Anugrah';
    var youtubeLink = 'https://www.facebook.com/Angraahh/?viewas=&should_open_composer=false&show_switched_toast=false&show_invite_to_follow=false&show_switched_tooltip=false&show_podcast_settings=false&show_community_review_changes=false&show_community_rollback=false&show_follower_visibility_disclosure=false&bypass_exit_warning=true' + facebookUsername;
    window.open(youtubeLink, '_blank');
  }

  
</script>

</html>