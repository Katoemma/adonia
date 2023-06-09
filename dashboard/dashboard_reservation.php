<?php include 'dashIncludes/dash_header.php'?>
  
      <!-- Content Area -->
      <main class="p-4">

        <!-- Reservation Management -->
        <section class="">
          <h2 class="text-2xl font-bold mb-4">Reservation Management</h2>
          <div class="bg-white shadow-md rounded-lg p-4">
            <table class="w-full">
              <thead>
                <tr>
                  <th class="py-2">Reservation ID</th>
                  <th class="py-2">Guest Name</th>
                  <th class="py-2">Check-in Date</th>
                  <th class="py-2">Check-out Date</th>
                  <th class="py-2">Status</th>
                  <th class="py-2">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4">1</td>
                  <td class="py-2">John Doe</td>
                  <td class="py-2">2023-05-20</td>
                  <td class="py-2">2023-05-25</td>
                  <td class="py-2">Confirmed</td>
                  <td class="py-2">
                    <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">View</button>
                    <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Cancel</button>
                  </td>
                </tr>

                <!-- More reservation rows -->
                <tr>
                  <td class="py-2 px-4">1</td>
                  <td class="py-2">John Doe</td>
                  <td class="py-2">2023-05-20</td>
                  <td class="py-2">2023-05-25</td>
                  <td class="py-2">Confirmed</td>
                  <td class="py-2">
                    <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">View</button>
                    <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Cancel</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        </main>
<?php include 'dashIncludes/dash_footer.php'?>