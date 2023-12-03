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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&family=Poppins:wght@400;500;700;800;900&display=swap" rel="stylesheet">

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
                <h2 class="isi-1">Untuk semua siswa dan mahasiswa. <BR>VIDEDUTECH.com</BR></h2>
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
</body>

</html>