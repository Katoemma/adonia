<?php include 'controllers/booking.php'?>
<?php include 'includes/header.php'?>

<main class="container mx-auto my-8">
  <h2 class="text-3xl font-bold mb-8">Available Rooms</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

  <?php foreach ($rooms as $key => $room):?>
    <!-- Room Card 1 -->
    <div class="bg-white shadow-lg rounded-lg">
      <img src="<?php echo 'dashboard/uploads/rooms/'.$room['image']?>" alt="Room 1" class="w-full h-48 object-cover rounded-t-lg">
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2"><?php echo $room['type']?> Room</h3>
        <p class="text-gray-600 mb-4">Spacious room with a comfortable king-size bed.</p>
        <p class="text-gray-800 font-bold">UGX <?php echo $room['price']?> per night</p>
        <a href="single.php" class="mt-4 inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">Book Now</a>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</main>

<?php include 'includes/footer.php'?>
