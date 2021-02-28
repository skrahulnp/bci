<?php
    require('connect.php');
    require('bootstrap_fontawesome.php');

    $id = $_GET['id'];


?>
<div class="container">
<form method="POST" action="">
    <?php 
        $sql = "select * from service where id = $id";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

    ?>  

  <div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo($row['title']); ?>" required>
  </div>

  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" rows="5" required><?php echo($row['description']); ?></textarea>
  </div>

  <div class="mb-3">
    <label>Image Path</label>
    <input type="text" name="imagepath" class="form-control" value="<?php echo($row['imagepath']); }} ?>" required>
  </div>
    
    <div class="d-flex justify-content-around">
    <a href="serviceMaintain.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
  </div>
</form>
</div>


<?php

    if(isset($_POST['update'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imagepath = $_POST['imagepath'];

    $sql = "update service set title = '".$title."', description = '".$description."', imagepath = '".$imagepath."' where id = $id";
    $result = $con->query($sql);
    if($result){
        echo("<script>alert('Successfully udated!');</script>");
        echo("<script>window.location = 'serviceMaintain.php';</script>");
    }
    else{
        
        echo("<script>alert('Data not udated!');</script>");
        echo("<script>window.location = 'serviceMaintain.php';</script>");
    }
    }

?>