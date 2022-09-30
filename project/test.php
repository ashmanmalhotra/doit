<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>

    <?php
        include_once('admin/includes/dbconnection.php');
        $query = "SELECT * FROM categories";
        $result = mysqli_query($GLOBALS['conn'], $query);
    ?>
    <table id="mytable">
        <tr>
            <th>ID</th>
            <th>Category Name</th>
        </tr>


    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row['categoryname']}</td>";
            echo "<td>{$row['categoryname']}</td>";
            echo "</tr>";
        }
    ?>

    </table>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>

