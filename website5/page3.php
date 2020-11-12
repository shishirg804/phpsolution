<?php
      $arr = array(
        "name" => "brad traversy",
        "age" => "133",
        "email" => "brad@gmail..com"
    );

    // user serialize if want to store data like an array or object
    $user=serialize($arr);

     setcookie('user',$user,time()+(8600*30));

    //  TO USE THE COOKIE
    $user_data=unserialize($_COOKIE['user']);

    print_r($user_data);
?>