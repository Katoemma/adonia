<?php include 'dashIncludes/dash_header.php'?>
  
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
<?php include 'dashIncludes/dash_footer.php'?>