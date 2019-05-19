<?php  include "includes/admin_header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
        
        <?php  include "includes/admin_navigation.php";?>

    
       
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">
                            Welcome to admin
                            <small>Author name</small>
                        </h1> 
                       
              <?php 
//                used to display all posts
//                    refer includes/view_all_posts.php
                if(isset($_GET['source'])) {
                    $source = $_GET['source'];
                }else
                {
                    $source = ''; //must do it to avoide warnings
                }
                
                switch($source)
                {
                    case 'add_post';
                    include "includes/add_post.php";
                    break;
                        
                    case 'edit_post';
                    include "includes/edit_post.php";
                    break;
                        
                    case '34';
                    echo "NICE 34";
                    break;
                        
                    default:
                    include "includes/view_all_posts.php";
                    break;
                }
                ?>
                    
                    
            </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<!--   footer-->
<?php include "includes/admin_footer.php"; ?>