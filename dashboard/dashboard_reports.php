<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="flex h-screen">
    <!-- Sidebar Navigation -->
    <aside class=" bg-gray-800 text-white w-64 flex flex-col">
      <!-- Logo -->
      <div class="p-4">
        <img src="images/logoo.png" alt="Adonia Hotel" class="w-20 h-20">
      </div>
    
      <!-- Navigation Links -->
      <nav class="flex-1">
        <ul class="space-y-2">
            <a href="dashboard.html"><li class="px-4 py-2 hover:bg-gray-700">Dashboard</li></a>
            <a href="dashboard_reservation.html"><li class="px-4 py-2 hover:bg-gray-700">Reservations</li></a>
            <a href="dashboard_rooms.html"><li class="px-4 py-2 hover:bg-gray-700">Rooms</li></a>
            <a href="dashboard_reports.html"><li class="px-4 py-2 bg-gray-700">Reports</li></a>
        </ul>
      </nav>
    </aside>
  
    <!-- Main Content -->
    <div class="flex-1">
      <!-- Header -->
      <header class="bg-white shadow-lg flex justify-between items-center px-4 py-2">
        <div class="flex items-center">
          <!-- Logo -->
          <img src="images/logoo.png" alt="Adonia Hotel" class="w-12 h-12">
          
          <!-- Notifications -->
          <div class="ml-4">
            <button class="relative">
              <i class="fas fa-bell text-gray-500"></i>
              <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">5</span>
            </button>
          </div>
        </div>
        
        <!-- Account Settings -->
        <div class="relative group">
          <button class="flex items-center focus:outline-none">
            <div class="w-8 h-8 rounded-full overflow-hidden">
              <img src="images/bed.jpg" alt="User Avatar" class="w-full h-full">
            </div>
            <i class="fas fa-caret-down ml-2 text-gray-500"></i>
          </button>
          
          <!-- Account Settings Dropdown -->
          <div class="hidden absolute right-0 mt-2 bg-white rounded-md shadow-lg py-2 w-48 group-hover:block">
            <a href="dashboard_profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            <a href="dashboard_settings.html" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
            <a href="logout.php" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
          </div>
        </div>
      </header>
  
      <!-- Content Area -->
      <main class="p-4">
        
        <!-- Reports and Analytics -->
        <div class="p-4">
          <h2 class="text-2xl font-bold mb-4">Reports and Analytics</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white shadow-md rounded-lg p-4">
              <h3 class="text-lg font-bold mb-2">Revenue</h3>
              <div class="flex items-center justify-between mb-2">
                <div>
                  <p class="text-gray-500">This Month</p>
                  <h4 class="text-xl font-bold">$10,000</h4>
                </div>
                <div>
                  <p class="text-gray-500">Last Month</p>
                  <h4 class="text-xl font-bold">$8,500</h4>
                </div>
              </div>
              <div class="text-gray-500">
                <p>Total Revenue: $100,000</p>
                <p>Yearly Growth: +20%</p>
              </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
              <h3 class="text-lg font-bold mb-2">Occupancy</h3>
              <div class="flex items-center justify-between mb-2">
                <div>
                  <p class="text-gray-500">This Month</p>
                  <h4 class="text-xl font-bold">80%</h4>
                </div>
                <div>
                  <p class="text-gray-500">Last Month</p>
                  <h4 class="text-xl font-bold">75%</h4>
                </div>
              </div>
              <div class="text-gray-500">
                <p>Average Occupancy: 85%</p>
                <p>Occupancy Target: 90%</p>
              </div>
            </div>
          </div>
        </div>
        
      
        
        
      </main>
      
    </div>
  </div>
  




  
  



<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>