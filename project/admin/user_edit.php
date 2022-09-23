<?php 
include_once("includes/dbconnection.php");
$id = $_GET['id'];

$sqlquery = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sqlquery);

$row = mysqli_fetch_assoc($result);

?>






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
            <h1 class="h3 mb-4 text-gray-800">Create a User</h1>

            <form action="user_update.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $row['email'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $row['firstname'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $row['lastname'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="role">Role</label>
                        <select class="custom-select mr-sm-2" id="role" name="role">
                            <option disabled>Choose...</option>
                            <?php
                                if($row['role']=="0"){
                                    echo '<option value="0" selected>User</option>';
                                    echo '<option value="1">Admin</option>';
                                }
                                else{
                                    echo '<option value="0">User</option>';
                                    echo '<option value="1" selected>Admin</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userstate">User State</label>
                        <select class="custom-select mr-sm-2" id="userstate" name="userstate">
                            <option disabled>Choose...</option>
                            <?php
                                if($row['active']=="0"){
                                    echo '<option value="0" selected>Inactive</option>';
                                    echo '<option value="1">Active</option>';
                                }
                                else{
                                    echo '<option value="0">Inactive</option>';
                                    echo '<option value="1" selected>Active</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= include("includes/footer.php"); ?>