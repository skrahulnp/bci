<?php 


session_start();
if(empty(isset($_SESSION['login'])) || $_SESSION==''){
    header('location: login.php');
    exit();
}


require('bootstrap_fontawesome.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BCI</title>


    <style>
        ul{
            padding-left:0px !important;
        }
        li:hover{
            cursor:pointer;
        }
    </style>
</head>
<body onload="first()">

<div class="container-fluid pt-3">
    <div class="row">

        <div class="col-lg-3 col-10">
            <h5 class="text-center text-uppercase text-light dropdown-menu-dark p-2">Dashboard</h5>
            <ul class="pl-0">

                <li class="dropdown-item text-uppercase border p-2 mt-2" onclick="projectMaintain()">Project Maintain</li>

                <li class="dropdown-item text-uppercase border p-2 mt-2" onclick="serviceMaintain()">Service Maintain</li>

                <li class="dropdown-item text-uppercase border p-2 mt-2" onclick="orderMaintain()">User Order</li>

                <li class="dropdown-item  text-uppercase border p-2 mt-2" onclick="contactMaintain()">Contact Maintain</li>

                <li class="dropdown-item  text-uppercase border p-2 mt-2" onclick="adminMaintain()">Admin Profile</li>

                <form action="logout.php" method="POST">
                <div class="text-center mt-3">
                <input type="submit" class="btn btn-danger  mt-3" value="Logout" name="logout">
                </div>
                </form>
            </ul>
        </div>
    <div class="col-lg-9 col-10 pr-0 mr-0" id="pageViewer">

    </div>
    </div>
</div>
<script src="extensions/resizable/bootstrap-table-resizable.js"></script>
    
<script>
        window.onbeforeunload = function () {return false;}

        function first(){
            
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="projectMaintain.php"></object>';
        }
        
        function projectMaintain(){
            
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="projectMaintain.php"></object>';
        }

        function serviceMaintain(){
            
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="serviceMaintain.php"></object>';
        }

        function orderMaintain(){
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="orderMaintain.php"></object>';
        
        }

        function contactMaintain(){
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="contactMaintain.php"></object>';
        
        }


        function adminMaintain(){
        
            document.getElementById('pageViewer').innerHTML = '<object style="width:100%; height:100vh;" type="text/html" data="adminMaintain.php"></object>';
        }
</script>
</body>
</html>

