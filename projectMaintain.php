<?php

require('bootstrap_fontawesome.php'); 
require('connect.php');    
?>





<script>
function reload() {
    location.reload();
}
</script>


<div onload="reload()" class="container mb-3 mt-3">
    <div class="d-flex justify-content-start">
        <h5>Add New Project&nbsp;:&nbsp;&nbsp;</h5>
        <!-- Button trigger modal -->

        <button type="button" name="add_button" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#exampleModal"> ADD </button>

        
        
    </div>
</div>

<div class="container-fluid mt-3">
    <table class="table">
        <thead class="table-dark">


            <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>



        </thead>

        <tbody>
            <?php 
    require('connect.php');

    $sql = "select * from project";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
?>
 
            <tr>
                <td scope="row"><?php echo($row['id']); ?></td>
                <td><?php echo($row['title']); ?></td>
                <td><?php echo($row['description']); ?></td>
                <td><?php echo($row['imagepath']); ?></td>
                <td><a href="projectUpdate.php?id=<?php echo($row['id']); ?>"> <button class="btn btn-primary"
                            name='edit'><i class="fa fa-edit"></i></button></a></td>

                <td><a href="projectDelete.php?id=<?php echo($row['id']); ?> "> <button class="btn btn-danger"> <i
                                class="fa fa-trash"></i> </button> </a> </td>

            </tr>

            <?php }} ?>


        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
      </div>
      <div class="modal-body">
        <form action="projectMaintain.php" method="POST">
  <div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" rows="5" required></textarea>
  </div>

  <div class="mb-3">
    <label>Image Path</label>
    <input type="text" name="imagepath" class="form-control" required>
  </div>
    
    <div class="d-flex justify-content-around">
    <a href="projectMaintain.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name="save" class="btn btn-primary">Save</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>



<?php 
    if(isset($_POST['save'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $imagepath = $_POST['imagepath'];

        $sql = "insert into project (title,description,imagepath) values ('".$title."','".$description."','".$imagepath."')";
        $result = $con->query($sql);
        if($result){
            echo("<script>alert('Successfully Inserted!');</script>");
            echo("<script>window.location = 'projectMaintain.php';</script>");
        }
        else{
            
            echo("<script>alert('Service not Inserted!');</script>");
            echo("<script>window.location = 'projectMaintain.php';</script>");
        }
    }

?>