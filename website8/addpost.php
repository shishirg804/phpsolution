<?php
    require('config/config.php');
    require('config/db.php');
   

    if(isset($_POST['submit'])){
         //  Get form data
         $title=mysqli_real_escape_string($connection,$_POST['title']);
         $body=mysqli_real_escape_string($connection,$_POST['body']);
         $author=mysqli_real_escape_string($connection,$_POST['author']);

         $query="INSERT into posts(title,body,author) VALUES('$title','$body','$author')";

         if(mysqli_query($connection,$query)){
             header("LOCATION: ".ROOT_URL." ");
         }else{
             echo "Error: ". mysqli_error($connection);
         }
    }
     

    // $query='SELECT * FROM posts';
    // // Get the result
    // $result=mysqli_query($connection,$query);

    // // Fetch data
    // $posts= mysqli_fetch_all($result,MYSQLI_ASSOC);
  
    // // Free result from memory
    // mysqli_free_result($result);

    // // Close connection
    // mysqli_close($connection);

?>


<?php include 'inc/header.php';?>
<div class="container">
  <h1>Add Post</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name='title' class="form-control">
      <label for="title">Body</label>
      <textarea name='body' class="form-control"></textarea>
      <label for="title">Author</label>
      <input type="text" name='author' class="form-control">
      <br />
      <button name='submit' type='submit' class='btn btn-primary'>Submit</button>
    </div>
  </form>
</div>
<?php include 'inc/footer.php';?>