<?php
    session_start();
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h2>Hello to page 3, <?php echo $name;?></h2>
</body>
</html>