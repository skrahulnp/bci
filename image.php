<?php
require('connect.php');
require('bootstrap_fontawesome.php'); 
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

        <?php

            $sql = "select imagepath from service";
            $result = $con->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){


        ?>

        <div class="col">
            <div class="card">
                <img src="picture/<?php echo($row['imagepath']);?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($row['imagepath']); ?></h5>
                    <a href="image.php?id=<?php echo($row['id']) ?>" type="button" name="add_button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary">Rename</a>
                </div>
            </div>
        </div>

        <?php }} ?>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rename Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-3 mt-3" method="POST" action="image.php" enctype="">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">New Name</label>
                        <input type="text" name="rename" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>
                            <div class="form-text">Do not enter extension of image while rename.</div>
                    </div>

                

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" name="submitButton">Save</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>