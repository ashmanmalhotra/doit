<?php include_once("includes/dbconnection.php") ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];
        $active = $_POST['userstate'];

        if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)){
            $query = "INSERT INTO users (firstname, lastname, email, password, role, active) VALUES ";
            $query .= "('$firstname', '$lastname', '$email', '$password', '$role', '$active')";
    
            $result = mysqli_query($conn, $query);
            $addition_operation = true;
        }
    }

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
    <div id="content">>

        <!-- Topbar -->
        <?php include_once('includes/topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Create a User</h1>

            <?php
                if(isset($addition_operation)){
                    if($result){
                        echo "<div class='alert alert-success'>User Added Successfully</div>";
                    }
                    else{
                        echo "<div class='alert alert-danger'>Error Adding User</div>";
                    }
                }
            ?>

            <form action="user_add.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="role">Role</label>
                        <select class="custom-select mr-sm-2" id="role" name="role">
                            <option disabled>Choose...</option>
                            <option value="0" selected>User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userstate">User State</label>
                        <select class="custom-select mr-sm-2" id="userstate" name="userstate">
                            <option disabled>Choose...</option>
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
            </form>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= include("includes/footer.php"); ?>