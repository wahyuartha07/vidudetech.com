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
    <meta charset="utf-8">
    <title>VIDEDUTECH - Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
    <link href="../asset/style/style-profile.css" rel="stylesheet">
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
                    <a class="a-nav" href="./belajar.php#container-about"">Belajar</a>
                    <a class="a-nav" href="#" onclick="window.location.href='profile.php'">Profile</a>
                </div>
                <!-- Side navbar -->
                <!-- Use any element to open the sidenav -->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Navbar Extra Start -->
                <button class="masuk" id="msk" onclick="return logout()">Logout</button>

                <!-- Navbar Extra End -->
            </nav>
        </section>
    </article>
    <!-- Navbar End -->
    <div class="container-xl px-4 mt-4">

        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="/src/profile.php" target="__blank">Profile</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">

                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">

                        <img class="img-account-profile rounded-circle mb-2" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">

                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">

                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Organization name</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Location</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="+62 ">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="button">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function logout() {
            var userConfirmed = confirm("Apakah anda yakin ingin keluar?");
            if (userConfirmed) {
                window.location.href = 'php/logout.php';
            } else {
                return false;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // navbar side
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "280px";
            document.getElementById("main").style.marginLeft = "280px";
            document.getElementById("nav").style.marginLeft = "280px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("nav").style.marginLeft = "0";
        }
    </script>

</body>

</html>