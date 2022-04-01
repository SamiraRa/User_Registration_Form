<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "php_user_form";

    $con = mysqli_connect("$host","$username","$password","$db");
    if(!$con){
        header("Location:../error/dberror.php");
        die();
    }
?>