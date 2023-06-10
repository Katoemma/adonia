<!--footer  -->
<footer class="bg-gradient-to-tr from-orange-500 to-rose-400 text-white py-12 px-2">
  <div class="container mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full md:w-1/4 lg:w-1/5">
      <img src="images/logoo.png" alt="Logo" class="w-32">
    </div>
    <div class="w-full md:w-2/4 lg:w-3/5 mt-8 md:mt-0">
      <nav class="flex justify-center space-x-6">
        <a href="#" class="text-white">Home</a>
        <a href="#" class="text-white">Rooms</a>
        <a href="#" class="text-white">Services</a>
        <a href="#" class="text-white">About Us</a>
        <a href="#" class="text-white">Contact</a>
      </nav>
      <div class="flex justify-center space-x-6 mt-6">
        <a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
        <a href="#" class="text-white"><i class="fa fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fa fa-instagram"></i></a>
        <a href="#" class="text-white"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
    <div class="w-full md:w-1/4 lg:w-1/5 mt-8 md:mt-0">
      <form class="flex">
        <input type="email" placeholder="Subscribe to our newsletter" class="w-full bg-white text-black rounded-l py-2 px-4 focus:outline-none">
        <button type="submit" class="bg-red-600 text-white rounded-r py-2 px-4">Subscribe</button>
      </form>
    </div>
    <div class="w-full mt-8 text-center">
      <p>&copy; 2023 Adonia Hotel. All rights reserved.</p>
    </div>
  </div>
</footer>





<!-- Add Swiper library -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>





<!-- Add Swiper library -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>





<script>
  // JavaScript code
  document.getElementById('menu-toggle').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
  });
</script>

<script>
    
 // Step 1: Add the 'number-animate' class to each number element

// Step 2: Define the numberAnimation function
function numberAnimation(entries, observer) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      // Start the number animation
      animateNumber(entry.target);
      observer.unobserve(entry.target); // Stop observing after animation starts
    }
  });
}

// Step 3: Create an instance of the Intersection Observer
var observer = new IntersectionObserver(numberAnimation, { threshold: 0.2 });

// Step 4: Observe the target elements
var numberElements = document.querySelectorAll('.number-animate');
numberElements.forEach(function(element) {
  observer.observe(element);
});

// Number animation function
function animateNumber(element) {
  var startValue = 0;
  var endValue = parseInt(element.innerText);
  var duration = 2000; // Animation duration in milliseconds
  var range = endValue - startValue;
  var currentIteration = 0;
  var increment = Math.ceil(range / (duration / 16)); // Update every 16ms (60fps)

  var interval = setInterval(function() {
    currentIteration += increment;
    if (currentIteration >= range) {
      clearInterval(interval);
      element.innerText = endValue;
    } else {
      element.innerText = startValue + currentIteration;
    }
  }, 16);
}


</script>

</body>
</html>