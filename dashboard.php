<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="flex h-screen">
  <!-- Side Navigation -->
<div class="bg-gray-800 text-white w-64 flex flex-col">
  <!-- Logo -->
  <div class="p-4">
    <img src="images/logoo.png" alt="Adonia Hotel" class="w-20 h-20">
  </div>

  <!-- Navigation Links -->
  <nav class="flex-1 pt-40">
    <ul class="space-y-2">
      <a href="#"  class="px-4 py-2 bg-gray-700">Dashboard</a>
      <a href="#" class="px-4 py-2 hover:bg-gray-700">Reservations</a>
      <a href="#" class="px-4 py-2 hover:bg-gray-700">Rooms</a>
      <a href="#" class="px-4 py-2 hover:bg-gray-700">Blog posts</a>
      <a href="#" class="px-4 py-2 hover:bg-gray-700">Reports</a>
    </ul>
  </nav>

  <!-- Footer -->
  <footer class="p-4">
    <p class="text-gray-400 text-xs text-center">&copy; 2023 Adonia Hotel. All rights reserved.</p>
  </footer>
</div>


  <!-- Main Content -->
  <div class="flex-1">
    <!-- Header -->
    <header class="sticky top-0 bg-white border-b border-gray-200 px-4 py-2 flex items-center justify-between">
      <!-- Logo -->
      <h1 class="text-2xl font-bold text-orange-500">Admin Dashboard</h1>

      <!-- Header Content -->
      <div class="flex items-center space-x-4">
        <!-- Notification Messages -->
        <div class="flex gap-12 px-8">
            <button type="button" class="relative inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                <span class="sr-only">Notifications</span>
                <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">8</div>
            </button>
            <button class="text-gray-600 hover:text-gray-900 relative">
                <i class="fa fa-bell text-2xl"></i>
                
                <!-- New Notifications Count -->
                <span class="absolute top-0 right-0 -mt-1 -mr-2 bg-red-500 text-white text-xs rounded-full px-1 py-0.5">5</span>
            </button>

        </div>
        
        <!-- Account Settings -->
        <div class="relative">
            <div class="relative">
                <img class="w-10 h-10 rounded-full" src="https://d.newsweek.com/en/full/2027477/avatar-2-movie.jpg?w=1600&h=1600&q=88&f=a9c76735de5944303f821b996fd8a21c" alt="">
                <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
            </div>

          <!-- Account Settings Dropdown -->
          <div class="absolute right-0 mt-2 w-40 bg-white rounded shadow-md hidden">
            <ul class="py-2">
              <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile Settings</a></li>
              <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- Rest of the content goes here -->

  </div>
</div>




</body>
</html>