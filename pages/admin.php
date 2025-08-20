<?php
include '../components/component.php';

// if (!isset($_SESSION['login'])) {
//   header("Location: ../pages/loginPage.php");
//   exit;
// }

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
  <!-- NAVBAR LOGIN / LOGOUT -->
  <?php
  if (isset($_SESSION['login'])) {
    echo Navbar(true);
  } else {
    echo Navbar(false);
  }
  ?>

  <main class="px-[150px] py-[50px]">
    <h1 class="text-text text-[36px] font-bold">Dashboard Admin</h1>
    <p class="text-abu text-[18px]">Halaman ini hanya untuk admin.</p>

    <section class="mt-[50px]">
      <h2 class="text-text text-[24px] font-semibold">Daftar User</h2>
      <table class="table-auto w-full mt-[20px]">
        <thead>
          <tr>
            <th class="px-[20px] py-[10px] text-left">No</th>
            <th class="px-[20px] py-[10px] text-left">Username</th>
            <th class="px-[20px] py-[10px] text-left">Email</th>
            <th class="px-[20px] py-[10px] text-left">action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../php/koneksi.php';
          $query = "SELECT * FROM users";
          $result = mysqli_query($koneksi, $query);

          $no = 1;
          while ($data = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td class="px-[20px] py-[10px] text-left"><?php echo $no; ?></td>
              <td class="px-[20px] py-[10px] text-left"><?php echo $data['username']; ?></td>
              <td class="px-[20px] py-[10px] text-left"><?php echo $data['email']; ?></td>
              <td class="px-[20px] py-[10px] text-left ">
                <a href='../php/hapus.php?id=<?= $data['id'] ?>'>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e81717">
                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                  </svg>
                </a>
              </td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>

  <?php include '../components/footer.php'; ?>
</body>

</html>