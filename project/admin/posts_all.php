<?php include_once("includes/dbconnection.php") ?>
<?php include_once("includes/header.php") ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once("includes/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('includes/topbar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">All Posts</h1>

                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="post_add.php" class="btn btn-sm btn-primary">Add Post</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                    /*
                                    if(isset($_SESSION['update_operation'])){
                                        if($_SESSION['update_operation']===true){
                                            echo '<div class="alert alert-success" role="alert">
                                                    User Updated Successfully!
                                                </div>';
                                            unset($_SESSION['update_operation']);
                                        }
                                        else if($_SESSION['update_operation']===false){
                                            echo '<div class="alert alert-danger" role="alert">
                                                    User Update Failed!
                                                </div>';
                                            unset($_SESSION['update_operation']);
                                        }
                                    }
                                    */

                                ?>
                                <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Author</th>
                                            <th>Created On</th>
                                            <th colspan=2>Post Operations</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Author</th>
                                            <th>Created On</th>
                                            <th colspan=2>Post Operations</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM posts Limit 10";
                                            $result = mysqli_query($conn, $query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>  
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['title'] ?></td>
                                            <td><?= "content" ?></td>
                                            <td><?= $row['category'] ?></td>
                                            <td>
                                                <img width="100px" src="../assets/images/<?= $row['image'] ?>" alt="">
                                            </td>
                                            <td><?= $row['author'] ?></td>
                                            <td><?= $row['datecreated'] ?></td>
                                            <td><a href="post_edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a></td>
                                            <td><a href="post_delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once('includes/footer.php') ?>