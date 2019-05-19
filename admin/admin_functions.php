<?php 

function insert_categories(){   
    global $connection;
    if(isset($_POST['submit']))
    {
        $cat_title = $_POST['cat_title'];
        if($cat_title == " " || empty($cat_title))
        {
            echo "This feild should not be empty";
        }
        else
        {
            $query = "INSERT INTO categories (cat_title)";
            $query .= "VALUES ('$cat_title')";
            $adding_category = mysqli_query($connection, $query);
            if(!$adding_category)
            {
                die("adding category failed".mysqli_error($connection));
            }
        }
    }//isset function
}// insert_categories function

function findAllCategories(){
    global $connection;
    $query = "SELECT * FROM categories";
    $display_categories = mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($display_categories))
    {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
    }
}

function deleteCategories()
{
    global $connection;
    if(isset($_GET['delete']))
    {
        $get_deleteing_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$get_deleteing_cat_id}";
        $delete_category = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}
?>