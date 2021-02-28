<?php
    require('connect.php');
    require('bootstrap_fontawesome.php');

    $id = $_GET['id'];


?>
<div class="container">
    <form method="POST" action="">
        <?php 
        $sql = "select * from admin where id = $id";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

    ?>

        <form class="p-3 mt-3" method="POST" action="">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" pattern=".{5,20}" required title="Username must be 5 character long"
                    value="<?php echo($row['username']); ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="exampleInputPassword1" pattern=".{8,20}"
                    required title="password must be 8 character long" value="<?php echo($row['password']); }}?>">
            </div>



            <div class="d-flex justify-content-around">
                <a href="adminMaintain.php" class="btn btn-danger" data-bs-dismiss="modal">Cancel</a>
                <button class="btn btn-primary" type="submit" name="update">Update</button>
            </div>


        </form>
    </form>
</div>


<?php

    if(isset($_POST['update'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "update admin set username = '".$username."', password = '".$password."' where id = $id";
    $result = $con->query($sql);
    if($result){
        echo("<script>alert('Successfully udated!');</script>");
        echo("<script>window.location = 'adminMaintain.php';</script>");
    }
    else{
        
        echo("<script>alert('Data not udated!');</script>");
        echo("<script>window.location = 'adminMaintain.php';</script>");
    }
    }

?>