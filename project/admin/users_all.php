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
                    <h1 class="h3 mb-4 text-gray-800">All Users</h1>

                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="user_add.php" class="btn btn-sm btn-primary">Add User</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Active</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Active</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $conn = mysqli_connect('localhost', 'root', '', 'doitc');
                                            $query = "SELECT * FROM users";
                                            $result = mysqli_query($conn, $query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>  
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['firstname'] ?></td>
                                            <td><?= $row['lastname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['password'] ?></td>
                                            <td><?= $row['role'] ?></td>
                                            <td><?= $row['active'] ?></td>
                                            <td><a href="#" class="btn btn-sm btn-warning">Edit</a></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
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