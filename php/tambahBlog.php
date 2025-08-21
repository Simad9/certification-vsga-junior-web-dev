<?php 
session_start();
include '../php/koneksi.php';

// VAR
$title = $_POST['title'];
$desc = $_POST['deskripsi'];

// ----- FOTO -------
$namaFile = $_FILES['foto']['name'];
$ukuranFile = $_FILES['foto']['size'];
$error = $_FILES['foto']['error'];
$tmpNama = $_FILES['foto']['tmp_name'];

// cek apakah tidak ada gambar yang diupload
if ($error === 4) {
  echo "<script> alert('pilih gambar terlebih dahulu!') </script>";
  return false;
}

// cek apakah yang diupload adalah gambar
$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
  echo "<script> alert('yang anda upload bukan gambar!') </script>";
  return false;
}

// cek jika ukurannya terlalu besar
if ($ukuranFile > 5000000) { //ukuran 5mb
  echo "<script> alert('ukuran terlalu besar!') </script>";
  return false;
}

// lolos pengecekan, gambar siap diupload
// generate nama gambar baru -> kalo namanya sama kan nanti gambarnya sama pas di output
$namaFileBaru = uniqid(); //generate nama baru
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpNama, "../src/uploads/" . $namaFileBaru);

// Bagian masuk ke dbnya
$query = "INSERT INTO `blogs` (`1d`, `title`, `description`, `image`) VALUES (NULL, '$title', '$desc', '$namaFileBaru')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
  header("location:../pages/blogsPage.php");
  exit;
} else {
  echo "<script>alert('Gagal Update Profile')</script>";
}