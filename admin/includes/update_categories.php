                         <form action="" method="POST">
                           <label for="cat-title">Update Category</label>  
                           <?php 
                           if(isset($_GET['edit']))
                           {
                            $cat_id_edit = $_GET['edit'];

                            $query = "SELECT * FROM categories WHERE cat_id = $cat_id_edit";
                                    $editing_categories = mysqli_query($connection,$query);
                                    while($row=mysqli_fetch_assoc($editing_categories))
                                    {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                               ?>
                       
                            <div class="form-group">
                                <input value= "<?php if(isset($cat_title)) {echo $cat_title;}?>" type="text" class="form-control" name="cat_title">
                            </div>
                           
                        <?php     }//while
                           }//isset
                           
                           
                           ?>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
                            </div>
                        </form>
                             <?php 
//                                    updating categories query
                                    if(isset($_POST['update_category']))
                                    {
                                        $get_editing_cat_title = $_POST['cat_title'];
                                        $query = "UPDATE categories SET cat_title = '{$get_editing_cat_title}' WHERE cat_id = {$cat_id_edit}";
                                        $update_category = mysqli_query($connection, $query);
                                        if(!$update_category)
                                        {
                                            die("Update Query Failed" . mysqli_error($connection));
                                        }
                                        header("Location: categories.php");
                                    }
                                    ?>