<?php

$koneksi = mysqli_connect("localhost", "root", "", "sertifikasi_jwd");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../pages/landingPage.php");
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
