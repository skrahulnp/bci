<?php

require('bootstrap_fontawesome.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BCI</title>

     </head>

<body>

    <div class="container d-flex justify-content-center p-3">
        <div class="col-4 mt-3">
            <form method="POST" action="loginCheck.php" class="border p-3 mt-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  pattern=".{5,20}" required title="5 to 20 characters">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"  pattern=".{8,20}" required title="8 to 20 characters">
                </div>
            
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>