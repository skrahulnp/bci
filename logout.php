<?php

    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION['login']);
        
   
        header('location: index');
    }
?>