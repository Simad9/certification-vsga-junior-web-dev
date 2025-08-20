<?php
session_start(); // mengaktifkan session
session_destroy(); // menghapus semua session

$_SESSION['login'] = false;

// mengalihkan halaman sambil mengirim pesan logout
header("location:../pages/loginPage.php?pesan=logout");
