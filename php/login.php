<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
  // menangkap data yang dikirim dari form
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST['password']);

  $query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;

    if (password_verify($password, $data['password'])) {
      // USER BIASA
      if ($data['role'] == '1') {
        header("Location: ../pages/landingPage.php");
        exit;
      }
      // USER ADMIN
      else {
        header("Location: ../pages/admin.php");
        exit;
      }
    }
  }
  // GAGAL
  else {
    header("Location: ../pages/loginPage.php?error=1");
    exit;
  }
}
