<?php
session_start();

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "doitc";

$GLOBALS['conn'] = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
    die("Database Error Encountered: " . mysqli_connect_error());
}

?>