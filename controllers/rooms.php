<?php
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $databasePath = $rootPath . '/adonia/database/db.php';

    // Include the database connection file
    include($databasePath);
    include $rootPath . '/adonia/helpers/validateRoom.php';

    $table = 'rooms';
    $rooms = selectAll($table);

    $id ='';
    $room_no = '';
    $type = '';
    $capacity = '';
    $price = '';

    if (isset($_GET['id'])) {
        $room = selectOne($table, ['id'=> $_GET['id']]);
       
        $id = $room['id'];
        $room_no = $room['room_no'];
        $type = $room['type'];
        $capacity = $room['capacity'];
        $price = $room['price'];

    }
//editing room
    if (isset($_POST['editbtn'])) {
        $errors = validateRoom($_POST);
       

        if (!empty($_FILES['image']['name'])){
            $image_name = time() . '_'. $_FILES['image']['name'];
            $upload_folder = 'uploads/rooms/'. $image_name;
    
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $upload_folder);
    
            if ($result) {
                $_POST['image'] = $image_name;
    
            } else{
                array_push($errors, "Failed to upload image");
            }
        } else{
            array_push($errors, 'Image is required!!');
        }
    
        if (count($errors)=== 0) {
            $id = $_POST['id'];
            unset($_POST['editbtn'], $_POST['id']);
             
            $room = update($table, $id , $_POST);

            $_SESSION['message'] = 'Room details updated successfully';

            header('location:dashboard_rooms.php');
            exit();
        }
        $room_no = $_POST['room_no'];
        $type = $_POST['type'];
        $capacity = $_POST['capacity'];
        $price = $_POST['price'];
    }

    //registering a room
    if (isset($_POST['add-room'])) {
        $errors = validateRoom($_POST);

        if (!empty($_FILES['image']['name'])){
            $image_name = time() . '_'. $_FILES['image']['name'];
            $upload_folder = 'uploads/rooms/'. $image_name;
    
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $upload_folder);
    
            if ($result) {
                $_POST['image'] = $image_name;
    
            } else{
                array_push($errors, "Failed to upload image");
            }
        } else{
            array_push($errors, 'Image is required!!');
        }
    
        if (count($errors)=== 0) {
            unset($_POST['add-room']);
            $room = create($table, $_POST);

            $_SESSION['message'] = 'Room details added successfully';

            header('location:dashboard_rooms.php');
            exit();
        }

        $room_no = $_POST['room_no'];
        $type = $_POST['type'];
        $capacity = $_POST['capacity'];
        $price = $_POST['price'];
    }
//delete a room 
if (isset($_GET['del_id'])) {
   
    $id =$_GET['del_id'];
    $room = delete($table, $id);

    $_SESSION['message'] = 'Room deleted successfully';

    header('location:dashboard_rooms.php');
    exit();
}
   