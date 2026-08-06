<?php
include '../php/session.php';
include '../components/component.php';
include '../php/koneksi.php';

$query = "SELECT * FROM event ORDER BY id_event DESC";
$result = mysqli_query($koneksi, $query);
$totalEvent = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include '../components/head.php'; ?>
  <title>Events - DigiNova Tech</title>
</head>

<body class="bg-background1 font-sora text-text antialiased">
  <main class="px-6 md:px-[120px] pt-[20px] pb-[60px] flex flex-col gap-[50px]">

    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>

    <!-- HEADER -->
    <section class="relative w-full overflow-hidden rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6] px-8 py-16 md:py-[70px] text-center">
      <div class="pointer-events-none absolute -top-24 -left-24 size-64 rounded-full bg-biru/10 blur-3xl"></div>
      <div class="pointer-events-none absolute -bottom-28 -right-20 size-72 rounded-full bg-oren/25 blur-3xl"></div>

      <div class="relative flex flex-col items-center gap-4">
        <span class="inline-flex items-center gap-2 rounded-full bg-white/80 px-5 py-2 font-manrope text-[13px] font-semibold tracking-wide text-biru ring-1 ring-oren/30 backdrop-blur">
          <span class="text-oren">//</span> Our Events
        </span>
        <h1 class="font-manrope text-[34px] md:text-[44px] font-extrabold text-text">
          Event <span class="bg-gradient-to-r from-oren to-biru bg-clip-text text-transparent">DigiNova Tech</span>
        </h1>
        <p class="font-sora text-[16px] md:text-[18px] text-abu max-w-[560px]">Acara-acara kami yang telah dilakukan bersama-sama.</p>
      </div>
    </section>

    <!-- DAFTAR EVENT -->
    <section class="flex flex-col gap-6">
      <div class="flex items-center justify-between">
        <h2 class="font-manrope text-[24px] font-bold text-text">Semua Event</h2>
        <span class="font-sora text-[14px] text-abu"><?= $totalEvent ?> event</span>
      </div>

      <?php if ($totalEvent > 0) : ?>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <article class="group flex flex-col overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-black/5 transition hover:-translate-y-1.5 hover:shadow-xl hover:shadow-oren/10">
              <div class="overflow-hidden">
                <img src='../src/uploads/<?= $data['image'] ?>' alt='<?= $data['title'] ?>' class='h-52 w-full object-cover transition duration-300 group-hover:scale-105'>
              </div>
              <div class="flex flex-col gap-3 p-6">
                <h2 class="font-manrope text-[20px] font-bold text-text"><?= $data['title'] ?></h2>
                <p class="font-sora text-[14px] leading-relaxed text-abu line-clamp-3">
                  <?= substr($data['desc'], 0, 200) . (strlen($data['desc']) > 200 ? "..." : "") ?>
                </p>
                <div class="mt-auto flex flex-col gap-2 pt-2">
                  <a href="eventDetail.php?id_event=<?= $data['id_event'] ?>" class="flex items-center justify-center gap-2 rounded-full bg-oren px-5 py-3 font-manrope text-[14px] font-semibold text-white transition hover:bg-orange-500 hover:shadow-lg hover:shadow-oren/30">Lihat Detail</a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <div class="flex flex-col items-center gap-4 rounded-[30px] bg-white py-20 text-center shadow-sm ring-1 ring-black/5">
          <h3 class="font-manrope text-[24px] font-bold text-text">Belum ada event</h3>
          <p class="font-sora text-[14px] text-abu">Event akan muncul di sini setelah admin mempublikasikannya.</p>
        </div>
      <?php endif; ?>
    </section>

  </main>

  <?php include '../components/footer.php'; ?>
</body>

</html>
