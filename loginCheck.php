<?php

    require('connect.php');


    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "select *from admin where username = '$username' and password = '$password'";

    $result = $con->query($sql);

    if($result->num_rows > 0){
        session_start();
        $_SESSION['login'] ="set";
        header('location: dashboard.php');
        die;
    }
    else{
        header('location: login.php');
    }

?>