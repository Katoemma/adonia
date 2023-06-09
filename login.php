<?php include 'controllers/users.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Adonia Hotel - Login</title>
</head>

<body class="p-4 bg-gray-100">

  <div class="flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-md p-8 max-w-md w-full">
      <div class="flex flex-col items-center p-4">
        <img src="images/logoo.png" alt="logo" class="w-24">
      </div>
        <?php include 'helpers/errors.php'?>
      <form action="login.php" method="post">
        <div class="mb-4">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $email?>" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Enter Admin email">
        </div>

        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" value="<?php echo $password?>" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Enter Password">
        </div>
        <button type="submit" class="w-full bg-yellow-400 text-white rounded-md py-2 font-bold" name="login-btn">Log in</button>
      </form>

    </div>
  </div>

</body>

</html>
