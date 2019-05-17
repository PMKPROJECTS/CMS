<?php  include "includes/header.php";

?>
<body>

    <!-- Navigation -->
  <?php  include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
 
            <!-- Blog Entries Column -->
            
            <?php 
                    $query = "SELECT * FROM posts";
                    $display_posts = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($display_posts))
                    {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        //$post_title = $row['post_title'];
                ?>
                   
                   
                   <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                

            </div>
                   
           
                   
                 <?php   }//while loop
                  
                    ?>

            

            <!-- Blog Sidebar Widgets Column -->
            <?php  include "includes/sidebar.php";?>
            
          

        </div>
        <!-- /.row -->

        <hr>
    

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>