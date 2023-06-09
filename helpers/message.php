<?php if(isset($_SESSION['message'])): ?>
    <div class="absolute bg-green-500 text-white px-4 py-2 rounded-md fixed top-24  right-4 z-50 transition-opacity duration-500" id="success-alert">
      
        <span class="text-lg font-bold">Success!</span>
        <span class="ml-2"><?php echo $_SESSION['message'];?></span>
        <?php 
        unset($_SESSION['message']);
        ?>
 
    </div>
<?php endif; ?>

