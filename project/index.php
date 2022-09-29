<?php include_once("includes/header.php"); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    DOITC Newsroom
                    <small>Knowledge Management System</small>
                </h1>

                <?php
                $query = "SELECT * FROM posts";
                $select_all_posts_query = mysqli_query($GLOBALS['conn'], $query);
                while($post = mysqli_fetch_assoc($select_all_posts_query)) {
                ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?= $post['title'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?= $post['author'] ?></a>
                </p>

                <p><span class="glyphicon glyphicon-time"></span> Posted on <?= $post['datecreated']  ?></p>
                <hr>
                <img class="img-responsive" width="200px" src="assets/images/<?= $post['image'] ?>" alt="">
                <hr>
                <p> <?= $post['content'] ?> </p>
                <a class="btn btn-primary" href="<?= 'post.php?id=' . $post['id'] ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <?php
                }
                ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include_once('includes/sidebar.php'); ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include_once('includes/footer.php'); ?>