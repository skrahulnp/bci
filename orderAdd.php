<?php
    require('connect.php');
    require('bootstrap_fontawesome.php');
    $date = date("l jS F Y");
?>



<h4 class=" text-center text-primary p-3 mt-3 mb-3">Fill out the details</h4>
<div class="container p-3 mt-3 d-flex justify-content-center border">

<div class="col-lg-5 col-md-10 col-sm-10">
<form method="POST" action="orderAdd.php">
 
  <div class="mb-3">
    <label class="text-primary">Service Name</label>
    <input type="text" name="service" class="form-control" value="<?php echo($title = $_GET['title']); ?>" readonly required>
  </div>

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
    <input type="text" name="date" value="<?php echo($date); ?>" class="form-control" readonly  required>
  </div>

  <div class="mb-3">
    <label class="text-primary">Budget</label>
    <input type="number" name="budget" class="form-control"  required>
  </div>
    <div class="d-flex justify-content-around">
    <a href="service.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name="order" class="btn btn-primary">Order</button>
  </div>
</form>
</div>
</div>


<?php
    if(isset($_POST['order'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];	
        $email = $_POST['email'];	
        $address = $_POST['address'];	
        $service = $_POST['service'];	
        $date = $_POST['date'];	
        $budget = $_POST['budget'];	

        $sql = "insert into userorder (name,phone,email,address,service,date,budget) values ('".$name."','".$phone."','".$email."','".$address."','".$service."','".$date."','".$budget."')";
        $result = $con->query($sql);
        if($result){
            echo("<script>alert('Order Send!');</script>");
            echo("<script>window.location = 'service.php';</script>");
        }
        else{
            
            echo("<script>alert('Order not send!');</script>");
            echo("<script>window.location = 'service.php';</script>");
        }
    }

?>