<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adonia Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/countup.js"></script>


</head>


<body>
    <!-- HTML structure -->
<!-- HTML structure -->
<nav class="sticky top-0 left-0 z-50 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="#" class="text-white text-lg font-semibold"><img src="images/logoo.png" class="h-10" alt="logo"></a>
      </div>
        <div class="hidden md:block">
            <ul class="flex space-x-4">
                <li><a href="index.php" class="text-black-600 hover:text-orange-500 md:text-xl">Home</a></li>
                <li><a href="#" class="text-black-600 hover:text-orange-500 md:text-xl">Contacts</a></li>
                <li><a href="rooms.php" class="text-black-600 hover:text-orange-500 md:text-xl">Rooms</a></li>
                <li><a href="#" class="text-black-600 hover:text-orange-500 md:text-xl">Services</a></li>
                <li>
                    <a href="#" class="inline-block bg-orange-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg">
                    Book
                    </a>
                </li>
                <div class="ml-24 group">
                  <a href="login.php" class="block text-black-600 hover:text-orange-500"><i class="fa fa-user-circle-o text-2xl" aria-hidden="true"></i></a>
                  <div class="hidden absolute border-2 border-red-400 rounded-xl text-white bg-red-400 p-2 shadow-lg group-hover:block">
                    <p>Only admin to login</p>
                  </div>
                </div>
                
            </ul>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="text-black w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
  </div>
  <div id="menu" class="md:hidden hidden">
    <ul class="bg-gray-800 py-2 px-4">
      <li><a href="#" class="block text-gray-300 hover:text-white">Home</a></li>
      <li><a href="#" class="block text-gray-300 hover:text-white">Contacts</a></li>
      <li><a href="#" class="block text-gray-300 hover:text-white">Rooms</a></li>
      <li><a href="#" class="block text-gray-300 hover:text-white">Services</a></li>
      <li>
        <a href="#" class="block bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">
          Book
        </a>
      </li>
      <li><a href="#" class="block text-gray-300 hover:text-white"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</nav>