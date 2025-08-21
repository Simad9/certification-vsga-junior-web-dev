<?php
session_start();
include '../components/component.php';
include '../php/koneksi.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../pages/loginPage.php");
  exit;
}

// Fetch
$id = $_GET['id_blog'];

$query = "SELECT * FROM blogs WHERE 1d = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>Event Detail</title>
</head>

<body>
  <main class="px-[120px] pt-[20px] flex flex-col gap-[50px] pb-[20px]">

    <!-- NAVBAR LOGIN / LOGOUT -->
     <?php include "../components/navbar.php" ?>

    <?php
    if (isset($data)) :
    ?>
      <!-- KLIEN -->
      <div class="flex flex-col justify-center items-center gap-3 w-full">
        <h1 class='mt-2 text-manrope text-text text-[24px] text-center text-bold mb-3'><?= $data['title'] ?></h1>
        <div class='flex flex-col w-full justify-center items-center'>
          <img src='../src/images/<?= $data['image'] ?>' class='w-6/12 h-3/4 object-cover rounded-lg'>
          <p class='text-sore text-[18px] text-abu text-justify mt-3'><?= $data['description'] ?></p>
        </div>
      </div>
    <?php
    elseif (!isset($data)) :
    ?>
      <!-- KLIEN -->
      <div class="flex flex-col justify-center items-center gap-3 w-full">
        <h1 class='mt-2 text-manrope text-text text-[24px] text-center text-bold mb-3'>Tidak ada Data</h1>

      </div>
    <?php
    endif
    ?>

  </main>

</body>

</html>