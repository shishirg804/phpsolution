<?php

if(isset($_GET['name']) && isset($_GET['email'])){
    $name = htmlentities($_GET['name']);
    // print_r("$name");
    echo "$_GET[name] : $_GET[email]";
}

// if(isset($_POST['name']) && isset($_POST['email'])){
//     $name = htmlentities($_POST['name']);
//     print_r("$name");
//     echo "$_POST[name] : $_POST[email]";
// }

// it works when method is post or get no matter
// if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
//     $name = htmlentities($_REQUEST['name']);
//     print_r("$name");
//     echo "$_REQUEST[name] : $_REQUEST[email]";
// }

// server query string
        // echo $_SERVER['QUERY_STRING'];  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>

</head>
<body>
   
<!-- <form method="POST" action="get-post.php"> -->
    
    <form method="GET" action="get-post.php">
    <div class="">
            <label for="name">Name</label>
            <input type="text" name='name'/>
        </div>
    <div class="">
            <label for="email">Email</label>
            <input type="text" name='email'/>
        </div>
        <button type="submit">Submit</button>
    </form>
    <ul>
        <li><a href="get-post.php?name=varun&email=varunhhhrahul@gmail.com"> varun</a></li>
    </ul>
    <?php echo "$name's profile"; ?>
</body>
</html>