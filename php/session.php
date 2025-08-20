<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:loginPage.php?pesan=belum_login");
}
