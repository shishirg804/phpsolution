<?php

    if(isset($_POST['submit'])){
   

        $username=htmlentities($_POST['username']);

        // set cookie for one hour
        setcookie('username',$username,time()+3600);//name,value,expires

        header('Location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-default navbar-dark bg-dark">
    <!-- <div class="container"> -->
    <div class="navbar-header">
      <a href="index.php" class="navbar-brand">Cookies</a>
    </div>
    <!-- </div> -->
  </nav>
  <br />
  <div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control"
          value="<?php echo isset($_POST['username']) ? $username : ''; ?>">
      </div>


      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>