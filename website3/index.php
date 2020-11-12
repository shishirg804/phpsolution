<?php

    // Error message
    $msg='';
    $msg_class='';

    if(filter_has_var(INPUT_POST,'submit')){
        // Extracting variables
        $email=htmlspecialchars($_POST['email']);
        $name=htmlspecialchars($_POST['name']);
        $message=htmlspecialchars($_POST['text_message']);

        // checking required fields
        if(!empty($email)&&!empty($name)&&!empty($message)){
            // Passed
            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                $msg='Please use a valied email!';
                $msg_class='alert-danger';
            }else{
                
                // setting email
                $toEmail='varunhhhrahul@gmail.com';
                $subject='Contact request form '.$name;
                $body= "<h2>Contact Request Form</h2>
                <h4>Name</h4>: <i>$name</i><br>
                <h4>Email</h4>: <i>$email</i><br>
                <h4>Message</h4>: <i>$message</i><br>
                ";

                //Email Headers
                $headers= "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";
                
                // Additional Headers
                $headers .= "From: ".$name. "<".$email.">". "\r\n";
                if(mail($toEmail,$subject,$body,$headers)){
                    $msg='Email Sent!';
                    $msg_class='alert-success';
                }else{
                    $msg='Email failed to be sent!';
                    $msg_class='alert-danger';
                }
            }
        }else{
            // Failed
            $msg='Please fill all the details';
            $msg_class='alert-danger';
        }

    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-dark bg-dark">
        <!-- <div class="container"> -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Contact Us</a>
            </div>
        <!-- </div> -->
    </nav>
    <div class="container">	
    	<?php if(strlen($msg)>0): ?>
    		<div class="alert <?php echo $msg_class; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Message</label>
	      	<textarea name="text_message" class="form-control"><?php echo isset($_POST['text_message'])? $message:''?></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>