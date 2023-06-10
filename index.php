<?php include 'includes/header.php'?>
<!-- HTML structure -->
<section class="hero">
  <div class="swiper-container overflow-hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-cover bg-center h-screen" style="background-image: url('images/hero-2.jpg');">
        <div class="swiper-slide-content flex flex-col justify-center items-center text-white text-center h-screen"style="background:rgba(0,0,0,0.5);">
          <h2 class="text-3xl font-bold mb-4 md:text-7xl ">Welcome to Adonia Hotel</h2>
          <p class="text-lg">Experience luxury and comfort at its finest.</p>
          <a href="#" class="btn btn-primary text-xl font-bold bg-orange-600 px-6 py-2 md:px-8 md:py-4 rounded-lg mt-8">Book Now</a>
        </div>
      </div>
      <div class="swiper-slide bg-cover bg-center h-screen" style="background-image: url('https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg');">
        <div class="swiper-slide-content flex flex-col justify-center items-center text-white text-center h-screen"style="background:rgba(0,0,0,0.5) ;">
          <h2 class="text-3xl font-bold mb-4">Unwind in Our Relaxing Rooms</h2>
          <p class="text-lg">Indulge yourself in our elegant and spacious rooms.</p>
          <a href="#" class="btn btn-primary mt-8">Book Now</a>
        </div>
      </div>
      <div class="swiper-slide bg-cover bg-center h-screen" style="background-image: url('https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg');">
        <div class="swiper-slide-content flex flex-col justify-center items-center text-white text-center h-screen" style="background:rgba(0,0,0,0.5) ;">
          <h2 class="text-3xl font-bold mb-4">Discover Our Top-Class Services</h2>
          <p class="text-lg">Let us take care of all your needs during your stay.</p>
          <a href="#" class="btn btn-primary mt-8">Book Now</a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- check in -->
<section class="checkin-section py-16 bg-gray-200 px-4">
  <div class="container mx-auto">
    <div class="max-w-lg mx-auto">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-orange-500">Search Availability</h2>
      <form class="flex flex-wrap justify-center" action="search.php" method="post">
        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
          <label for="checkin" class="block text-gray-700 mb-2">Check-in Date:</label>
          <input type="date" id="checkin" name="check_in" class="w-full bg-gray-100 border-2 border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-primary" required>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
          <label for="checkout" class="block text-gray-700 mb-2">Check-out:</label>
          <input type="date" id="checkout" name="check_out" class="w-full bg-gray-100 border-2 border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-primary" required>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
          <label for="adults" class="block text-gray-700 mb-2">Adults:</label>
          <input type="number" id="adults" name="adults" class="w-full bg-gray-100 border-2 border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-primary" min="1" required>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
          <label for="children" class="block text-gray-700 mb-2">Children:</label>
          <input type="number" id="children" name="children" class="w-full bg-gray-100 border-2 border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-primary" min="0" required>
        </div>
        <div class="w-full px-2 mb-4">
          <button type="submit" class="w-full bg-black text-white rounded py-2 px-4 hover:bg-primary-dark transition-colors duration-300" name="search_btn">Search</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- about us -->
