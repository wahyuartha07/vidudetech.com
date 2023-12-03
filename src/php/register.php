<?php

include 'koneksi.php';
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];

if (isset($_POST['signup'])) {
    $insert = "INSERT INTO users (nama, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($koneksi, $insert);

    if ($result) {
        echo "<script>alert('Berhasil Membuat Akun!')</script>";
        header("location:../sign-in.php");
    } else {
        echo "<script>alert('Tidak berhasil membuat akun!')</script>";
    }
}
