<?php
    function validateLogin($admin){
        $errors = array();
        if(empty($_POST['email'])){
            array_push($errors, 'Email is required !');
        }
        if(empty($_POST['password'])){
            array_push($errors, 'Password is required !');
        }
        
        return $errors;
    }