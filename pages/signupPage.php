<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == 1) {
    $error = 'Password tidak sama.';
  } else if ($_GET['error'] == 2) {
    $error = 'Username sudah terdaftar.';
  } else {
    $error = null;
  }
} else {
  $error = null;
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include '../components/head.php'; ?>
  <title>Sign Up - DigiNova Tech</title>
</head>

<body class="bg-background1 font-sora text-text antialiased">
  <section class="flex min-h-screen flex-col items-center justify-center gap-10 px-6 py-10 lg:flex-row lg:gap-20 lg:px-[120px]">

    <!-- Kiri: Brand -->
    <div class="relative hidden w-1/2 max-w-[560px] min-h-[560px] overflow-hidden rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6] p-12 lg:flex flex-col items-center justify-center">
      <div class="pointer-events-none absolute -top-20 -right-16 size-56 rounded-full bg-oren/20 blur-3xl"></div>
      <div class="pointer-events-none absolute -bottom-24 -left-16 size-64 rounded-full bg-biru/10 blur-3xl"></div>

      <div class="relative flex flex-col items-center text-center">
        a href="landingPage.php">
        <img src="../src/images/Logo.svg" alt="Logo DigiNova Tech" class="h-28 w-28 drop-shadow-lg">
        </a>
        <h2 class="mt-5 font-manrope text-[30px] font-extrabold text-text">DigiNova <span class="text-oren">Tech</span></h2>
        <p class="mt-3 max-w-[340px] font-sora text-lg text-black">"Transforming Ideas Into Digital Experiences"</p>

        <ul class="mt-8 flex flex-col gap-3 font-sora text-[15px] text-abu">
          <li class="flex items-center gap-2.5"><span class="inline-flex size-6 shrink-0 items-center justify-center rounded-full bg-oren/20 font-bold text-oren">&#10003;</span> Pengembangan web &amp; aplikasi</li>
          <li class="flex items-center gap-2.5"><span class="inline-flex size-6 shrink-0 items-center justify-center rounded-full bg-oren/20 font-bold text-oren">&#10003;</span> Desain logo &amp; identitas digital</li>
          <li class="flex items-center gap-2.5"><span class="inline-flex size-6 shrink-0 items-center justify-center rounded-full bg-oren/20 font-bold text-oren">&#10003;</span> Solusi digital untuk UMKM</li>
        </ul>
      </div>
    </div>

    <!-- Kanan: Form -->
    <div class="flex w-full max-w-[430px] flex-col items-center">
      <div class="w-full rounded-[30px] bg-white p-8 shadow-sm ring-1 ring-black/5 md:p-10">
        <h1 class="font-manrope text-[28px] font-extrabold text-text">Sign Up</h1>
        <p class="mt-1 font-sora text-[14px] text-abu">Buat akun baru untuk menjelajahi DigiNova Tech</p>

        <?php if ($error) : ?>
          <div class="mt-5 rounded-xl bg-red-50 px-4 py-3 font-sora text-[13px] font-semibold text-red-600 ring-1 ring-red-200"><?= $error ?></div>
        <?php endif; ?>

        <form action="../php/signup.php" method="post" class="mt-6 flex flex-col gap-4">
          <div>
            <label for="username" class="font-manrope text-[14px] font-semibold text-text">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" class="mt-1.5 w-full rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20" />
          </div>
          <div>
            <label for="email" class="font-manrope text-[14px] font-semibold text-text">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" class="mt-1.5 w-full rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20" />
          </div>
          <div>
            <label for="password" class="font-manrope text-[14px] font-semibold text-text">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" class="mt-1.5 w-full rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20" />
          </div>
          <div>
            <label for="re-password" class="font-manrope text-[14px] font-semibold text-text">Konfirmasi Password</label>
            <input type="password" id="re-password" name="re-password" placeholder="Ulangi password" class="mt-1.5 w-full rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20" />
          </div>

          <button type="submit" name="submit" class="mt-2 w-full rounded-full bg-oren py-3.5 font-manrope text-[14px] font-semibold text-white transition hover:bg-orange-500 hover:shadow-lg hover:shadow-oren/30">Sign Up</button>
        </form>

        <div class="my-5 flex items-center gap-3 font-sora text-[12px] text-abu">
          <span class="h-px flex-1 bg-black/10"></span> atau <span class="h-px flex-1 bg-black/10"></span>
        </div>

        <a href="loginPage.php" class="block w-full rounded-full border-2 border-oren py-3.5 text-center font-manrope text-[14px] font-semibold text-oren transition hover:bg-oren hover:text-white">Sudah Punya Akun? Log In</a>
      </div>

      <a href="landingPage.php" class="mt-6 inline-flex items-center gap-1.5 font-sora text-[13px] text-abu transition hover:text-oren">&larr; Kembali ke Beranda</a>
    </div>
  </section>
</body>

</html>