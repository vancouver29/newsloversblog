<?php include 'includes/header.php';?>

<?php
$id = $_GET['id'];

//Create DB Object
$db = new Database();

//Create query
$query = "SELECT * FROM posts WHERE id=".$id;
//Run query
$post = $db->select($query)->fetch_assoc();

//Create query
$query = "SELECT * FROM categories";
//Run query
$categories = $db->select($query);

?>

<?php
if (isset($_POST['submit'])) {
    //Assign Vars
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body  = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    //Simple Validation
    if ($title == '' || $body == '' || $category == '' || $author == '') {
        // Set error
        $error = 'Please fill out all required fields';
    } else {
        //Create Query
        $query = "UPDATE posts
                SET 
                title = '$title',
                body = '$body',
                category = '$category',
                author = '$author',
                tags = '$tags'
                WHERE id = ".$id;

//        var_dump($query);
        //Run Query
        $update_row = $db->update($query);

    }
}
?>

<?php
if (isset($_POST['delete'])) {
    //Create Query
    $query = "DELETE FROM posts WHERE id = ".$id;
    //Run Query
    $delete_row = $db->delete($query);
}
?>


    <form method="post" action="edit_post.php?id=<?php echo $id; ?>">
        <div class="form-group">
            <label>Post Title</label>
            <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title'];?>">
        </div>
        <div class="form-group">
            <label>Post Body</label>
            <textarea name="body" class="form-control" placeholder="Enter Post Body" ><?php echo $post['body'];?></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <?php while ($row = $categories->fetch_assoc()): ?>
                    <?php if ($row['id'] == $post['category']) {
                        $selected = 'selected';
                    } else {
                        $selected = '';
                    }
                    ?>
                    <option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <!--                example:    <option>Events</option>-->
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
        </div>
        <div class="form-group">
            <label>Tags</label>
            <input name="tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
        </div>

        <div>
            <input name="submit" type="submit" class="btn btn-primary" value="Submit">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
            <input name="delete" type="submit" class="btn btn-danger" value="Delete">
        </div>
        <br>


    </form>

<?php include 'includes/footer.php';?>