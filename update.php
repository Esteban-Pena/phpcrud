<!-- Footer -->
<?php include "header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['forum_id']))
    {
      $forum_id = $_GET['forum_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM posts WHERE id = $forum_id ";
      $view_posts= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_posts))
        {
            $topic = $row['topic'];
            $words = $row['words'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
        $topic = $_POST['topic'];
        $words = $_POST['words'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE posts SET topic = '{$topic}' , words = '{$words}'  WHERE id = $forum_id";
      $update_posts = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Post updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Student Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="topic" >Topic</label>
        <input type="text" name="topic" class="form-control" value="<?php echo $topic  ?>">
      </div>

      <div class="form-group">
        <label for="words" >Words</label>
        <input type="text" name="words"  class="form-control" value="<?php echo $words  ?>">
      </div>
       

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "footer.php" ?>