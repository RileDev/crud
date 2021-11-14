<?php 
    require_once "functions.php";

    $conn = connect();

    if(!$conn){
        echo "<p>" . "Error no. " . mysqli_connect_errno() . " Error: " . mysqli_connect_error() . "</p>";
        exit(1);
    }

?>