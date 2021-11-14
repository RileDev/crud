<?php
    require_once "inc/init.php";

    
    //echo "Connection to the database has been successfully connected! <br>";

    $result = query("SELECT * FROM users WHERE is_deleted = 0");

    echo "<p>Number of fetched rows from database are: " . mysqli_num_rows($result) . "</p>";

    echo "--------";

    while($row = mysqli_fetch_assoc($result)){
        echo "<p>First name: {$row["first_name"]}</p>";
        echo "<p>Last name: {$row["last_name"]}</p>";
        echo "<p>E-mail: {$row["email"]}</p>";
        echo "<p>Phone number: {$row["phone_number"]}</p>";
        echo "<a href='delete.php?id={$row['id']}'><button>Delete user</button></a> <br>";
        echo "--------<br>";
    }

    echo "Hello world!";
?>