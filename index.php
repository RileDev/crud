<?php
    require_once "inc/init.php";
    $result = query("SELECT * FROM users WHERE is_deleted = 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User List</title>
</head>
<body>


    <div class="container text-center">
        <h1 class="h1-title text-uppercase py-3">User List</h1>
        <?="<p>Number of fetched rows from database are: " . mysqli_num_rows($result) . "</p>"?>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="row bg-secondary rounded-pill py-3 my-3 text-white">
            <div class="col-md-6">
                <p>First name: <?="{$row["first_name"]}"?></p>
                <p>Last name: <?="{$row["last_name"]}"?></p>
                <p>E-mail: <?="{$row["email"]}"?></p>
                <p>Phone number: <?="{$row["phone_number"]}"?></p>
            </div>
            <div class="col-md-3">
            <a href='delete.php?id=<?="{$row['id']}"?>'><button class="btn btn-danger my-5">Delete user</button></a>
            </div>
            <div class="col-md-3">
            <a href='update.php?id=<?="{$row['id']}"?>'><button class="btn btn-primary my-5">Update user</button></a> <br>
            </div>
        </div>

        <?php } ?>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>