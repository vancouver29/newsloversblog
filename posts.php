<?php include 'includes/header.php'; ?>


<?php

//Create DB Object
$db = new Database();
//Check URL For Category
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    //Create query
    $query = "SELECT * FROM posts WHERE category= " . $category;
    //Run query
    $posts = $db->select($query);
} else {
    //Create query
    $query = "SELECT * FROM posts";
    //Run query
    $posts = $db->select($query);
}

//Create query
$query = "SELECT * FROM categories";
//Run query
$categories = $db->select($query);

?>

<?php if ($posts): ?>
    <?php while ($row = $posts->fetch_assoc()): ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> <a href="#"><?php echo $row['author']; ?></a></p>

            <?php echo shortenText($row['body']); ?>
            <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Readmore</a>
        </div><!-- /.blog-post -->
    <?php endwhile; ?>

<?php else: ?>
    <p>There are no posts yet</p>
<?php endif; ?>


<!--            <nav class="blog-pagination">-->
<!--                <a class="btn btn-outline-primary" href="#">Older</a>-->
<!--                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>-->
<!--            </nav>-->

<?php include 'includes/footer.php'; ?>
