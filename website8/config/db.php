<?php

    // create connection
    $connection= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    // Check connection
    if(mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect to mysql'. mysqli_connect_errno();
    }


?>