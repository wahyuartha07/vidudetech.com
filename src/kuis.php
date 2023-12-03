<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEDUTECH - Quiz</title>
    <link rel="icon" type="image/x-icon" href="../asset/img/logo-aja.png">
    <link href="../asset/style/kuis.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../asset/style/kuis.css" rel="stylesheet">


</head>

<body id="main">
    <!-- Navbar start -->
    <article>
        <section>
            <nav class="nv">
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
    <article>
        <section class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10 col-lg-10">
                        <div class="border">
                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                    <h4>Quiz Bab 1</h4><span>(5 of 20)</span>
                                </div>
                            </div>
                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row align-items-center question-title">
                                    <h3 class="text-danger">Q.</h3>
                                    <h5 class="mt-1 ml-2">Which of the following country has largest population?</h5>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>Brazil</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="Germany" value="Germany"> <span>Germany</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="Indonesia" value="Indonesia"> <span>Indonesia</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="Russia" value="Russia"> <span>Russia</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                        </div>
                    </div>
                </div>
        </section>
    </article>
</body>
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
</html>