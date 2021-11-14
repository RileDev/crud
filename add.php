<?php
    require_once "inc/init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add user</title>
</head>
<body>

    <div class="text-center">
        <h1 class="h1-title text-uppercase py-3">add user</h1>

        <form action="" method="post">
            <input type="text" name="fname" placeholder="First name" required> <br>
            <input type="text" name="lname" placeholder="Last name" required> <br>
            <input type="email" name="email" placeholder="Email" required> <br>
            <input type="text" name="phone" placeholder="Phone number" required> <br> <br>
            <button class="btn btn-success">Add user</button> 
        </form> <br>

        <a href="index.php" class="btn btn-warning">Return to results</a> <br>
    

    <?php

        validateForm();
    
    ?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>