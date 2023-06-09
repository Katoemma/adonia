<?php include '../controllers/rooms.php';?>
<?php include 'dashIncludes/dash_header.php'?>


<!-- Content Area -->
<main class="flex flex-col p-4">
  <?php include '../helpers/message.php'?>
  <!-- Room Addition Form -->
  <div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Add a Room</h2>
    <div class="bg-white shadow-md w-fit rounded-lg p-4">
    <?php include '../helpers/errors.php'?>
      <form action="dashboard_rooms.php" method="POST" class="flex gap-4" enctype="multipart/form-data">
        <div class="mb-4">
          <label for="roomNumber" class="block text-gray-700 font-bold">Room Number:</label>
          <input type="number" name="room_no" id="roomNumber" value="<?php echo $room_no ?>"  class="border border-gray-300 rounded-md px-3 py-2">
        </div>
        <div class="mb-4">
          <label for="roomType" class="block text-gray-700 font-bold">Room Type:</label>
          <select name="type" id="status" class="border border-gray-300 rounded-md px-3 py-2">
            <option value="">_______________</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Executive">Executive</option>
            <option value="Luxury">Luxury</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="capacity" class="block text-gray-700 font-bold">Capacity:</label>
          <input type="number" name="capacity" id="capacity" value="<?php echo $capacity ?>" class="border border-gray-300 rounded-md px-3 py-2">
        </div>

        <div class="mb-4">
          <label for="price" class="block text-gray-700 font-bold">Price:</label>
          <input type="number" name="price" id="price" value="<?php echo $price ?>" class="border border-gray-300 rounded-md px-3 py-2">
        </div>
        <div class="mb-4">
          <label cclass="block text-gray-700 font-bold" for="file_input">Upload Image</label>
          <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
        <div class="pt-6">
          <button type="submit" name="add-room" class="px-3 py-2 bg-green-500 text-white rounded hover:bg-green-600 ">Add Room</button>
        </div>
        </form>
    </div>
  </div>

<!-- Room Management -->
<div class="p-4 w-1/2">
  <h2 class="text-2xl font-bold mb-4">Room Management</h2>
  <div class="bg-white shadow-md rounded-lg p-4">
    <table class="w-full">
      <thead>
        <tr class="text-center">
          <th class="py-2">Room Number</th>
          <th class="py-2">Room Type</th>
          <th class="py-2">Capacity</th>
          <th class="py-2">Price</th>
          <th class="py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $items_per_page = 2; // Number of items to display per page
        $total_rooms = count($rooms); // Total number of rooms
        $total_pages = ceil($total_rooms / $items_per_page); // Calculate total number of pages

        // Retrieve the current page number from the request
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        // Calculate the offset for the rooms array
        $offset = ($current_page - 1) * $items_per_page;

        // Get the rooms for the current page
        $rooms_for_page = array_slice($rooms, $offset, $items_per_page);

        foreach ($rooms_for_page as $key => $room) :
        ?>
          <tr class="text-center">
            <td class="py-2"><?php echo $room['room_no'] ?> </td>
            <td class="py-2"><?php echo $room['type'] ?></td>
            <td class="py-2"><?php echo $room['capacity'] ?></td>
            <td class="py-2"><?php echo $room['price'] ?></td>
            <td class="py-2">
              <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
              <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
      <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <a href="?page=<?php echo $i; ?>" class="<?php if ($i == $current_page) echo 'text-white font-bold p-1 border-2 rounded-full w-6 h-6 bg-blue-500'; ?>"><?php echo $i; ?></a>
      <?php endfor; ?>
    </div>

  </div>
</div>



</main>

<?php include 'dashIncludes/dash_footer.php'?>
