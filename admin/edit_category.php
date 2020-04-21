<?php include 'includes/header.php';?>

<?php
$id = $_GET['id'];

//Create DB Object
$db = new Database();

//Create query
$query = "SELECT * FROM categories WHERE id=".$id;
//Run query
$category = $db->select($query)->fetch_assoc();

//Create query
$query = "SELECT * FROM categories";
//Run query
$categories = $db->select($query);

?>

<?php
if (isset($_POST['submit'])) {
    //Assign Vars
    $name = mysqli_real_escape_string($db->link, $_POST['name']);

    //Simple Validation
    if ($name == '') {
        // Set error
        $error = 'Please fill out all required field';
    } else {
        //Create Query
        $query = "UPDATE categories
                SET name = '$name'
                WHERE id =".$id;

//       var_dump($query);
        //Run Query
        $update_row = $db->update($query);

    }
}
?>


<form method="post" action="edit_category.php?id=<?php echo $id ?>">
    <div class="form-group">
        <label>Category Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-primary" value="Submit">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <input name="delete" type="submit" class="btn btn-danger" value="Delete">
    </div>
    <br>
</form>

<?php include 'includes/footer.php';?>
