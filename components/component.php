<?php 
function Card($gambar, $title, $paragraph) {
  return "
    <div class='flex flex-col w-full'>
          <img src='$gambar' alt='' class='h-7/12 object-cover rounded-lg'>
          <h1 class='mt-2 text-manrope text-text text-[24px] text-center'>$title</h1>
          <p class='text-sore text-[18px] text-abu text-justify'>$paragraph</p>
        </div>
  ";
}

function Navbar(){
  
}