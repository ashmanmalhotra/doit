<?php
    include_once('dbconnection.php');

    function active_users_count(){
        $query = "SELECT count(*) FROM users WHERE active='1'";
        $result = mysqli_query($GLOBALS['conn'], $query);
        $row = mysqli_fetch_array($result);
        
        return $row[0];
    }

    echo active_users_count();

?>