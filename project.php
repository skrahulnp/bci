<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - BCI</title>

    
</head>
<body>

<?php 
require('nav.php');

?>

<div class="container pb-3">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
        require('connect.php');
        $sql = "select * from project";
        $result = $con->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){

    ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo($row['imagepath']); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($row['title']); ?></h5>
                            <p class="card-text"><?php echo($row['description']); ?></p>
                                <a href="#" class="btn btn-primary"> <?php for($var = 0; $var<5;$var++){echo(' <i class="fa fa-star"></i>');} ?></a>
                        </div>
                    </div>
                </div>
                <?php }} ?>
     </div>
</div>


        <?php
        require('footer.php');
        ?>
    
</body>
</html>