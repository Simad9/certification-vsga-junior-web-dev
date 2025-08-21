<?php
include "koneksi.php";

$id = $_GET['id_blog'];

$query = "DELETE FROM blogs WHERE 1d='$id'";
$result = mysqli_query($koneksi, $query);

if (mysqli_affected_rows($koneksi) > 0) {
  header('location:../pages/blogsPage.php');
} else {
  header('location:../pages/blogsPage.php?error=1');
}

