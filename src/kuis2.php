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
                                <h4>Quiz Bab 1</h4><span>(1 of 5)</span>
                            </div>
                        </div>
                        <div class="question bg-white p-3 border-bottom">
                            <?php
                            include('php/koneksi.php');
                            $query = mysqli_query($koneksi, 'select * from quiz2');
                            $row = mysqli_fetch_array($query);
                            ?>
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text-danger" id="id"><?php echo $row['id']; ?>.</h3>
                                <h5 class="mt-1 ml-2" id="question"><?php echo $row['question_text']  ?></h5>
                            </div>
                            <div class="ans ml-2">
                                <input type="radio" name="answer" value="A" data-correct="<?php echo $correct_option; ?>"> <span> A. <?php echo $row['option1'] ?></span>
                            </div>
                            <div class="ans ml-2">
                                <input type="radio" name="answer" value="B" data-correct="<?php echo $correct_option; ?>"> <span> B. <?php echo $row['option2'] ?></span>
                            </div>
                            <div class="ans ml-2">
                                <input type="radio" name="answer" value="C" data-correct="<?php echo $correct_option; ?>"> <span> C. <?php echo $row['option3'] ?></span>
                            </div>
                            <div class="ans ml-2">
                                <input type="radio" name="answer" value="D" data-correct="<?php echo $correct_option; ?>"> <span> D. <?php echo $row['option4'] ?></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button" id="previous"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button" id="next">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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


    <!-- Your HTML structure -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentQuestionId = <?php echo $row['id']; ?>;
            var userScore = 0;

            function loadQuestion(questionId) {
                $.ajax({
                    url: 'php/load_kuis.php',
                    method: 'GET',
                    data: {
                        id: questionId
                    },
                    success: function(response) {
                        var data = JSON.parse(response);

                        // Update the HTML with the new question data
                        $('#id').text(data.id + '.');
                        $('#question').text(data.question_text);

                        // Uncheck all radio buttons
                        $('input[name="answer"]').prop('checked', false);

                        // Set the values for radio buttons
                        $('input[name="answer"][value="A"]').next().text('A. ' + data.option1).data('correct', data.correct_answer);
                        $('input[name="answer"][value="B"]').next().text('B. ' + data.option2).data('correct', data.correct_answer);
                        $('input[name="answer"][value="C"]').next().text('C. ' + data.option3).data('correct', data.correct_answer);
                        $('input[name="answer"][value="D"]').next().text('D. ' + data.option4).data('correct', data.correct_answer);
                    }
                });
            }

            // Event handler for the "Next" button
            $('#next').on('click', function() {
                // Get the selected answer
                var selectedAnswer = $('input[name="answer"]:checked').val();
                // Get the correct answer
                var correctAnswer = $('input[name="answer"]:checked').data('correct');

                // Check if the selected answer is correct
                if (selectedAnswer === correctAnswer) {
                    userScore++;
                }

                // Continue to the next question
                currentQuestionId++;
                loadQuestion(currentQuestionId);
            });

            // Event handler for the "Previous" button (if needed)
            $('#previous').on('click', function() {
                if (currentQuestionId > 1) {
                    currentQuestionId--;
                    loadQuestion(currentQuestionId);
                }
            });
        });
    </script>

</body>

</html>