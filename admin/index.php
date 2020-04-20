<?php include 'includes/header.php';?>
<?php
//Create DB Object
$db = new Database();
//Create Query
$query = "SELECT posts.*, categories.name FROM posts
            INNER JOIN categories
            ON posts.category = categories.id";
//Run Query
$posts = $db->select($query);

//Create query
$query = "SELECT * FROM categories";
//Run query
$categories = $db->select($query);
?>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Post ID#</th>
        <th scope="col">Post Title</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Date</th>
    </tr>
    </thead>

    <tbody>

    <?php while ($row = $posts->fetch_assoc()): ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo formatDate($row['date']); ?></td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Category ID#</th>
        <th scope="col">Category Name</th>
    </tr>
    </thead>

    <tbody>
    <?php while ($row = $categories->fetch_assoc()): ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>

<?php include 'includes/footer.php';?>



