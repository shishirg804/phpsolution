<?php
    session_start();
    $name=isset($_SESSION['name'])?$_SESSION['name']:'Guest';
    $email=isset($_SESSION['email'])?$_SESSION['email']:'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Thank You <?php echo $name?></h1>
    <a href="page3.php">Go to page 3.</a>
</body>
</html>