<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar Navigation -->
        <aside class="bg-yellow-100 text-white w-64 flex flex-col hidden md:block">
            <!-- Logo -->
            <div class="p-4 mb-8 bg-yellow-100">
                <img src="../images/logoo.png" alt="Adonia Hotel" class="w- h-12">
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1">
                <ul class="space-y-1 px-2 text-gray-600">
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard.php" class="flex gap-2 block px-4 py-2 font-bold"><img src="../images/svgs/dashboard.svg" alt=""> Dashboard</a></li>
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard_reservation.php" class="flex gap-2 block px-4 py-2 font-bold "><img src="../images/svgs/book_online_black_24dp.svg" alt="">Reservations</a></li>
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard_rooms.php" class="flex gap-2 block px-4 py-2 font-bold "><img src="../images/svgs/bedroom_parent_black_24dp.svg" alt="">Rooms</a></li>
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard_reports.php" class="flex gap-2 block px-4 py-2 font-bold "><img src="../images/svgs/summarize_black_24dp.svg" alt="">Reports</a></li>
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard_reports.php" class="flex gap-2 block px-4 py-2 font-bold "><img src="../images/svgs/badge_black_24dp.svg" alt="">Employees</a></li>
                    <li class="border-2 border-gray-100 bg-white  rounded-md"><a href="dashboard_reports.php" class="flex gap-2 block px-4 py-2 font-bold "><img src="../images/svgs/rss_feed_black_24dp.svg" alt="">Blog settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Mobile Navigation -->
        <div class="md:hidden flex-1">
            <!-- Hamburger Icon -->
            <div class="bg-white px-4 flex justify-end">
                <button id="hamburger" class="focus:outline-none">
                    <i class="fa fa-bars text-gray-500 "></i>
                </button>
            </div>

            <!-- Sidebar Overlay -->
            <div id="sidebarOverlay" class="fixed inset-0 bg-black opacity-50 z-50 hidden"></div>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-yellow-100 shadow-lg flex justify-between items-center px-4 py-2">
            <div class="flex items-center px-4 py-4">
                <!-- Logo -->
                <h1 class="text-2xl font-bold text-black">Admin Dashboard</h1>
            </div>


            <div class="flex gap-4 px-12">
              <!-- Notifications -->
              <div class="ml-4 group">
                    <button class="relative">
                        <i class="fa fa-bell text-2xl text-gray-500"></i>
                        <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">5</span>
                    </button>
                    <div class="hidden absolute right-12 bg-white rounded-md shadow-lg px-2 py-2 w-96 group-hover:block">
                       
                        <div class="pb-4">
                            <span class="text-xl font-bold">Notifications</span> 
                        </div>

                        <div class="flex flex-col p-2 mb-2 bg-gray-100 rounded-xl">
                            <div class="flex gap-2">
                                <img src="../images/logo.jpg" alt="logo" class="w-8 h-8 rounded-full border-gray-400 border-2">
                                <p class="text "><span class="text-blue-400">Kato emmanuel</span> made a reservation !!</p>
                            </div>
                            <p class="px-10 text-blue-400">Today <span class="text-black">at</span>  14:00:02</p>
                        </div>
                        
                    </div>
              </div>
              
              <!-- Messages -->
                <div class="ml-4 group">
                    <button class="relative">
                        <i class="fa fa-envelope text-2xl text-gray-500"></i>
                        <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-blue-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">3</span>
                    </button>
                        <div class="hidden absolute right-12 bg-white rounded-md shadow-lg px-2 py-2 w-96 group-hover:block">
                            <div class="pb-4">
                                <span class="text-xl font-bold">Messages</span> 
                            </div>

                            <div class="flex flex-col p-2 mb-2 bg-gray-100 rounded-xl">
                                <div class="flex gap-2">
                                    <img src="../images/logo.jpg" alt="logo" class="w-8 h-8 rounded-full border-gray-400 border-2">
                                    <p class="text "><span class="text-blue-400">Kato emmanuel</span> sent a message</p>
                                </div>
                                <p class="px-10 text-blue-400">Today <span class="text-black">at</span>  14:00:02</p>
                            </div> 
                        </div>
                </div>

              <!-- Account Settings -->
              <div class="relative group">
                  <button class="flex items-center focus:outline-none">
                    <i class="fa fa-user-circle-o text-2xl text-gray-500"></i>
                  </button>

                  <!-- Account Settings Dropdown -->
                  <div class="hidden absolute right-0 bg-white rounded-md shadow-lg py-2 w-48 group-hover:block">
                      <a href="dashboard_profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                      <a href="dashboard_settings.html" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                      <a href="logout.php" class="block text-red-700 px-4 py-2 hover:bg-gray-100">Logout</a>
                  </div>
              </div>
            </div>

            </header>

    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.querySelector('aside');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            sidebarOverlay.classList.toggle('hidden');
        });
    </script>

