<?php
session_start();
include '../components/component.php';
include '../php/koneksi.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../pages/loginPage.php");
  exit;
}

// Fetch
$id = $_GET['id_event'] ?? 0;
$query = "SELECT * FROM event WHERE id_event = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include '../components/head.php'; ?>
  <title><?= $data ? $data['title'] . ' - DigiNova Tech' : 'Event - DigiNova Tech' ?></title>
</head>

<body class="bg-background1 font-sora text-text antialiased">
  <main class="px-6 md:px-[120px] pt-[20px] pb-[60px] flex flex-col gap-8">

    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>

    <a href="eventPage.php" class="inline-flex items-center gap-1.5 font-sora text-[13px] text-abu transition hover:text-oren">&larr; Kembali ke Event</a>

    <?php if ($data) : ?>
      <!-- ISI EVENT -->
      <article class="mx-auto w-full max-w-[860px] rounded-[30px] bg-white p-8 shadow-sm ring-1 ring-black/5 md:p-12">
        <h1 class="font-manrope text-[28px] md:text-[34px] font-extrabold leading-snug text-text"><?= $data['title'] ?></h1>

        <div class="mt-6 overflow-hidden rounded-2xl">
          <img src="../src/uploads/<?= $data['image'] ?>" alt="<?= $data['title'] ?>" class="max-h-[420px] w-full object-cover">
        </div>

        <p class="mt-6 font-sora text-[16px] leading-8 text-abu text-justify"><?= nl2br(htmlspecialchars($data['desc'])) ?></p>

        <a href="eventPage.php" class="mt-10 inline-flex items-center gap-2 rounded-full bg-background1 px-6 py-3 font-manrope text-[14px] font-semibold text-text ring-1 ring-black/5 transition hover:bg-oren hover:text-white">&larr; Event Lainnya</a>
      </article>
    <?php else : ?>
      <!-- TIDAK ADA DATA -->
      <div class="mx-auto flex w-full max-w-[600px] flex-col items-center gap-4 rounded-[30px] bg-white py-20 text-center shadow-sm ring-1 ring-black/5">
        <h1 class="font-manrope text-[24px] font-bold text-text">Tidak ada Data</h1>
        <p class="font-sora text-[14px] text-abu">Event yang kamu cari tidak ditemukan.</p>
        <a href="eventPage.php" class="rounded-full bg-oren px-6 py-3 font-manrope text-[14px] font-semibold text-white transition hover:bg-orange-500">Lihat Semua Event</a>
      </div>
    <?php endif; ?>

  </main>

  <?php include '../components/footer.php'; ?>
</body>

</html>