<section class="about-section py-16 px-4">
  <div class="container mx-auto flex flex-wrap items-center">
    <div class="w-full md:w-1/2 lg:w-3/5">
      <div class="max-w-lg mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-orange-500">About Adonia Hotel</h2>
        <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="flex items-center mb-4">
            <div class="w-1/3 text-center">
                <h3 class="text-2xl font-bold text-primary number-animate" id="clientsCount">500+</h3>
                <p class="text-gray-600">Clients</p>
            </div>
            <div class="w-1/3 text-center">
                <h3 class="text-2xl font-bold text-primary number-animate" id="roomsCount">1000+</h3>
                <p class="text-gray-600">Rooms</p>
            </div>
            <div class="w-1/3 text-center">
                <h3 class="text-2xl font-bold text-primary number-animate" id="staffCount">200+</h3>
                <p class="text-gray-600">Staff</p>
            </div>
        </div>


      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-2/5 mt-8 md:mt-0">
        <div class="grid grid-cols-2 gap-4">
            <img src="https://cdn.dirigible.studio/wp-content/uploads/sites/84/2016/03/22124727/Presidential_Suite_Bedroom_NEW.jpg.webp" alt="Hotel Image 1" class="w-full h-full rounded-lg shadow-md object-cover object-center col-span-1">
            <img src="https://cdn.dirigible.studio/wp-content/uploads/sites/84/2016/03/22124727/Presidential_Suite_Bedroom_NEW.jpg.webp" alt="Hotel Image 2" class="w-full h-full rounded-lg shadow-md object-cover object-center col-span-1">
            <img src="https://cdn.dirigible.studio/wp-content/uploads/sites/84/2016/03/22124727/Presidential_Suite_Bedroom_NEW.jpg.webp" alt="Hotel Image 3" class="w-full h-full rounded-lg shadow-md object-cover object-center col-span-2">
        </div>
    </div>



  </div>
</section>

<!--Explore rooms  -->
<section class="room-section py-16 px-4 bg-gray-200">
  <div class="container mx-auto">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center text-orange-500">Explore Our Rooms</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Room Card 1 -->
      <div class="bg-white rounded-lg shadow-md">
        <img src="images/bath2.jpg" alt="Room Image 1" class="w-full h-64 object-cover rounded-t-lg">
        <div class="p-4">
          <h3 class="text-lg font-bold mb-2">Deluxe Room</h3>
          <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="flex justify-between ">
          <a href="#" class="bg-red-600 text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">View Details</a>
            <a href="#" class="bg-black text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Room Card 2 -->
      <div class="bg-white rounded-lg shadow-md">
        <img src="images/bed.jpg" alt="Room Image 2" class="w-full h-64 object-cover rounded-t-lg">
        <div class="p-4">
          <h3 class="text-lg font-bold mb-2">Executive Suite</h3>
          <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="flex justify-between">
          <a href="#" class="bg-red-600 text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">View Details</a>
            <a href="#" class="bg-black text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Room Card 3 -->
      <div class="bg-white rounded-lg shadow-md">
        <img src="https://luxurylondon.co.uk/wp-content/uploads/2022/08/browns-hotel-mayfair-london-review-04.jpg" alt="Room Image 3" class="w-full h-64 object-cover rounded-t-lg">
        <div class="p-4">
          <h3 class="text-lg font-bold mb-2">Luxury Suite</h3>
          <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="flex justify-between">
            <a href="#" class="bg-red-600 text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">View Details</a>
            <a href="#" class="bg-black text-white rounded py-2 px-8 hover:bg-primary-dark transition-colors duration-300">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section -->
<section class="services-section py-16 px-4">
  <div class="container mx-auto">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center text-orange-500">Our Services</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Service 1 -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <img src="images/catering.jpg" alt="Catering" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h3 class="text-xl font-bold mb-2">Catering</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Service 2 -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <img src="images/bed.jpg" alt="Rooms" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h3 class="text-xl font-bold mb-2">Rooms</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Service 3 -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <img src="images/party.jpg" alt="Party" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h3 class="text-xl font-bold mb-2">Party</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Service 4 -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <img src="https://www.food-safety.com/ext/resources/eDigest/2022/caterers.jpg?1659729468" alt="Games" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h3 class="text-xl font-bold mb-2">Games</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Service 5 -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <img src="https://www.food-safety.com/ext/resources/eDigest/2022/caterers.jpg?1659729468" alt="Spa" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h3 class="text-xl font-bold mb-2">Spa</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>


