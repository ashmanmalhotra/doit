<?php include_once("includes/dbconnection.php") ?>

<?php
    /*
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];
        $active = $_POST['userstate'];

        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
            $query = "INSERT INTO users (firstname, lastname, email, password, role, active) VALUES ";
            $query .= "('$firstname', '$lastname', '$email', '$password', '$role', '$active')";
    
            $result = mysqli_query($conn, $query);
            $addition_operation = true;
        }
    }
    */
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
            <h1 class="h3 mb-4 text-gray-800">Create a Post</h1>

            <?php
                /*
                if(isset($addition_operation)){
                    if($result){
                        echo "<div class='alert alert-success'>User Added Successfully</div>";
                    }
                    else{
                        echo "<div class='alert alert-danger'>Error Adding User</div>";
                    }
                }
                */
            ?>

            <form action="user_add.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="posttitle">Title</label>
                    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Add Viral Post Title">
                </div>
                <div class="form-group">
                    <label for="postcontent">Content</label>
                    <textarea class="form-control" id="postcontent" placeholder="Required Post Content" required>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="postcategory">Category</label>
                    <input type="text" class="form-control" id="postcategory" name="postcategory">
                </div>

                <div class="form-group">
                    <label for="postimage">Image</label>
                    <input type="file" class="form-control" id="postimage" name="postimage">
                </div>

                <div class="form-group">
                    <label for="postauthor">Author</label>
                    <input type="text" class="form-control" id="postauthor" name="postauthor" disabled>
                </div>


                <div class="form-row">
                    <label for="postcategory">Post Category</label>
                    <select id="postcategory" name="postcategory" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create User</button>
            </form>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= include("includes/footer.php"); ?>