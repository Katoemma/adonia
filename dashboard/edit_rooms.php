<?php include '../controllers/rooms.php';?>
<?php include 'dashIncludes/dash_header.php'?>

<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Edit Room Details</h2>
    <div class="bg-white shadow-md w-fit rounded-lg p-4">
    <?php include '../helpers/errors.php'?>
      <form action="edit_rooms.php" method="POST" class="flex gap-4" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
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
          <button type="submit" name="editbtn" class="px-3 py-2 bg-green-500 text-white rounded hover:bg-green-600 ">Add Room</button>
        </div>
        </form>
    </div>
  </div>

  <?php include 'dashIncludes/dash_footer.php'?>