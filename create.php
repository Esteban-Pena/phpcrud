<?php include "header.php"?>

<?php

if(isset($_POST['create']))
    {
        $topic = $_POST['topic'];
        $words = $_POST['words'];

        $query = "INSERT INTO posts(topic, words) VALUES ('{$topic}', '{$words}')";
        $new_posts = mysqli_query($conn,$query);
    }
?>

<h1 class= "text-center"> Add Post details </h1>

<div class="container">
<form action="" method="post">
  <div class="form-outline mb-4">
    <input type="text" name="topic" class="form-control" />
    <label class="form-label" for="topic">Topic</label>
  </div>
  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="words" rows="4"></textarea>
    <label class="form-label" for="words">Message</label>
  </div>
  <!-- Submit button -->
  <button type="submit" name="create" value="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class = "container text-center mt-5">
    <a href = "home.php" class = "btn btn-warning mt-5"> Back </a>
</div>

<?php include "footer.php" ?>
