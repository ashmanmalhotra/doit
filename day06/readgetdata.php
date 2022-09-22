<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        echo "The form is submitted using GET method";
        echo "<br><pre>";
        print_r($_GET);
        echo "</pre>";
    }
    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "The request method is POST.";
        echo "<br><pre>";
        print_r($_POST);
        echo "</pre>";
    }
    else{
        echo "The request method is not GET or POST.";
    }