<?php
    //username = "admin"
    //password = "1234"

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            header("Location: login.php");
        }
        else{
            if($email==="admin@admin.com" && $password=="1234"){
                header("Location: admin/index.php");
            }
            else{
                header("Location: login.php");
            }
        }

    }
    else if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        echo "Request is a GET Request";
    }
    else{
        echo "Request Method is unknown...";
    }