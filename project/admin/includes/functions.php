<?php

function logout_user(){
    unset($_SESSION['userid']);
    header("Location: /doitc/index.php");
}

function active_users_count(){
    $query = "SELECT count(*) FROM users WHERE active='1'";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $row = mysqli_fetch_array($result);
    
    return $row[0];
}

function inactive_users_count(){
    $query = "SELECT count(*) FROM users WHERE active='0'";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $row = mysqli_fetch_array($result);
    
    return $row[0];
}

function posts_count(){
    $query = "SELECT count(*) FROM posts";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $row = mysqli_fetch_array($result);
    
    return $row[0];
}

function category_count(){
    $query = "SELECT count(*) FROM categories";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $row = mysqli_fetch_array($result);
    
    return $row[0];
}

?>