<?php
require('bootstrap_fontawesome.php');
?>
<div class="container mb-3 mt-3">
    <div class="d-flex justify-content-start">
        <h5>Add New Project&nbsp;:&nbsp;&nbsp;</h5>
        <!-- Button trigger modal -->

        <button type="button" name="add_button" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#exampleModal"> ADD </button>
        <!--  <button class="btn btn-warning text-light ms-auto" type="" onclick="reload()">Click to Reload</button>
        -->
    </div>
</div>

<div class="container-fluid mt-3">
    <table class="table">
        <thead class="table-dark">


            <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>

        </thead>

        <tbody>
            <?php 
    require('connect.php');

    $sql = "select * from admin";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
?>

            <tr>
                <th scope="row"><?php echo($row['id']); ?></th>
                <td name="username"><?php echo($row['username']); ?></td>
                <td name="password"><?php echo($row['password']); ?></td>
                <th><a href="adminUpdate.php?id=<?php echo($row['id']); ?>"> <button class="btn btn-primary"
                            name='edit'><i class="fa fa-edit"></i></button></a></th>

                <th><a href="adminDelete.php?id=<?php echo($row['id']); ?> "> <button class="btn btn-danger"> <i
                                class="fa fa-trash"></i> </button> </a> </th>

            </tr>

            <?php }} ?>


        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-3 mt-3" method="POST" action="">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp"  pattern=".{5,20}" required title="Username must be 5 character long">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" pattern=".{8,20}" required title="password must be 8 character long">
                    </div>

                    

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" name="addadmin">Save</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>


<?php 

if(isset($_POST['addadmin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into admin (username,password) values ('".$username."','".$password."')";
    $result = $con->query($sql);
    if($result){
        echo("<script>alert('Successfully Added!');</script>");
        echo("<script>window.location = 'adminMaintain.php';</script>");
    }
    else{
        
        echo("<script>alert('Data not Added!');</script>");
        echo("<script>window.location = 'adminMaintain.php';</script>");
    }
}

?>