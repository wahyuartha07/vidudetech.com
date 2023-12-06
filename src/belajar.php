<?php
session_start();
if (isset($_SESSION['name'])) {
    // Jika sudah ada, tampilkan nama di dalam navbar atau di mana pun yang diinginkan
    echo '<script>alert("Welcome, ' . $_SESSION['name'] . ')"</script>';
} else {
    // Jika belum ada, mungkin tampilkan form login atau tindakan lainnya
    echo '<script>alert("Silahkan login kembalI!")
        window.location.href = "sign-in.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>VIDEDUTECH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
    <link href="../asset/style/stylebelajar.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Ganti versi sesuai kebutuhan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-GLhlTQ8iZtAnL3Xjg1tJ/u5dj1h7QToWi1CQxw8CjF8BcFQ5G2J7rgomS/+Tx2z" crossorigin="anonymous">


    <!-- Bootstrap Icons -->
    <!-- Ganti versi sesuai kebutuhan -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>

<body id="main">
    <!-- Navbar start -->
    <article>
        <section>
            <nav class="navbar">
                <a href="#home" class="navbar-logo" id="nav"><img src="../asset/img/logo-navbar2.png" alt=""></a>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a class="a-nav" href="#about">About</a>
                    <a class="a-nav" href="#container-about">Belajar</a>
                    <a class="a-nav" href="#" onclick="window.location.href='profile.php'">Profile</a>
                </div>
                <!-- Side navbar -->
                <!-- Use any element to open the sidenav -->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Navbar Extra Start -->
                <!-- <button class="masuk" id="msk" onclick="return logout()">Logout</button> -->
                <a class="profile" id="profil" onclick="window.location.href='profile.php'"><i class="fa fa-fw fa-user"></i> Profile</a>
                <!-- Navbar Extra End -->
            </nav>
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
                <h2 class="isi-1">VIDEDUTECH. <BR>Untuk semua siswa dan mahasiswa.</BR> </h2>
                <hr class="hr-bates">
                <br>
                <H1>menciptakan sebuah platform pendidikan yang menggunakan teknologi dan media video untuk menghadirkan pengalaman pembelajaran yang inovatif dan menarik.</H1>
                <button class="daftar" id="dftr" onclick="window.location.href='#container-about'">Mulai Belajar</button>
            </div>
        </section>
    </article>
    <!-- hompage end -->
    <hr>
    <!-- about start -->
    <article class="container-about" id="container-about">
        <section class="container2" id="coourse">
            <div class="judul-Course">
                <h2 class="judul" id="course">Course overview</h2>
            </div>
            <section class="card" onclick="window.location.href='bab1.php'">
                <img src="../asset/img/mat1.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Bab 1</b></h4>
                    <p>PRINSIP KEDEKATAN SPASIAL DALAM DESAIN VISUAL
                    </p>
                </div>
            </section>
            <section class="card" onclick="window.location.href='bab2.php'">
                <img src="../asset/img/mat2.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Bab 2</b></h4>
                    <p>PRINSIP KEDEKATAN SPASIAL DALAM DESAIN VISUAL
                    </p>
                </div>
            </section>
            <section class="card" onclick="window.location.href='bab3.php'">
                <img src="../asset/img/mat3.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Bab 3</b></h4>
                    <p>PRINSIP KEDEKATAN SPASIAL DALAM DESAIN VISUAL
                    </p>
                </div>
            </section>
        </section>
        </section>
    </article>
    <!-- about end -->

    <!-- Footer Start -->
    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>VIDUDETECH</span>
                    </a>
                    <p>menciptakan sebuah platform pendidikan yang menggunakan teknologi dan media video untuk menghadirkan pengalaman pembelajaran yang inovatif dan menarik.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                            </svg></a>
                        <a href="#" onclick="redirectToFacebook()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                            </svg></a>
                        <a href="#" onclick="redirectToInstagram()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg></a>
                        <a href="#" onclick="redirectToLinkedin()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links text-decoration-none">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Materi Berualitas</a></li>
                        <li><a href="#">Pendidik Profesional</a></li>
                        <li><a href="#">Terakreditasi A</a></li>
                        <li><a href="#">Bersertifikat</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Jl. Tantular</p>
                    <p>Seleman, Yogyakarta</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+62 8578415827</span></p>
                    <p><strong>Email:</strong> <span>wahyuartha0@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1">Append</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">Wahyu Artha Anugrah</a>
            </div>
        </div>

    </footer>
    <!-- Footer End -->

    <script>
        // function logout() {
        //     var userConfirmed = confirm("Apakah anda yakin ingin keluar?");
        //     if (userConfirmed) {
        //         window.location.href = 'php/logout.php';
        //     } else {
        //         return false;
        //     }
        // }

        // navbar side
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "280px";
            document.getElementById("main").style.marginLeft = "280px";
            document.getElementById("nav").style.marginLeft = "230px";
            // document.getElementById("coourse").style.transform = "translateX(5%)";
            document.getElementById("profil").style.display = "flex";
            document.getElementById("profil").style.gap = "7px";
            document.getElementById("profil").style.flexDirection = "row";
            document.getElementById("course").style.transform = "translateX(140%)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("nav").style.marginLeft = "0";
            document.getElementById("coourse").style.marginLeft = "0";
            document.getElementById("course").style.transform = "translateX(0%)";
        }
    </script>

    <!-- script href social media -->
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

        function redirectToLinkedin() {
            var linkedinUsername = 'Wahyu Artha Anugrah';
            var youtubeLink = '  https://www.linkedin.com/in/wahyu-artha-1617a3296/' + linkedinUsername;
            window.open(youtubeLink, '_blank');
        }
    </script>
    <!-- script href social media -->
</body>

</html>