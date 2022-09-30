<?php include_once("includes/dbconnection.php") ?>

<?php
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $posttitle    = $_POST['posttitle'];
        $postcontent  = $_POST['postcontent'];
        $postcategory = $_POST['postcategory'];
        $postimage    = $_FILES['postimage']['name'];
        $postauthor   = $_SESSION['userfullname'];
        $datecreated  = date("Y-m-d H:i:s");

        if(!empty($posttitle) && !empty($postcontent) && !empty($postcategory) && !empty($postauthor) ){
            $query  = "INSERT INTO posts (id, title, content, category, image, author, datecreated) ";
            $query .= "VALUES (NULL, '$posttitle', '$postcontent', '$postcategory', '$postimage', '$postauthor', '$datecreated');";
            
            //echo $query;
            //die();

            $result = mysqli_query($conn, $query);
            $addition_operation = true;

            move_uploaded_file($_FILES['postimage']['tmp_name'], "../assets/images/$postimage");
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
    <div id="content">

        <!-- Topbar -->
        <?php include_once('includes/topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Create a Post</h1>

            <?php
                if(isset($addition_operation)){
                    if($result){
                        echo "<div class='alert alert-success'>Post Added Successfully</div>";
                    }
                    else{
                        echo "<div class='alert alert-danger'>Failed to add Post.</div>";
                    }
                }
            ?>

            <form action="post_add.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="posttitle">Title</label>
                    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Add Viral Post Title">
                </div>
                <div class="form-group">
                    <label for="postcontent">Content</label>
                    <!-- <div id="postcontent"></div> -->
                    <textarea class="form-control" id="postcontent" name="postcontent" rows="3"></textarea>
                    
                </div>

                <div class="form-group">
                    <label for="postimage">Image</label>
                    <input type="file" class="form-control" id="postimage" name="postimage">
                </div>

                <div class="form-group">
                    <label for="postauthor">Author</label>
                    <input type="text" class="form-control" id="postauthor" name="postauthor" disabled value="<?= $_SESSION['userfullname']  ?>">
                </div>


                <div class="form-row">
                    <label for="postcategory">Post Category</label>
                    <select id="postcategory" name="postcategory" class="form-control">
                        <?php
                            $query = "SELECT * FROM categories";
                            $result = mysqli_query($GLOBALS['conn'], $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['categoryname']}'>{$row['categoryname']}</option>";
                            }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= include("includes/footer.php"); ?>
