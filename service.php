<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - BCI</title>


</head>

<body>

    <?php 
require('nav.php');

?>
    <div class="container p-3 mt-3">

        <h4 class="text-center text-primary text-uppercase">Our Top Class Services Are Here!</h4>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <?php
                require('connect.php');
                $sql = "select * from service";
                $result = $con->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                    ?>

            <div class="col">
                <div class="card">
                    <img src="<?php echo($row['imagepath']); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo($row['title']); ?> </h5>
                        <p class="card-text"> <?php echo($row['description']); ?> </p>
                        <a href="orderAdd.php?title=<?php echo($row['title']); ?>" class="btn btn-primary">Choose Service</a>
                    </div>
                </div>
            </div>

            <?php
                }} 
            ?>

        </div>
    </div>


    <?php
 require('footer.php');
 
 ?>
</body>

</html>