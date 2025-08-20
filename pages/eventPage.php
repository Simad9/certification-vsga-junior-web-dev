<?php
include '../php/session.php';
include '../components/component.php';
include '../php/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>Event Page</title>
</head>

<body>
  <main class="px-[120px] pt-[20px] flex flex-col gap-[50px] pb-[20px]">

    <!-- NAVBAR LOGIN / LOGOUT -->
    <?php include "../components/navbar.php" ?>

    <div class="flex justify-center items-center px-[120px] h-[200px] rounded-[35px] bg-gradient-to-b from-[#fff] to-[#ffd9a6]">
      <div class="flex flex-col text-text text-center">
        <h1 class="font-manrope text-[36px] font-bold">DigiNova Tech</h1>
        <p class="font-sora text-black text-[24px]">"Transforming Ideas Into Digital Experiences"</p>
      </div>
    </div>

    <div>
      <h1 class="font-manrope text-[24px] font-bold text-text text-center">Our Events</h1>
      <p class="font-sore text-[18px] text-abu text-center mb-5">Acara-acara kami yang telah dilakukan bersama-sama</p>

      <!-- Card -->
      <div class="flex gap-8 w-full">
        <?php
        $query = "SELECT * FROM event";
        $result = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_assoc($result)) :
        ?>
          <div class='flex flex-col w-[400px]'>
            <img src='../src/uploads/<?= $data['image'] ?>' class='h-7/12 object-cover rounded-lg'>
            <h1 class='mt-2 text-manrope text-text text-[24px] text-center'><?= $data['title'] ?></h1>
            <p class='text-sore text-[18px] text-abu text-justify'><?= $data['desc'] ?></p>

            <a href='../pages/eventDetail.php?id_event=<?= $data['id_event'] ?>'>
              <div class='flex justify-center items-center gap-3  px-[20px] py-[10px] rounded-full bg-oren text-white w-full'>
                <p class='text-manrope text-[14px] text-white'>Lihat Detail </p>
              </div>
            </a>
          </div>
        <?php
        endwhile
        ?>
      </div>
    </div>


  </main>


  <?php include '../components/footer.php'; ?>
</body>

</html>