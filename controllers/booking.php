<?php
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $databasePath = $rootPath . '/adonia/database/db.php';

    // Include the database connection file
    include($databasePath);
    include $rootPath . '/adonia/helpers/validateRoom.php';

    $table = 'booking';
    $rooms = selectAll($table);

    if (isset($_POST['search_btn'])) {
        
        
        searchRooms($checkInDate, $checkOutDate);
    }