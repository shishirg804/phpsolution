<?php
    require('config/config.php');
    require('config/db.php');

    
    if(isset($_POST['submit'])){
        
        $delete_id=mysqli_real_escape_string($connection,$_POST['id']);
        echo $delete_id;
       $query="DELETE FROM posts WHERE id=$delete_id";

        if(mysqli_query($connection,$query)){
            header("LOCATION: ".ROOT_URL." ");
        }else{
            echo "Error: ". mysqli_error($connection);
        }
   }
    //  get id
    $id=mysqli_real_escape_string($connection,$_REQUEST['id']);
    
    $query="SELECT * FROM posts WHERE id=$id";
    // Get the result
    $result=mysqli_query($connection,$query);

    // Fetch data
    $post= mysqli_fetch_assoc($result);;
  
    // Free result from memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($connection);

?>


<?php include 'inc/header.php'; ?>
<div class="container">
  <a href="<?php echo ROOT_URL; ?>" clas='btn btn-primary'>Back</a>
  <h1><?php echo $post['title'];?></h1>

  <div class="well">
    <!-- <h3><?php echo $post['title'];?></h3> -->
    <small>Created on <?php echo  $post['createdAt']; ?> By <?php echo $post['author'];?>
      <p><?php echo $post['body'];?></p>
      <hr>
      <form class='pull-right' method='post' action="<?php $_SERVER['PHP_SELF'];?>">
        <input type="hidden" name='id' value='<?php echo $post['id'];?>'>
        <button class='btn btn-danger' type='submit' name='submit'>Delete</button>
      </form>
      <a class='btn btn-danger' href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];?>">Edit Post</a>
  </div>

</div>
<?php include 'inc/footer.php';?>