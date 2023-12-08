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
    <title>VIDEDUTECH - Skor Anda</title>
    <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
    <link rel="stylesheet" href="assets/style/side-nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../asset/style/skor.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../asset/img/logo-navbar2.png" alt="" width="120" height="50" class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5 btn-nav" aria-current="page" href="#about">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5 btn-nav" aria-current="page" href="#" onclick="window.location.href='profile.php'">Profile</a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-light fs-5 btn-nav" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Belajar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="window.location.href='sign-in.php'">Bab1</a></li>
                            <li><a class="dropdown-item" href="#" onclick="window.location.href='sign-in.php'">Bab2</a></li>
                            <li><a class="dropdown-item" href="#" onclick="window.location.href='sign-in.php'">Bab3</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex me-5">
                    <button class="btn btn-custom text-light fw-bold" onclick="window.location.href='belajar.php#coourse'">
                        Bab Selanjutnya
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <article class="container">
        <section class="table">
            <div class="judul">
                <h1>SKOR ANDA</h1>
            </div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Bab</th>
                        <th scope="col">Point</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Wahyu Artha</th>
                        <td>1</td>
                        <td>80</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <th scope="row">Wahyu Artha</th>
                        <td>2</td>
                        <td>90</td>
                        <td>Memuaskan</td>
                    </tr>
                    <tr>
                        <th scope="row">Wahyu Artha</th>
                        <td>3</td>
                        <td>100</td>
                        <td>Sangat Memuaskan</td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
    </article>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function toggleDarkMode() {
        var body = document.getElementsByTagName("body")[0];
        body.classList.toggle("dark-mode");
    }
</script>

</html>