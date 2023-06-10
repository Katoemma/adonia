<?php include 'helpers/conutries.php'?>
<?php include 'includes/header.php'?>

<main class=" mx-auto px-2 py-12 bg-yellow-100">

    <div class="flex flex-col md:flex-row-reverse  justify-center">
        <div class="bg-gray-100 shadow-lg rounded-lg p-6 mt-8 md:mt-0">
            <h2 class="text-2xl font-bold mb-6">Room Order Summary</h2>

            <img src="images/bed.jpg" alt="" class="w-full max-w-xs rounded-lg mr-4">

            <div class="room-details flex mb-8">
                <div class="flex flex-col">
                <h3 class="text-xl font-bold mb-2">Room Details</h3>
                <p><strong>Room Type:</strong> Deluxe Room</p>
                <p><strong>Check-in Date:</strong> 2023-06-15</p>
                <p><strong>Check-out Date:</strong> 2023-06-20</p>
                <p><strong>Number of Guests:</strong> 2</p>
                </div>
            </div>
            
            <div class="total-price mb-8">
                <h3 class="text-xl font-bold mb-2">Total Price</h3>
                <p><strong>Room Price per Night:</strong> $100</p>
                <p><strong>Total Nights:</strong> 5</p>
                <p><strong>Total Price:</strong> $500</p>
            </div>
        </div>




        <!-- Booking Form -->
        <div class="w-full md:w-1/2 bg-gray-100 shadow-lg rounded-lg px-6 py-8 mt-8 md:mt-0">
            <h3 class="text-xl font-bold mb-4">Guest Details</h3>
            <form class="space-y-4">
                <div class="flex flex-col space-y-4">
                    <label for="name" class="block text-gray-700 font-medium">First Name</label>
                    <input type="text" id="name" name="name" class="border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="name" class="block text-gray-700 font-medium">First Name</label>
                    <input type="text" id="name" name="name" class="border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="name" class="block text-gray-700 font-medium">phone</label>
                    <input type="tel" id="name" name="name" class="border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="flex flex-col space-y-4">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Choose a country</option>
                        <?php
                        foreach ($country_list as $code => $name) {
                            echo "<option value=\"$code\">$name</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="flex flex-col space-y-4">
                <label for="name" class="block text-gray-700 font-medium">Special Request</label>
                <textarea name="name" class="border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                
                <div class="flex justify-center md:justify-start">
                <button type="submit" class="w-full md:w-auto px-8 py-2 bg-orange-500 text-white rounded-lg hover:bg-blue-500">Check Out</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'?>
