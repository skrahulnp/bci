<?php
require('bootstrap_fontawesome.php');
?>


<div class="container-fluid mt-3">
    <table class="table">
        <thead class="table-dark">


            <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Address</th>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Budget</th>
                <th scope="col">Delete</th>
            </tr>



        </thead>

        <tbody>
            <?php 
    require('connect.php');

    $sql = "select * from userorder";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
?>
            <tr>
                <th scope="row"><?php echo($row['id']); ?></th>
                <td><?php echo($row['name']); ?></td>
                <td><?php echo($row['phone']); ?></td>
                <td><?php echo($row['email']); ?></td>
                <td><?php echo($row['address']); ?></td>
                <td><?php echo($row['service']); ?></td>
                <td><?php echo($row['date']); ?></td>
                <td><?php echo($row['budget']); ?></td>
                <th><a href="orderDelete.php?id=<?php echo($row['id']); ?> "> <button class="btn btn-danger"> <i
                                class="fa fa-trash"></i> </button> </a> </th>

            </tr>

            <?php }} ?>


        </tbody>
    </table>
</div>
