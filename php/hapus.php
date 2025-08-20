<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if (mysqli_affected_rows($koneksi) > 0) {
  header('location:../pages/admin.php');
} else {
  header('location:../pages/admin.php?error=1');
}

