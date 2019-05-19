<?php 
if(isset($_POST['create_post']))
{
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];
    
    $post_image = $_FILES['image']['name'];
    $post_image_tmp = $_FILES['image']['tmp_name'];
    
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;

    //image uploading function
    move_uploaded_file($post_image_tmp,"../images/$post_image");
    
    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status)";
    $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}',{$post_comment_count},'{$post_status}' )";
    
    $add_post = mysqli_query($connection, $query);
    
    if(!$add_post)
    {
        die("add post query failed". mysqli_error($connection));
    }
}




?>
   

   
   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <labl for="title">Post Title</labl>
        <input type="text" class="form-control" name="post_title">
    </div>
    
    <div class="form-group">
        <labl for="post_category">Post Category Id</labl>
        <input type="text" class="form-control" name="post_category_id">
    </div>
    
    <div class="form-group">
        <labl for="post_author">Post Author</labl>
        <input type="text" class="form-control" name="post_author">
    </div>
    
    <div class="form-group">
        <labl for="post_status">Post Status</labl>
        <input type="text" class="form-control" name="post_status">
    </div>
    
    <div class="form-group">
        <labl for="post_image">Post Image</labl>
        <input type="file" class="form-control" name="image">
    </div>
    
    <div class="form-group">
        <labl for="post_tags">Post Tags</labl>
        <input type="text" class="form-control" name="post_tags">
    </div>
    
    <div class="form-group">
        <labl for="post_content">Post Content</labl>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
<!--        <input type="text" class="form-control" name="post_content">-->
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
    </div>
    
</form>