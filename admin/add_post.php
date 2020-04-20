<?php include 'includes/header.php';?>

    <form method="post" action="add_post.php">
        <div class="form-group">
            <label>Post Title</label>
            <input name="title" type="text" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Post Body</label>
            <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <option>News</option>
                <option>Events</option>
            </select>
        </div>
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
        </div>
        <div class="form-group">
            <label>Tags</label>
            <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
        </div>

        <div>
            <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
        <br>


    </form>

<?php include 'includes/footer.php';?>