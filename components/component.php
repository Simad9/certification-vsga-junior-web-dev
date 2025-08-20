<?php
function Card($gambar, $title, $paragraph)
{
  return "
    <div class='flex flex-col w-full'>
          <img src='$gambar' alt='' class='h-7/12 object-cover rounded-lg'>
          <h1 class='mt-2 text-manrope text-text text-[24px] text-center'>$title</h1>
          <p class='text-sore text-[18px] text-abu text-justify'>$paragraph</p>
        </div>
  ";
}

function Navbar($login)
{
  if ($login) {
    return `
      <nav class='flex justify-center items-center gap-[100px] px-[15px] rounded-full bg-white shadow-lg'>
        <div class='flex gap-[80px] text-manrope text-[16px] text-text'>
          <a href='landingPage.php#service'>Service</a>
          <div class="relative inline-block text-left">
            <div>
              <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                Event
                <!-- Heroicon name: chevron-down -->
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>

            <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
              <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <a href="eventPage.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">All Event</a>
                <a href="eventPage.php#upcoming" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Upcoming Event</a>
                <a href="eventPage.php#past" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Past Event</a>
              </div>
            </div>
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
              <img src='../src/images/panah.png'  class='size-[24px]'>
              </div>
            </a>
          </div>
        </div>
      </nav>
    `;
  } else {
    return "
      <nav class='flex justify-center items-center gap-[100px] px-[15px] rounded-full bg-white shadow-lg'>
        <div class='flex gap-[80px] text-manrope text-[16px] text-text'>
          <a href='landingPage.php#service'>Service</a>
          <a href='eventPage.php'>Event</a>
          <a href='blogsPage.php'>Blogs</a>
        </div>
        <a href='landingPage.php'><img src='../src/images/Logo.svg' alt='Logo' class='size-[65px]'></a>
        <div class='flex justify-center'>
          <div class='flex gap-[50px] text-manrope text-[16px] text-text items-center'>
            <a href='landingPage.php#about'>About</a>
            <a href='landingPage.php#contact'>Contact</a>
            <a href='loginPage.php'>
              <div class='flex justify-center items-center gap-3  px-[20px] py-[10px] rounded-full bg-oren text-white w-full'>
                <p class='text-manrope text-[14px] text-white'>Logout </p>
              <img src='../src/images/panah.png'  class='size-[24px]'>
              </div>
            </a>
          </div>
        </div>
      </nav>
    ";
  }
}
