<?php
    
    $dbConnection = mysqli_connect(
        'localhost',
        'root',
        '',
        'epp_faveo'
    );

    if (!$dbConnection)
        die('Failed to connect to database!');