<?php

function logout_user(){
    unset($_SESSION['userid']);
    header("Location: /doitc/index.php");
}





?>