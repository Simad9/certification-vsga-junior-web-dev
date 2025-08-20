<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['re-password'];

  // cek username sudah ada atau belum
  $query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username sudah terdaftar!');</script>";
    header("Location: ../pages/signupPage.php?error=2");
  }

  if ($password != $repassword) {
    echo "<script>alert('Password tidak sama!');</script>";
    header("Location: ../pages/signupPage.php?error=1");
  } else {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: ../pages/loginPage.php");
    } else {
      echo "<script>alert('Username atau Password salah!');</script>";
      header("Location: ../pages/signupPage.php?error=1");
    }
  }
}
