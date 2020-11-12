<?php

    if(isset($_POST['submit'])){
        session_start();//start a session

        $_SESSION['name']=htmlentities($_POST['name']);
        $_SESSION['email']=htmlentities($_POST['email']);

        header("Location: page2.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-dark bg-dark">
        <!-- <div class="container"> -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">PHP Sessions</a>
            </div>
        <!-- </div> -->
    </nav>
    <br/>
    <div class="container">	
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>

	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>