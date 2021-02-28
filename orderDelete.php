<?php
    require('connect.php');
    $id = $_GET['id'];

    $sql = "delete from userorder where id ='".$id."'";
    $result = $con->query($sql);
    if($result){
        echo('<script>
                alert("Successfully Delete!");
                window.location = "orderMaintain.php";
                </script>');
    }
    else{
        echo('<script>
                alert("Error on  Delete!");
                window.location = "orderMaintain.php";
                </script>');
    }
    

?>