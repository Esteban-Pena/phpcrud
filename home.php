<?php include "header.php"?>
<div class="container">
        <h1 class = "text-center">West-MEC Fourm</h1>

        <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">
            <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="create.php">Ask Question</a>

                  <?php

        $query="SELECT * FROM posts";
        $view_posts = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($view_posts)){
            $id = $row['id'];
            $topic = $row['topic'];
            $date = $row['reg_date'];


          echo "<div class='card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0'>";
           echo "<div class='row align-items-center'>";
           echo "<div class='col-md-8 mb-3 mb-sm-0'>";
           echo  "<h5>";
           echo   "<a href='view.php?forum_id={$id}' class='text-primary'>{$topic}</a>";
           echo  "</h5>";
           echo   "<p class='text-sm'><span class='op-6'>Posted at</span> <a class='text-black' href='#'>{$date}</a></p>";
           echo   "</div>";
           echo  "<div class='col-md-4 op-7'>";
           echo    "<div class='row text-center op-7'>";
           echo     "<div class'text-center'> <a href='view.php?forum_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'> </i> View</a> </div>";
           echo "<div class'text-center'> <a href='update.php?forum_id={$id}' class='btn btn-secondary'> <i class='bi bi-eye'> </i> EDIT</a> </div>";
           echo    "<div class'text-center'> <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-eye'> </i> DELETE</a> </div>"; 
           echo    "</div>";
           echo  "</div>";
           echo "</div>";
           echo "</div>";
        }
            ?>
        </div>
      </div>
    </div>

        <?php include "footer.php"?>
        