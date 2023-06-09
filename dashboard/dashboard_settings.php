<?php include 'dashIncludes/dash_header.php'?>
      <!-- Content Area -->
      <main class="p-4">
        
        <div class="p-4">
          <h2 class="text-2xl font-bold mb-4">Settings</h2>
          <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-lg font-bold mb-2">General Settings</h3>
            <div class="flex items-center justify-between mb-4">
              <div class="w-1/2">
                <label class="text-gray-600">Hotel Name</label>
                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 mt-2" placeholder="Enter hotel name">
              </div>
              <div class="w-1/2">
                <label class="text-gray-600">Timezone</label>
                <select class="w-full border border-gray-300 rounded px-4 py-2 mt-2">
                  <option value="1">UTC+01:00</option>
                  <option value="2">UTC+02:00</option>
                  <option value="3">UTC+03:00</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <label class="text-gray-600">Default Language</label>
              <div class="flex items-center mt-2">
                <input type="radio" id="language-english" name="language" value="english" checked>
                <label for="language-english" class="ml-2">English</label>
              </div>
              <div class="flex items-center mt-2">
                <input type="radio" id="language-spanish" name="language" value="spanish">
                <label for="language-spanish" class="ml-2">Spanish</label>
              </div>
            </div>
            <div>
              <button class="bg-blue-500 text-white rounded-lg py-2 px-4 hover:bg-blue-600">Save Changes</button>
            </div>
          </div>
        </div>
        
        
      </main>
      
   <?php include 'dashIncludes/dash_footer.php'?>