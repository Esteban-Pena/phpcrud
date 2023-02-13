<?php include "header.php" ?>

<h1 class="text-center">Post Details</h1>
    <div class="container">

                    <?php 
                        if (isset($_GET['forum_id'])) {
                            $forum_id = $_GET['forum_id'];

                                $query="SELECT * FROM posts WHERE id = {$forum_id} ";
                                $view_posts = mysqli_query($conn,$query);

                                while ($row= mysqli_fetch_assoc($view_posts))
                                {
                                    $topic = $row['topic'];
                                    $words = $row['words'];
                        
                                    echo "<div class='card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0'>";
                                    echo "<div class='row align-items-center'>";
                                    echo "<div class='col-md-8 mb-3 mb-sm-0'>";
                                    echo  "<h5>";
                                    echo   "<h2>{$topic}</h2>";
                                    echo  "</h5>";
                                    echo   "</div>";
                                    echo  "<div class='col-md-4 op-7'>";
                                    echo    "<div class='row text-center op-7'>";
                                    echo    "</div>";
                                    echo  "</div>";
                                    echo "</div>";
                                    echo "</div>";

                                    //text
                                    echo    "<div class='card'>";
                                    echo    "<p class='card-text'>{$words} </p>";
                                    echo    "</div>";
                                }
                        }
                    ?>

        </div>

        <div class="container text-center mt-5">
            <a href ="home.php" class="btn btn-warning mt-5"> Back </a>
        </div>

        <?php include "footer.php"?>