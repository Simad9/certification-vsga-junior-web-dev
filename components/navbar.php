<?php
if (!isset($_SESSION['username'])) :
?>
  <nav class='flex justify-center items-center gap-[100px] px-[15px] rounded-full bg-white shadow-lg'>
    <div class='flex gap-[80px] justify-center items-center text-manrope text-[16px] text-text'>

      <a href='landingPage.php#service'>Service</a>

      <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-text rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-oren md:p-0 md:w-auto ">
        Event
        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg></button>
      <!-- Dropdown menu -->
      <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 0">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
          <li>
            <a href="eventDetail.php?id_event=1" class="block px-4 py-2 hover:bg-gray-100">Event 1</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=2" class="block px-4 py-2 hover:bg-gray-100">Event 2</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=3" class="block px-4 py-2 hover:bg-gray-100">Event 3</a>
          </li>
        </ul>
      </div>

      <a href='blogsPage.php'>Blogs</a>

    </div>
    <a href='landingPage.php'><img src='../src/images/Logo.svg' alt='Logo' class='size-[65px]'></a>
    <div class='flex justify-center'>
      <div class='flex gap-[50px] text-manrope text-[16px] text-text items-center'>
        <a href='landingPage.php#about'>About</a>
        <a href='landingPage.php#contact'>Contact</a>
        <a href='loginPage.php'>
          <div class='flex justify-center items-center gap-3  px-[20px] py-[10px] rounded-full bg-oren text-white w-full'>
            <p class='text-manrope text-[14px] text-white'>Login </p>
            <img src='../src/images/panah.png' class='size-[24px]'>
          </div>
        </a>
      </div>
    </div>
  </nav>
<?php
elseif ($_SESSION['username'] == 'admin') :
?>
  <nav class='flex justify-center items-center gap-[100px] px-[15px] rounded-full bg-white shadow-lg'>
    <div class='flex gap-[80px] justify-center items-center text-manrope text-[16px] text-text'>

      <a href='landingPage.php#service'>Service</a>

      <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-text rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-oren md:p-0 md:w-auto ">
        Event
        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg></button>
      <!-- Dropdown menu -->
      <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 0">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
          <li>
            <a href="eventDetail.php?id_event=1" class="block px-4 py-2 hover:bg-gray-100">Event 1</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=2" class="block px-4 py-2 hover:bg-gray-100">Event 2</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=3" class="block px-4 py-2 hover:bg-gray-100">Event 3</a>
          </li>
        </ul>
      </div>

      <a href='blogsPage.php'>Blogs</a>

    </div>
    <a href='landingPage.php'><img src='../src/images/Logo.svg' alt='Logo' class='size-[65px]'></a>
    <div class='flex justify-center'>
      <div class='flex gap-[50px] text-manrope text-[16px] text-text items-center'>
        <a href='landingPage.php#about'>About</a>
        <a href='landingPage.php#contact'>Contact</a>
        <a href='admin.php'>
          <div class='flex justify-center items-center gap-3  px-[20px] py-[10px] rounded-full bg-oren text-white w-full'>
            <p class='text-manrope text-[14px] text-white'>Admin </p>
          </div>
        </a>
      </div>
    </div>
  </nav>
<?php
else :
?>
  <nav class='flex justify-center items-center gap-[100px] px-[15px] rounded-full bg-white shadow-lg'>
    <div class='flex gap-[80px] text-manrope text-[16px] text-text'>
      <a href='landingPage.php#service'>Service</a>

      <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-text rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-oren md:p-0 md:w-auto ">
        Event
        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg></button>
      <!-- Dropdown menu -->
      <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 0">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
          <li>
            <a href="eventDetail.php?id_event=1" class="block px-4 py-2 hover:bg-gray-100">Event 1</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=2" class="block px-4 py-2 hover:bg-gray-100">Event 2</a>
          </li>
          <li>
            <a href="eventDetail.php?id_event=3" class="block px-4 py-2 hover:bg-gray-100">Event 3</a>
          </li>
        </ul>
      </div>

      <a href='blogsPage.php'>Blogs</a>
    </div>
    <a href='landingPage.php'><img src='../src/images/Logo.svg' alt='Logo' class='size-[65px]'></a>
    <div class='flex justify-center'>
      <div class='flex gap-[50px] text-manrope text-[16px] text-text items-center'>
        <a href='landingPage.php#about'>About</a>
        <a href='landingPage.php#contact'>Contact</a>
        <a href='../php/logout.php'>
          <div class='flex justify-center items-center gap-3  px-[20px] py-[10px] rounded-full bg-oren text-white w-full'>
            <p class='text-manrope text-[14px] text-white'>Logout </p>
            <img src='../src/images/panah.png' class='size-[24px]'>
          </div>
        </a>
      </div>
    </div>
  </nav>
<?php
endif
?>