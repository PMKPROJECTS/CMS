<<<<<<< HEAD
<?php  include "includes/admin_header.php";?>
=======
<?php  include "includes/header.php";?>

>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f
    <div id="wrapper">

        <!-- Navigation -->
        
<<<<<<< HEAD
        <?php  include "includes/admin_navigation.php";?>
=======
        <?php  include "includes/navigation.php";?>
>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f

    
       
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author name</small>
                        </h1>
<<<<<<< HEAD
<!--                        add categories form-->
                        <div class="col-xs-6">
                       <?php  insert_categories();  ?>
                        <form action="" method="POST">
=======
                        
                        <div class="col-xs-6">
                        <form action="">
>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f
                           <label for="cat-title">Add Category</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
<<<<<<< HEAD
                        
                        <!--     updating category-->
                       
                           <?php
                            if(isset($_GET['edit']))
                            {
                                $cat_id_edit = $_GET['edit'];
                                include "includes/update_categories.php";
                            }
                            ?>
                        
                            
                        </div>
<!--                        displaying categories-->
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
//                                    displaying categories query
                                    findAllCategories();
                                    ?>
                                    
                                    <?php 
//                                    deleting categories query
                                   deleteCategories();
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        
                    
                    
            </div>
=======
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<!--   footer-->
<<<<<<< HEAD
<?php include "includes/admin_footer.php"; ?>
=======
<?php include "includes/footer.php"; ?>
>>>>>>> 9c2b4a7d3f3db2da7b2e1c2ae17e100f75f8348f
