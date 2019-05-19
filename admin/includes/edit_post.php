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