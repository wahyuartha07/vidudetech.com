<?php

include 'koneksi.php';
$username = $_POST['name'];
$password = $_POST['pass'];

if (isset($_POST['signin'])) {
    $query = mysqli_query($koneksi, "SELECT nama, password FROM users WHERE nama = '$username' AND password = '$password'");
    if (mysqli_num_rows($query) > 0) {
        session_start();
        $_SESSION['name'] = $username;
        echo "<script>alert('Berhasil login!')</script>";
        header("location:../belajar.php");
    } else {
        echo "<script>alert('Tidak berhasil login!')</script>";
    }
} else {
    echo "<script>alert('Tidak berhasil login!')</script>";
}
