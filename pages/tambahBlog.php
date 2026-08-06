<?php
include '../php/session.php';
include '../components/component.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../pages/loginPage.php");
  exit;
}

$error = isset($_GET['error']) && $_GET['error'] == 1;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include '../components/head.php'; ?>
  <title>Tambah Blog - DigiNova Tech</title>
</head>

<body class="bg-background1 font-sora text-text antialiased">
  <main class="px-6 md:px-[120px] pt-[20px] pb-[60px] flex flex-col gap-8">
    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>

    <!-- Header -->
    <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
      <div>
        <h1 class="font-manrope text-[30px] md:text-[36px] font-extrabold text-text">Tambah Blog</h1>
        <p class="mt-1 font-sora text-[16px] text-abu">Tulis dan bagikan artikel terbaru tim kami.</p>
      </div>
      <div class="flex flex-wrap gap-3">
        <a href="eventPage.php" class="rounded-full border-2 border-oren px-6 py-2.5 font-manrope text-[14px] font-semibold text-oren transition hover:bg-oren hover:text-white">Melihat Seluruh Event</a>
        <a href="admin.php" class="rounded-full border-2 border-oren px-6 py-2.5 font-manrope text-[14px] font-semibold text-oren transition hover:bg-oren hover:text-white">Tambah Event</a>
        <a href="tambahBlog.php" class="rounded-full border-2 border-oren px-6 py-2.5 font-manrope text-[14px] font-semibold text-white bg-oren transition hover:bg-oren hover:text-white">Tambah Blog</a>
        <a href="../php/logout.php" class="rounded-full border-2 border-red-200 bg-white px-6 py-2.5 font-manrope text-[14px] font-semibold text-red-500 transition hover:border-red-500 hover:bg-red-500 hover:text-white">Logout</a>
      </div>
    </div>

    <?php if ($error) : ?>
      <div class="rounded-xl bg-red-50 px-4 py-3 font-sora text-[13px] font-semibold text-red-600 ring-1 ring-red-200">Terjadi kesalahan, coba lagi.</div>
    <?php endif; ?>

    <!-- Form -->
    <section class="w-full rounded-[30px] bg-white p-8 shadow-sm ring-1 ring-black/5 md:p-10">
      <h2 class="font-manrope text-[22px] font-bold text-text">Tulis Blog Baru</h2>
      <p class="mt-1 font-sora text-[14px] text-abu">Lengkapi form berikut untuk mempublikasikan artikel.</p>

      <form action="../php/tambahBlog.php" method="post" enctype="multipart/form-data" class="mt-6 flex flex-col gap-5">
        <div>
          <label class="font-manrope text-[14px] font-semibold text-text">Gambar</label>
          <!-- Dropzone: belum ada file -->
          <label for="foto" id="dropzone-empty" class="mt-1.5 flex cursor-pointer flex-col items-center justify-center gap-3 rounded-2xl border-2 border-dashed border-black/10 bg-background1/50 px-4 py-10 text-center transition hover:border-oren hover:bg-oren/5">
            <span class="inline-flex size-12 items-center justify-center rounded-full bg-oren/15">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-oren" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
              </svg>
            </span>
            <span class="font-sora text-[14px] font-semibold text-text">Klik untuk memilih gambar</span>
            <span class="font-sora text-[12px] text-abu">JPG, PNG, atau WEBP - maksimal 5MB</span>
          </label>

          <!-- Preview: file sudah dipilih -->
          <div id="file-preview" class="mt-1.5 hidden items-center gap-4 rounded-2xl border-2 border-solid border-oren/30 bg-oren/5 p-4">
            <img id="preview-img" class="size-16 shrink-0 rounded-xl object-cover ring-1 ring-black/10" alt="Preview gambar">
            <div class="min-w-0 flex-1">
              <p id="preview-name" class="truncate font-manrope text-[14px] font-semibold text-text"></p>
              <p id="preview-size" class="mt-0.5 font-sora text-[12px] text-abu"></p>
            </div>
            <div class="flex shrink-0 flex-col gap-2">
              <label for="foto" class="cursor-pointer rounded-full bg-oren px-4 py-2 text-center font-manrope text-[12px] font-semibold text-white transition hover:bg-orange-500">Ganti</label>
              <button type="button" id="remove-file" class="rounded-full border-2 border-red-200 bg-white px-4 py-2 font-manrope text-[12px] font-semibold text-red-500 transition hover:border-red-500 hover:bg-red-500 hover:text-white">Hapus</button>
            </div>
          </div>

          <input type="file" name="foto" id="foto" class="hidden" required accept=".png, .jpg, .jpeg, .webp">
        </div>

        <div>
          <label for="title" class="font-manrope text-[14px] font-semibold text-text">Title</label>
          <input type="text" name="title" id="title" placeholder="Judul artikel" required class="mt-1.5 w-full rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20">
        </div>

        <div>
          <label for="deskripsi" class="font-manrope text-[14px] font-semibold text-text">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" rows="6" placeholder="Tulis isi artikel di sini..." required class="mt-1.5 w-full resize-none rounded-xl border border-black/10 bg-background1/50 px-4 py-3 font-sora text-[14px] outline-none transition focus:border-oren focus:bg-white focus:ring-2 focus:ring-oren/20"></textarea>
        </div>

        <button type="submit" name="submit" class="mt-2 w-full rounded-full bg-oren py-3.5 font-manrope text-[14px] font-semibold text-white transition hover:bg-orange-500 hover:shadow-lg hover:shadow-oren/30">Publish Blog</button>
      </form>
    </section>
  </main>

  <?php include '../components/footer.php'; ?>
  <script>
    const fotoInput = document.getElementById('foto');
    const dropzoneEmpty = document.getElementById('dropzone-empty');
    const filePreview = document.getElementById('file-preview');
    const previewImg = document.getElementById('preview-img');
    const previewName = document.getElementById('preview-name');
    const previewSize = document.getElementById('preview-size');
    const removeFile = document.getElementById('remove-file');

    function formatBytes(bytes) {
      if (bytes < 1024) return bytes + ' B';
      if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
      return (bytes / 1048576).toFixed(1) + ' MB';
    }

    fotoInput.addEventListener('change', function() {
      const file = this.files[0];
      if (!file) return;
      previewName.textContent = file.name;
      previewSize.textContent = formatBytes(file.size);
      previewImg.src = URL.createObjectURL(file);
      dropzoneEmpty.classList.add('hidden');
      filePreview.classList.remove('hidden');
      filePreview.classList.add('flex');
    });

    removeFile.addEventListener('click', function() {
      fotoInput.value = '';
      dropzoneEmpty.classList.remove('hidden');
      filePreview.classList.remove('flex');
    });
  </script>
</body>

</html>