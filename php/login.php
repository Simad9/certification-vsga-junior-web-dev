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
    if (password_verify($password, $data['password'])) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['login'] = true;
      header("Location: ../pages/landingPage.php");
      exit;
    }
  }
  header("Location: ../pages/loginPage.php?error=1");
  exit;
}
