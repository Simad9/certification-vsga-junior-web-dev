<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>DigiNova Tech</title>
</head>

<body>
  <main class="px-[120px] pt-[20px] flex flex-col gap-[50px] pb-[20px]">
    <?php include '../components/navbar.php'; ?>

    <!-- HEADER -->
    <div class="flex justify-center items-center px-[120px] h-[480px] rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6]">
      <div class="flex flex-col text-text text-center gap-[20px]">
        <h1 class="text-manrope text-[36px] font-bold">DigiNova Tech</h1>
        <p class="text-sora text-black text-[24px]">"Transforming Ideas Into Digital Experiences"</p>
        <p class="text-sora text-abu text-[18px]">Teknologi bukan sekadar kode, tapi sarana untuk tumbuh di era digital. Company profile ini menunjukkan siapa kami dan bagaimana kami siap menjadi mitra digital terpercaya Anda</p>
        <!-- BUTTON -->
        <a href="#">
          <div class="flex justify-center items-center gap-3 px-[20px] py-[10px] rounded-full bg-oren text-white w-full">
            <p class="text-manrope text-[14px] text-white">Diskusi Sekarang </p>
            <img src="../src/images/panah.png" alt="" class="size-[24px]">
          </div>
        </a>
      </div>
    </div>

    <!-- KLIEN -->
    <div class="flex flex-col justify-center items-center gap-3">
      <div class="flex flex-col justify-center items-center">
        <h1 class=" text-text text-[24px] text-semibold">Daftar Klien Kami</h1>
        <p class="text-abu text-[18px]">Kepercayaan mereka adalah energi bagi kami untuk terus berkembang.</p>
      </div>
      <div class="flex gap-10">
        <img src="../src/images/image 6.png" alt="">
        <img src="../src/images/image 7.png" alt="">
        <img src="../src/images/image 8.png" alt="">
        <img src="../src/images/image 9.png" alt="">
        <img src="../src/images/image 10.png" alt="">
      </div>
    </div>

    <!-- PROFILE -->
    <div class="flex justify-center items-center px-[180px] py-[50px] rounded-[35px] bg-gradient-to-t from-[#fff] to-[#ffd9a6] gap-5 w-full">
      <div class="w-full">
        <img src="../src/images/Bento Layout.png" alt="" class="h-[641px] object-cover">
      </div>
      <div class="w-full flex flex-col gap-[20px]">
        <!-- PROFILE PT -->
        <div class="text-text">
          <h2 class="text-oren text-manrope text-[18px]"><span class="text-biru">//</span> About the Company</h2>
          <h1 class="text-manrope text-[34px] text-bold">DigiNova Tech</h1>
          <p class="text-sora text-[16px]">
            Didirikan pada tahun 2021, DigiNova Tech bergerak di bidang pengembangan web dan solusi digital. Kami membantu UMKM, startup, hingga organisasi modern untuk memiliki identitas digital yang kuat melalui website, aplikasi, dan layanan kreatif. Dengan tim muda yang penuh semangat, kami selalu berfokus pada inovasi, kualitas, dan kepuasan klien.
          </p>
        </div>
        <!-- VISI & MISI -->
        <div>
          <h2 class="text-oren text-manrope text-[18px]"><span class="text-biru">//</span> About the Company</h2>
          <h1 class="text-text text-[24px]">VISI</h1>
          <p class="text-sora text-[16px]">
            Menjadi perusahaan digital yang membantu ribuan bisnis tumbuh dan dikenal luas melalui teknologi.
          </p>
          <h1 class="text-text text-[24px]">MISI</h1>
          <ul class="text-sora text-[16px]">
            <li>• Menciptakan produk digital yang inovatif, fungsional, dan user-friendly.</li>
            <li>• Memberikan layanan yang transparan dan profesional.</li>
            <li>• Mendukung transformasi digital bagi bisnis skala kecil hingga besar.</li>
          </ul>
        </div>
        <!-- STAT -->
        <div class="flex justify-between">
          <div>
            <h3 class="text-monrope text-[34px] text-bold text-oren">50+</h3>
            <p class="text-sora text-[18px] text-abu">Projects Clients</p>
          </div>
          <div class="w-[1px] h-[50px] bg-oren"></div>
          <div>
            <h3 class="text-monrope text-[34px] text-bold text-oren">100+</h3>
            <p class="text-sora text-[18px] text-abu">>Happy Clients</p>
          </div>
          <div class="w-[1px] h-[50px] bg-oren"></div>
          <div>
            <h3 class="text-monrope text-[34px] text-bold text-oren">99%</h3>
            <p class="text-sora text-[18px] text-abu">>Clients Satisfied</p>
          </div>
        </div>
      </div>
    </div>

    <!-- SERVICE -->
    <div class="flex flex-col justify-center items-center gap-3">
      <div class="flex flex-col justify-center items-center">
        <h1 class=" text-text text-[24px] text-semibold">Jasa Kami</h1>
        <p class="text-abu text-[18px]">Beberapa jasa yang bisa kamu pilih untuk produk yang akan kamu buat.</p>
      </div>
      <div class="flex gap-10 px-[80px]">
        <!-- WD -->
        <div class="flex flex-col gap-2 p-5">
          <div class="flex flex-col gap-1">
            <img src="../src/images/logo web.svg" alt="" class="size-[50px]">
            <h1 class="text-text text-[24px]">Website Development</h1>
            <p class="text-abu text-[16px] text-justify">Website development adalah layanan yang digunakan untuk membuat dan mengembangkan situs web.</p>
          </div>
          <a href="#" class="text-white bg-oren rounded-full px-[20px] py-[10px] text-center">Saya Tertarik Ini</a>
        </div>
        <!-- MD -->
        <div class="flex flex-col gap-2 p-5">
          <div class="flex flex-col gap-1">
            <img src="../src/images/logo mobile.svg" alt="" class="size-[50px]">
            <h1 class="text-text text-[24px]">Mobile App Development</h1>
            <p class="text-abu text-[16px] text-justify">Mobile app development adalah layanan yang digunakan untuk membuat dan mengembangkan aplikasi mobile.</p>
          </div>
          <a href="#" class="text-white bg-oren rounded-full px-[20px] py-[10px] text-center">Saya Tertarik Ini</a>
        </div>
        <!-- Logo D -->
        <div class="flex flex-col gap-2 p-5">
          <div class="flex flex-col gap-1">
            <img src="../src/images/logo logo.svg" alt="" class="size-[50px]">
            <h1 class="text-text text-[24px]">Logo Development</h1>
            <p class="text-abu text-[16px] text-justify">Logo development adalah layanan yang digunakan untuk membuat dan mengembangkan logo.</p>
          </div>
          <a href="#" class="text-white bg-oren rounded-full px-[20px] py-[10px] text-center">Saya Tertarik Ini</a>
        </div>
      </div>
    </div>

  </main>

  <section class="flex bg-oren px-[150px] py-[30px] justify-between items-center">
    <div class=" text-background1 text-monrope text-[36px] text-bold">
      <h1>Waktunya untuk mencapai</h1>
      <h1>pertumubhan berkelanjutan Anda.</h1>
    </div>
    <!-- BUTTON -->
    <a href="#">
      <div class="flex justify-center items-center gap-3 px-[20px] py-[10px] rounded-full bg-white text-oren w-full">
        <p class="text-manrope text-[14px] text-oren text-semibold">Diskusi Sekarang </p>
        <img src="../src/images/panah.png" alt="" class="size-[24px]">
      </div>
    </a>
  </section>

  <?php include '../components/footer.php'; ?>
</body>

</html>