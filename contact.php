<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - BCI</title>
</head>
<body>

<?php 

require('nav.php');

?>

<?php
    require('connect.php');
    require('bootstrap_fontawesome.php');
    $date = date("l jS F Y");
?>



<h4 class=" text-center text-primary p-3 mt-3 mb-3">Fill out the details</h4>
<div class="container p-3 mt-3 d-flex justify-content-center border">

<div class="col-lg-5 col-md-10 col-sm-10">
<form method="POST" action="contact.php">
 

  <div class="mb-3">
    <label class="text-primary">Enter Your Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>    

  <div class="mb-3">
    <label class="text-primary">Contact No.</label>
    <input type="number" name="phone" class="form-control"  required>
  </div>

  <div class="mb-3">
    <label class="text-primary">E-mail</label>
    <input type="email" name="email" class="form-control"  required>
  </div>

  <div class="mb-3">
    <label class="text-primary">Address</label>
    <input type="text" name="address" class="form-control"  required>
  </div>

  <div class="mb-3">
    <label class="text-primary">Date</label>
    <input type="text" name="date" value="<?php echo($date); ?>"  class="form-control" readonly  required>
  </div>

  <div class="mb-3">
    <label class="text-primary">Described Your Query</label>
    <textarea type="text" name="description"  class="form-control"  required></textarea>
  </div>


    <div class="d-flex justify-content-around">
    <a href="service.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>


<?php


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];	
        $email = $_POST['email'];	
        $address = $_POST['address'];		
        $date = $_POST['date'];	
        $description = $_POST['description'];

        $sql = "insert into contact(name,phone,email,address,date,description) values ('".$name."','".$phone."','".$email."','".$address."','".$date."','".$description."')";
        $result = $con->query($sql);
        if($result){
            echo("<script>alert('Information Send!');</script>");
            echo("<script>window.location = 'contact.php';</script>");
        }
        else{
            echo($con->error);
            //echo("<script>alert('Information not send!');</script>");
            //echo("<script>window.location = 'contact.php';</script>");
        }
    }

?>
    
</body>
</html>