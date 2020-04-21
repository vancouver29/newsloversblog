<?php include '../config/config.php'; ?>
<?php include '../libraries/Database.php'; ?>
<?php include '../helpers/format_helper.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Admin Area</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet"  crossorigin="anonymous">
    <meta name="theme-color" content="#563d7c">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <!--            <div class="col-4 pt-1">-->
            <!--                <a class="text-muted" href="#">Subscribe</a>-->
            <!--            </div>-->
            <div class="col-12 text-center">
                <a class="blog-header-logo text-dark" href="index.php">NLB</a>
            </div>
            <!--            <div class="col-4 d-flex justify-content-end align-items-center">-->
            <!--                <a class="text-muted" href="#" aria-label="Search">-->
            <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>-->
            <!--                </a>-->
            <!--                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>-->
            <!--            </div>-->
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between " >
            <a class="p-2 text-muted" href="index.php">Dashboard</a>
            <a class="p-2 text-muted" href="add_post.php">Add Post</a>
            <a class="p-2 text-muted" href="add_category.php">Add Category</a>
            <a class="p-2 text-muted pull-right" href="http://localhost/newsloversblog">Visit Blog</a>
            <!--            <a class="p-2 text-muted" href="#">World</a>-->
            <!--            <a class="p-2 text-muted" href="#">U.S.</a>-->
            <!--            <a class="p-2 text-muted" href="#">Technology</a>-->
            <!--            <a class="p-2 text-muted" href="#">Design</a>-->
            <!--            <a class="p-2 text-muted" href="#">Culture</a>-->
            <!--            <a class="p-2 text-muted" href="#">Business</a>-->
            <!--            <a class="p-2 text-muted" href="#">Politics</a>-->
            <!--            <a class="p-2 text-muted" href="#">Opinion</a>-->
            <!--            <a class="p-2 text-muted" href="#">Science</a>-->
            <!--            <a class="p-2 text-muted" href="#">Health</a>-->
            <!--            <a class="p-2 text-muted" href="#">Style</a>-->
            <!--            <a class="p-2 text-muted" href="#">Travel</a>-->
        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-black rounded bg-blue">
        <div class="col-md-10 px-0">
            <h2>Admin Area</h2>
            <!--            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>-->
        </div>
    </div>


    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12 blog-main">
                <!--            <h3 class="pb-4 mb-4 font-italic border-bottom">-->
                <!--                From the Firehose-->
                <!--            </h3>-->
                <?php if (isset($_GET['msg'])) : ?>
                    <div class="alert alert-success" ><?php echo htmlentities($_GET['msg']);?></div>
                <?php endif; ?>
