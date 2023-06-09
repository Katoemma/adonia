<?php
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $databasePath = $rootPath . '/adonia/database/db.php';

    // Include the database connection file
    include($databasePath);
    include $rootPath . '/adonia/helpers/validateUser.php';

    $table = 'admin';
    $admins = selectAll($table);

    $email = '';
    $password ='';

    if (isset($_POST['login-btn'])) {
        // Handle form submission
        $errors = validateLogin($_POST);

        if (count($errors)===0) {
            $admin = selectOne($table, ['email' => $_POST['email']]);
        
            if ($admin && $admin['password']){

                $_SESSION['id'] = $admin['id'];
                $_SESSION['username'] = $admin['fname'] . ' '. $admin['lname'] ;
                $_SESSION['email'] = $admin['email'];
                $_SESSION['message'] = 'You are logged in';
                $_SESSION['type'] = 'success';
            
                // if($_SESSION['id']){
                header('location:dashboard/dashboard.php');
                // }else{
                // header('Location: index.php');
                // }
                exit();
        
            } else {
                array_push($errors, 'Wrong credentials');
            }
            $email = $_POST['email'];
            $password =$_POST['password'];
        }
    }
?>
