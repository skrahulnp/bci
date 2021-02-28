<?php
    require('connect.php');
    require('delete.php');
    $id = $_GET['id'];
    if(isset($_POST['cancle'])){
        echo("<script>window.location = 'adminMaintain.php';</script> ");
    }

    if(isset($_POST['delete'])){
            $sql = "delete from admin where id = '".$id."'";
            $result = $con->query($sql);
            if($result){
                echo("<script>alert('Successfully Deleted!');</script> ");
                echo("<script>window.location = 'adminMaintain.php';</script> ");
            }
            else{
                echo("<script>alert('Errr on  Delete!');</script> ");
                echo("<script>window.location = 'adminMaintain.php';</script> ");
            }
            
    }
?>


