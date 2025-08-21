<?php
include '../php/session.php';
include '../components/component.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../pages/loginPage.php");
  exit;
}

if (isset($_GET['error'])) {
  if ($_GET['error'] == 1) {
    echo '<script>alert("something error")</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>Dashboard Admin</title>
</head>

<body>
  <main class="px-[150px] pt-[20px] py-[50px] flex flex-col gap-3">
    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>


    <h1 class="text-text text-[36px] font-bold">Dashboard Admin</h1>
    <p class="text-abu text-[18px]">Halaman ini hanya untuk admin.</p>

    <!-- Button Lihat -->
    <div class="my-[20px]">
      <a href="eventPage.php" class="text-white bg-oren rounded-full px-[20px] py-[10px] text-center">Melihat Seluruh Event</a>
      <a href="admin.php" class="text-white bg-oren rounded-full px-[20px] py-[10px] text-center">Tambah Event</a>
      <a href="../php/logout.php" class="text-oren bg-white border-2 border-oren rounded-full px-[20px] py-[10px] text-center">Logout</a>
    </div>

    <!-- Form -->
    <section class="mt-[50px]">
      <h2 class="text-text text-[24px] font-semibold mb-3">Tulis Blog Baru</h2>
      <form action="../php/tambahBlog.php" method="post" enctype="multipart/form-data">
        <div class="flex flex-col gap-5">
          <label for="image" class="text-text text-[18px]">Gambar</label>
          <input type="file" name="foto" id="image" class="px-3 py-2 rounded-md border-2 border-gray-300" required accept=".png, .jpg, .jpeg">

          <label for="title" class="text-text text-[18px]">Title</label>
          <input type="text" name="title" id="title" class="px-3 py-2 rounded-md border-2 border-gray-300" placeholder="Title" required>

          <label for="deskripsi" class="text-text text-[18px]">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" class="px-3 py-2 rounded-md border-2 border-gray-300" placeholder="Deskripsi" required></textarea>

          <button type="submit" name="submit" class="bg-oren text-white px-5 py-2 rounded-md">Upload</button>
        </div>
      </form>
    </section>
  </main>

  <?php include '../components/footer.php'; ?>
</body>

</html>