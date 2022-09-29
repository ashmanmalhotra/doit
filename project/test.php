<?php
$hostname = "localhost";
$user = 'root';
$password = '';
$database = 'doitc';
$conn = mysqli_connect($hostname, $user, $password, $database);
if(mysqli_connect_errno()){
    echo "Database Error Encountered: " . mysqli_connect_error();
}

$query = "SELECT * FROM posts where id='1';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$strtime = strtotime($row['datecreated']);
echo date('l, Y-m-d', $strtime);



?>
