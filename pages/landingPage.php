<?php
session_start();
include '../components/component.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include '../components/head.php'; ?>
  <title>DigiNova Tech</title>
</head>

<body class="bg-background1 font-sora text-text antialiased">
  <main class="px-6 md:px-[120px] pt-[20px] flex flex-col gap-[50px] pb-[50px]">

    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>

    <!-- HEADER -->
    <section class="relative w-full overflow-hidden rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6] px-8 py-16 md:px-[120px] md:py-[80px] text-center">
      <!-- dekorasi background -->
      <div class="pointer-events-none absolute -top-24 -left-24 size-72 rounded-full bg-biru/10 blur-3xl"></div>
      <div class="pointer-events-none absolute -bottom-28 -right-20 size-80 rounded-full bg-oren/25 blur-3xl"></div>

      <div class="relative flex flex-col items-center gap-6 text-center">
        <!-- BADGE -->
        <span class="inline-flex items-center gap-2 rounded-full bg-white/80 px-5 py-2 font-manrope text-[13px] font-semibold tracking-wide text-biru ring-1 ring-oren/30 backdrop-blur">
          <span class="text-oren">//</span> Mitra Digital Terpercaya Sejak 2021
        </span>

        <h1 class="font-manrope text-[40px] md:text-[56px] font-extrabold leading-tight text-text">
          DigiNova
          <span class="bg-gradient-to-r from-oren to-biru bg-clip-text text-transparent">Tech</span>
        </h1>

        <p class="font-sora text-black text-[22px] md:text-[26px] font-medium">
          "Transforming Ideas Into Digital Experiences"
        </p>
        <p class="font-sora text-abu text-[16px] md:text-[18px] max-w-[720px] leading-relaxed">
          Teknologi bukan sekadar kode, tapi sarana untuk tumbuh di era digital. Company profile ini menunjukkan siapa kami dan bagaimana kami siap menjadi mitra digital terpercaya Anda.
        </p>

        <!-- BUTTON -->
        <div class="mt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#" class="group flex items-center justify-center gap-3 rounded-full bg-oren px-8 py-3.5 font-manrope text-[14px] font-semibold text-white transition hover:bg-orange-500 hover:shadow-xl hover:shadow-oren/30">
            Diskusi Sekarang
            <img src="../src/images/panah.png" alt="" class="size-[24px] transition-transform group-hover:translate-x-1">
          </a>
          <a href="#service" class="flex items-center justify-center gap-2 rounded-full bg-white px-8 py-3.5 font-manrope text-[14px] font-semibold text-text ring-1 ring-black/10 transition hover:ring-oren hover:text-oren">
            Lihat Layanan
          </a>
        </div>
      </div>
    </section>

    <!-- KLIEN -->
    <section class="flex flex-col items-center gap-8">
      <div class="flex flex-col items-center text-center gap-2">
        <h2 class="font-manrope text-[24px] md:text-[28px] font-bold text-text">Daftar Klien Kami</h2>
        <p class="text-abu text-[16px] md:text-[18px]">Kepercayaan mereka adalah energi bagi kami untuk terus berkembang.</p>
      </div>
      <div class="flex w-full flex-wrap items-center justify-center gap-x-12 gap-y-6 rounded-3xl bg-white px-8 py-8 shadow-sm ring-1 ring-black/5">
        <img src="../src/images/image 6.png" alt="" class="opacity-70 grayscale transition hover:opacity-100 hover:grayscale-0">
        <img src="../src/images/image 7.png" alt="" class="opacity-70 grayscale transition hover:opacity-100 hover:grayscale-0">
        <img src="../src/images/image 8.png" alt="" class="opacity-70 grayscale transition hover:opacity-100 hover:grayscale-0">
        <img src="../src/images/image 9.png" alt="" class="opacity-70 grayscale transition hover:opacity-100 hover:grayscale-0">
        <img src="../src/images/image 10.png" alt="" class="opacity-70 grayscale transition hover:opacity-100 hover:grayscale-0">
      </div>
    </section>

    <!-- PROFILE -->
    <section id="about" class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 w-full rounded-[35px] bg-gradient-to-t from-[#fff] to-[#ffd9a6] px-8 md:px-[100px] py-14 md:py-[70px]">
      <!-- GAMBAR -->
      <div class="relative w-full lg:w-1/2 shrink-0">
        <div class="absolute -top-6 -left-6 hidden md:block size-40 rounded-3xl bg-oren/20"></div>
        <div class="absolute -bottom-8 -right-6 hidden md:block size-24 rounded-full bg-biru/15"></div>
        <img src="../src/images/Bento Layout.png" alt="" class="relative w-full rounded-[30px] object-cover shadow-xl">
      </div>

      <!-- TEKS -->
      <div class="w-full lg:w-1/2 flex flex-col gap-8">
        <!-- PROFILE PT -->
        <div class="text-text">
          <h3 class="font-manrope text-[18px] font-bold tracking-wide text-oren"><span class="text-biru">//</span> About the Company</h3>
          <h2 class="mt-2 font-manrope text-[30px] md:text-[34px] font-extrabold">DigiNova Tech</h2>
          <p class="mt-4 font-sora text-[16px] leading-relaxed text-abu">
            Didirikan pada tahun 2021, DigiNova Tech bergerak di bidang pengembangan web dan solusi digital. Kami membantu UMKM, startup, hingga organisasi modern untuk memiliki identitas digital yang kuat melalui website, aplikasi, dan layanan kreatif. Dengan tim muda yang penuh semangat, kami selalu berfokus pada inovasi, kualitas, dan kepuasan klien.
          </p>
        </div>

        <!-- VISI & MISI -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-black/5">
            <div class="flex items-center gap-3">
              <span class="inline-flex size-9 items-center justify-center rounded-full bg-biru/10 font-manrope text-[15px] font-extrabold text-biru">V</span>
              <h3 class="font-manrope text-[18px] font-bold text-text">VISI</h3>
            </div>
            <p class="mt-3 font-sora text-[14px] leading-relaxed text-abu">
              Menjadi perusahaan digital yang membantu ribuan bisnis tumbuh dan dikenal luas melalui teknologi.
            </p>
          </div>
          <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-black/5">
            <div class="flex items-center gap-3">
              <span class="inline-flex size-9 items-center justify-center rounded-full bg-oren/15 font-manrope text-[15px] font-extrabold text-oren">M</span>
              <h3 class="font-manrope text-[18px] font-bold text-text">MISI</h3>
            </div>
            <ul class="mt-3 flex flex-col gap-2 font-sora text-[14px] leading-relaxed text-abu">
              <li class="flex gap-2"><span class="text-oren">&#10003;</span> Menciptakan produk digital yang inovatif, fungsional, dan user-friendly.</li>
              <li class="flex gap-2"><span class="text-oren">&#10003;</span> Memberikan layanan yang transparan dan profesional.</li>
              <li class="flex gap-2"><span class="text-oren">&#10003;</span> Mendukung transformasi digital bagi bisnis skala kecil hingga besar.</li>
            </ul>
          </div>
        </div>

        <!-- STAT -->
        <div class="grid grid-cols-3 gap-4">
          <div class="flex flex-col items-center gap-1 rounded-2xl bg-white px-4 py-5 text-center shadow-sm ring-1 ring-black/5">
            <h3 class="font-manrope text-[30px] md:text-[34px] font-extrabold text-oren">50+</h3>
            <p class="font-sora text-[13px] md:text-[14px] text-abu">Projects Clients</p>
          </div>
          <div class="flex flex-col items-center gap-1 rounded-2xl bg-white px-4 py-5 text-center shadow-sm ring-1 ring-black/5">
            <h3 class="font-manrope text-[30px] md:text-[34px] font-extrabold text-oren">100+</h3>
            <p class="font-sora text-[13px] md:text-[14px] text-abu">Happy Clients</p>
          </div>
          <div class="flex flex-col items-center gap-1 rounded-2xl bg-white px-4 py-5 text-center shadow-sm ring-1 ring-black/5">
            <h3 class="font-manrope text-[30px] md:text-[34px] font-extrabold text-oren">99%</h3>
            <p class="font-sora text-[13px] md:text-[14px] text-abu">Clients Satisfied</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICE -->
    <section id="service" class="flex flex-col items-center gap-8">
      <div class="flex flex-col items-center text-center gap-2">
        <h3 class="font-manrope text-[18px] font-bold tracking-wide text-oren"><span class="text-biru">//</span> What We Offer</h3>
        <h2 class="font-manrope text-[24px] md:text-[28px] font-bold text-text">Jasa Kami</h2>
        <p class="text-abu text-[16px] md:text-[18px]">Beberapa jasa yang bisa kamu pilih untuk produk yang akan kamu buat.</p>
      </div>

      <div class="grid w-full grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        <!-- WD -->
        <div class="group flex flex-col gap-5 rounded-3xl bg-white p-8 shadow-sm ring-1 ring-black/5 transition hover:-translate-y-1.5 hover:shadow-xl hover:shadow-oren/10">
          <span class="inline-flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-oren/20 to-biru/10 ring-1 ring-oren/20 transition group-hover:bg-gradient-to-br group-hover:from-oren group-hover:to-biru">
            <img src="../src/images/logo web.svg" alt="" class="size-[32px]">
          </span>
          <div class="flex flex-col gap-2">
            <h3 class="font-manrope text-[20px] font-bold text-text">Website Development</h3>
            <p class="font-sora text-[15px] leading-relaxed text-abu">Website development adalah layanan yang digunakan untuk membuat dan mengembangkan situs web.</p>
          </div>
          <a href="#" class="mt-auto flex items-center justify-center gap-2 rounded-full bg-background1 px-6 py-3 font-manrope text-[14px] font-semibold text-text ring-1 ring-black/5 transition hover:bg-oren hover:text-white">Saya Tertarik Ini</a>
        </div>
        <!-- MD -->
        <div class="group flex flex-col gap-5 rounded-3xl bg-white p-8 shadow-sm ring-1 ring-black/5 transition hover:-translate-y-1.5 hover:shadow-xl hover:shadow-oren/10">
          <span class="inline-flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-oren/20 to-biru/10 ring-1 ring-oren/20 transition group-hover:bg-gradient-to-br group-hover:from-oren group-hover:to-biru">
            <img src="../src/images/logo mobile.svg" alt="" class="size-[32px]">
          </span>
          <div class="flex flex-col gap-2">
            <h3 class="font-manrope text-[20px] font-bold text-text">Mobile App Development</h3>
            <p class="font-sora text-[15px] leading-relaxed text-abu">Mobile app development adalah layanan yang digunakan untuk membuat dan mengembangkan aplikasi mobile.</p>
          </div>
          <a href="#" class="mt-auto flex items-center justify-center gap-2 rounded-full bg-background1 px-6 py-3 font-manrope text-[14px] font-semibold text-text ring-1 ring-black/5 transition hover:bg-oren hover:text-white">Saya Tertarik Ini</a>
        </div>
        <!-- Logo D -->
        <div class="group flex flex-col gap-5 rounded-3xl bg-white p-8 shadow-sm ring-1 ring-black/5 transition hover:-translate-y-1.5 hover:shadow-xl hover:shadow-oren/10">
          <span class="inline-flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-oren/20 to-biru/10 ring-1 ring-oren/20 transition group-hover:bg-gradient-to-br group-hover:from-oren group-hover:to-biru">
            <img src="../src/images/logo logo.svg" alt="" class="size-[32px]">
          </span>
          <div class="flex flex-col gap-2">
            <h3 class="font-manrope text-[20px] font-bold text-text">Logo Development</h3>
            <p class="font-sora text-[15px] leading-relaxed text-abu">Logo development adalah layanan yang digunakan untuk membuat dan mengembangkan logo.</p>
          </div>
          <a href="#" class="mt-auto flex items-center justify-center gap-2 rounded-full bg-background1 px-6 py-3 font-manrope text-[14px] font-semibold text-text ring-1 ring-black/5 transition hover:bg-oren hover:text-white">Saya Tertarik Ini</a>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="relative w-full overflow-hidden rounded-[35px] bg-oren px-8 py-14 md:px-[100px] md:py-[70px]">
      <div class="pointer-events-none absolute -top-16 -right-10 size-56 rounded-full bg-white/15 blur-2xl"></div>
      <div class="pointer-events-none absolute -bottom-20 -left-10 size-64 rounded-full bg-biru/10 blur-2xl"></div>

      <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="text-center md:text-left text-background1">
          <h2 class="font-manrope text-[30px] md:text-[38px] font-extrabold leading-snug">
            Waktunya untuk mencapai<br class="hidden md:block">
            pertumbuhan berkelanjutan Anda.
          </h2>
        </div>
        <!-- BUTTON -->
        <a href="#" class="group flex shrink-0 items-center justify-center gap-3 rounded-full bg-white px-9 py-4 font-manrope text-[14px] font-bold text-oren transition hover:bg-biru hover:text-white hover:shadow-xl hover:shadow-biru/30">
          Diskusi Sekarang
          <img src="../src/images/panah.png" alt="" class="size-[24px] transition-transform group-hover:translate-x-1">
        </a>
      </div>
    </section>

  </main>

  <?php include '../components/footer.php'; ?>
</body>

</html>
