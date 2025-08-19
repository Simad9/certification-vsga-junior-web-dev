<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../components/head.php'; ?>
  <title>Sign Up Page</title>
</head>

<body>
  <section class="bg-background1 flex justify-between items-center min-h-screen  px-[120px] py-[50px] gap-[50px]">
    <!-- Kiri -->
    <div class="flex flex-col justify-center items-center w-1/2 h-[650px] bg-gradient-to-b from-[#fff] to-[#ffd9a6] p-10 rounded-2xl">
      <img src="../src/images/Logo.svg" alt="Logo" class="w-32 h-32">
      <p class="text-center text-sora text-black text-sm">
        "Transforming Ideas Into Digital Experiences"
      </p>
    </div>

    <!-- Kanan -->
    <div class="flex flex-col justify-center items-center w-1/2 p-10">
      <h1 class="text-manrope text-[36px] font-bold mb-5">Log In Page</h1>

      <form action="../php/signin.php" method="post" class="flex flex-col gap-4 w-full">

        <input type="text" placeholder="Username"
          class="w-full border rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-400" name="username" />
        <input type="email" placeholder="Email"
          class="w-full border rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-400" name="email" />

        <input type="password" placeholder="Password"
          class="w-full border rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-400" name="password" />
        <input type="password" placeholder="Re-Password"
          class="w-full border rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-400" name="re-password" />

        <button type="submit"
          class="w-full bg-oren text-white font-medium py-2 rounded-full hover:bg-orange-500 transition">
          Sign In
        </button>


        <a href="loginPage.php"><button type="button"
            class="w-full border-2 border-oren text-oren font-medium py-2 rounded-full hover:bg-orange-500 hover:text-background1 transition">
            Log In
          </button>
        </a>

      </form>
    </div>
  </section>
</body>

</html>