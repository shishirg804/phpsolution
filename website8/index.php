<?php
    require('config/config.php');
    require('config/db.php');

    $query='SELECT * FROM posts ORDER BY createdAt DESC';
    // Get the result
    $result=mysqli_query($connection,$query);

    // Fetch data
    $posts= mysqli_fetch_all($result,MYSQLI_ASSOC);
  
    // Free result from memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($connection);

?>


<?php include 'inc/header.php';?>
<div class="container">
  <h1>Posts</h1>
  <?php foreach($posts as $post): ?>
  <!-- <div class="well"> -->
  <h3><?php echo $post['title'];?></h3>
  <p>Created on <?php echo  $post['createdAt']; ?> By <?php echo $post['author'];?>
  <p><?php echo $post['body'];?></p>
  <a class='btn btn-danger' href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id'];?>">Read More</a>
  <!-- </div> -->
  <?php endforeach;?>
</div>
<?php include 'inc/footer.php';?>