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
            <a href="dashboard_reports.html"><li class="px-4 py-2 hover:bg-gray-700">Reports</li></a>
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
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            <a href="dashboard_settings.html" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
            <a href="logout.php" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
          </div>
        </div>
      </header>
  
      <!-- Content Area -->
      <main class="p-4">
        
        <div class="p-4" id="profile">
            <h2 class="text-2xl font-bold mb-4">User Profile</h2>
            <div class="bg-white shadow-md rounded-lg p-4">
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 rounded-full overflow-hidden">
                  <img src="images/party.jpg" alt="Profile Picture" class="object-cover w-full h-full">
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-bold">John Doe</h3>
                  <p class="text-gray-600">john.doe@example.com</p>
                </div>
              </div>
              <div class="mb-6">
                <h4 class="text-lg font-bold mb-2">Personal Information</h4>
                <ul>
                  <li><strong>Full Name:</strong> John Doe</li>
                  <li><strong>Email:</strong> john.doe@example.com</li>
                  <li><strong>Phone:</strong> +1 234 567 890</li>
                  <li><strong>Address:</strong> 123 Main St, City, Country</li>
                </ul>
              </div>
              <div class="mb-6">
                <h4 class="text-lg font-bold mb-2">Account Settings</h4>
                <ul>
                  <li><strong>Username:</strong> johndoe</li>
                  <li><strong>Password:</strong> *********</li>
                  <li><strong>Two-Factor Authentication:</strong> Enabled</li>
                </ul>
              </div>
              <div class="flex justify-end">
                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-primary-dark" onclick="edit()">Edit Profile</button>
              </div>
            </div>
        </div>

          <!-- edit user form -->
        <div class="hidden p-4" id="editForm">
            <h2 class="text-2xl font-bold mb-4">User Profile</h2>
            <div class="bg-white shadow-md rounded-lg p-4">
              <form>
                <div class="mb-6">
                  <label class="block mb-2 font-bold text-gray-800" for="full-name">Full Name</label>
                  <input type="text" id="full-name" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="John Doe">
                </div>
                <div class="mb-6">
                  <label class="block mb-2 font-bold text-gray-800" for="email">Email</label>
                  <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="john.doe@example.com">
                </div>
                <div class="mb-6">
                  <label class="block mb-2 font-bold text-gray-800" for="phone">Phone</label>
                  <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md" value="+1 234 567 890">
                </div>
                <div class="mb-6">
                  <label class="block mb-2 font-bold text-gray-800" for="address">Address</label>
                  <textarea id="address" class="w-full px-4 py-2 border border-gray-300 rounded-md" rows="3">123 Main St, City, Country</textarea>
                </div>
                <div class="flex justify-end">
                  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-primary-dark" onclick="change()">Save Changes</button>
                </div>
              </form>
            </div>
        </div>
          
          
        
      
        
        
      </main>
      
    </div>
  </div>
  




  
  




<script>
  function edit(){
    document.getElementById("profile").style.display = "none";
    document.getElementById("editForm").style.display = "block";
  };
  function change(){
    document.getElementById("profile").style.display = "block";
    document.getElementById("editForm").style.display = "none";
  }
</script>
</body>
</html>