<!-- testimonial  -->
<section class="testimonial-section py-16 overflow-hidden bg-gray-200 px-4">
  <div class="container mx-auto">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center text-orange-500">Testimonials</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- Testimonial Card 1 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center mb-4">
              <img src="https://lh3.googleusercontent.com/a-/ACB-R5QJeH9LHTA4Vw3HnhUFpl_DU11ayihqDR5Yp5ER=s40-c-c0x00000000-cc-rp-mo-ba2-br100" alt="User Image 1" class="w-12 h-12 rounded-full object-cover">
              <div class="ml-4">
                <h3 class="text-lg font-bold">Roselyne Ajiko</h3>
                <p class="text-gray-600">New York, USA</p>
                <p class="text-gray-500 text-sm">Graphic Designer</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">Adonis is a great place.After along search for a hotel room in Buliisa town,I was relieved when a hotel personnel told me there was only one  room left. I did not bargain .I simply paid the 40k a night the lady asked for. Adonia's rooms are neat and clean thought not self contained. However the bath rooms are clean and tiked.Generally, Buliisa is a small but beautiful place.I love their streets.</p>
          </div>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center mb-4">
              <img src="https://lh3.googleusercontent.com/a-/ACB-R5SJuBMWLVT9u3I29EPaGH53Xqtag70bXLogVfVhpQ=s40-c-c0x00000000-cc-rp-mo-ba6-br100" alt="User Image 2" class="w-12 h-12 rounded-full object-cover">
              <div class="ml-4">
                <h3 class="text-lg font-bold">Mattia Zonta</h3>
                <p class="text-gray-600">London, UK</p>
                <p class="text-gray-500 text-sm">Marketing Manager</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">
            Hotel Adonia is the best place to stay if you need to stop in Bulisa, either for the night or just for something to eat. The rooms are not so big, but I found them quite clean. Hot water, a big mosquito net, a table to work and a king size</p>
          </div>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center mb-4">
              <img src="https://images.mubicdn.net/images/cast_member/9020/cache-148043-1465730065/image-w856.jpg" alt="User Image 3" class="w-12 h-12 rounded-full object-cover">
              <div class="ml-4">
                <h3 class="text-lg font-bold">David Williams</h3>
                <p class="text-gray-600">Sydney, Australia</p>
                <p class="text-gray-500 text-sm">CEO</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <!-- Add more testimonial cards here -->

      </div>
      <!-- Add pagination bullets -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- blog post -->
<section class="bg-gray-100 py-12 px-4">
  <div class="container mx-auto">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center text-orange-500">Latest Blog Posts</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog post cards go here -->
      <div class="flex flex-col shadow-lg rounded-lg bg-white">
        <img src="https://img.freepik.com/free-photo/online-message-blog-chat-communication-envelop-graphic-icon-concept_53876-139717.jpg" alt="Blog Image 1" class="w-full h-40 object-cover rounded-t-lg">
        <div class="p-6 flex-grow">
          <h3 class="text-xl font-bold mb-2">Blog Post Title</h3>
          <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-primary font-bold">Read more</a>
        </div>
      </div>
      <div class="flex flex-col shadow-lg rounded-lg bg-white">
        <img src="https://img.freepik.com/free-photo/online-message-blog-chat-communication-envelop-graphic-icon-concept_53876-139717.jpg" alt="Blog Image 2" class="w-full h-40 object-cover rounded-t-lg">
        <div class="p-6 flex-grow">
          <h3 class="text-xl font-bold mb-2">Blog Post Title</h3>
          <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-primary font-bold">Read more</a>
        </div>
      </div>
      <div class="flex flex-col shadow-lg rounded-lg bg-white">
        <img src="https://img.freepik.com/free-photo/online-message-blog-chat-communication-envelop-graphic-icon-concept_53876-139717.jpg" alt="Blog Image 3" class="w-full h-40 object-cover rounded-t-lg">
        <div class="p-6 flex-grow">
          <h3 class="text-xl font-bold mb-2">Blog Post Title</h3>
          <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-primary font-bold">Read more</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our location -->
<section class="hotel-map pb-8 px-4">
  <div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Hotel Map</h2>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15948.362256636223!2d31.4128112!3d2.1187933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x176ff74a52061aeb%3A0x7628c83eb3c0dc90!2sHotel%20Adonia!5e0!3m2!1sen!2sug!4v1684166901594!5m2!1sen!2sug" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>



<?php include 'includes/footer.php' ?>