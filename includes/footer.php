</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0"><?php echo $site_description; ?></p>
    </div>

    <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <?php if ($categories): ?>
            <ol class="list-unstyled mb-0">
                <?php while ($row = $categories->fetch_assoc()): ?>
                    <li><a href="posts.php?category=<?php echo $row['id'];?>"><?php echo $row['name']; ?> </a></li>
                <?php endwhile; ?>
            </ol>
        <?php else: ?>
            <p>There are no categories yet.</p>
        <?php endif; ?>

    </div>

</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>NewsLoversBlog &copy; 2020</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
</body>
</html>