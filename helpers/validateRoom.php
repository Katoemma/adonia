<?php

function validateRoom($room){
    $errors = array();

    if (empty($_POST['room_no'])) {
        array_push($errors, 'Room Number is required');
    }
    if (empty($_POST['type'])) {
        array_push($errors, 'Room Type is required');
    }
    if (empty($_POST['capacity'])) {
        array_push($errors, 'Room Capaity is required');
    }
    if (empty($_POST['price'])) {
        array_push($errors, 'Room Price is required');
    }
    
    $existingRoom = selectOne('rooms', ['room_no'=>$_POST['room_no']]);

    if ($existingRoom) {
        array_push($errors, 'Room Number exists');
    }

    return $errors;
}