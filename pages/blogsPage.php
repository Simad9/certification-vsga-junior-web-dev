<?php
include '../php/session.php';
include '../components/component.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>Blogs Page</title>
</head>

<body>
  <main class="px-[120px] pt-[20px] flex flex-col gap-[50px] pb-[20px]">

        <!-- NAVBAR LOGIN / LOGOUT -->
    <?= include '../components/navbar.php'; ?>

    <div class="flex justify-center items-center px-[120px] h-[200px] rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6]">
      <div class="flex flex-col text-text text-center">
        <h1 class="font-manrope text-[36px] font-bold">DigiNova Tech</h1>
        <p class="font-sora text-black text-[24px]">"Transforming Ideas Into Digital Experiences"</p>
      </div>
    </div>

    <div>
      <h1 class="font-manrope text-[24px] font-bold text-text text-center">Blogs from We</h1>
      <p class="font-sore text-[18px] text-abu text-center mb-5">Beberapa tulisan yang dibuat oleh tim kami</p>

      <!-- Card -->
      <div class="flex gap-8 w-full">
        <?= Card('../src/images/belajar.png', "Kurikulum Terbaik", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, officia? Quibusdam nisi, obcaecati porro consectetur exercitationem inventore! Fugit dignissimos, mollitia nobis amet eligendi libero ad sunt quo veniam! Tempora, inventore.") ?>
        <?= Card(
          '../src/images/gunung.png',
          "Insipirasi di Gunung",
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, officia? Quibusdam nisi, obcaecati porro consectetur exercitationem inventore! Fugit dignissimos, mollitia nobis amet eligendi libero ad sunt quo veniam! Tempora, inventore."
        ) ?>
        <?= Card(
          '../src/images/kerja.png',
          "Fokus adalah Kunci",
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, officia? Quibusdam nisi, obcaecati porro consectetur exercitationem inventore! Fugit dignissimos, mollitia nobis amet eligendi libero ad sunt quo veniam! Tempora, inventore."
        ) ?>
      </div>
    </div>


  </main>


  <?php include '../components/footer.php'; ?>
</body>

</html>