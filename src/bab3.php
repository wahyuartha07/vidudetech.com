<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>VIDEDUTECH - Bab3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
    <link href="../asset/style/style-bab.css" rel="stylesheet">

</head>

<body id="main">
    <!-- Navbar start -->
    <article>
        <section>
            <nav class="navbar">
                <a href="#home" class="navbar-logo" id="nav"><img src="../asset/img/logo-navbar2.png" alt=""></a>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a class="a-nav" href="./belajar.php#about">About</a>
                    <a class="a-nav" href="./belajar.php#container-about">Belajar</a>
                    <a class="a-nav" href="#" onclick="window.location.href='profile.php'">Profile</a>
                </div>
                <!-- Side navbar -->
                <!-- Use any element to open the sidenav -->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Navbar Extra Start -->
                <button class="masuk" id="msk" onclick="return logout()">Selesai</button>
                <!-- Navbar Extra End -->
            </nav>
        </section>
    </article>
    <!-- Navbar End -->

    <!-- Belajar start -->
    <article class="contanier" id="belajar">
        <section class="container2">
            <div class="judul-Course">
                <h2 class="judul" id="course">Prinsip Kedekatan Spasial Dalam Dalam Praktik Desain <br> Atau Pembuatan Konten Visual</h2>
            </div>
            <div class="ppt">
                <iframe loading="lazy" class="ppt1" src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxcFFNXGw&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>   
            </div>
            <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxZxT3eS0&#x2F;view?utm_content=DAFxZxT3eS0&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a>
        </section>
        <section class="button-kuis">
                <button class="kuis" onclick="window.location.href='kuis.php'" id="kuis">Kuis</button>
        </section>
    </article>
    <!-- Belajar end -->

    <script>
        // navbar side
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "280px";
            document.getElementById("main").style.marginLeft = "280px";
            document.getElementById("nav").style.marginLeft = "280px";
            // document.getElementById("coourse").style.transform = "translateX(5%)";
            document.getElementById("course").style.transform = "translateX(5%)";
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