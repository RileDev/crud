<?php
    require_once "inc/init.php";

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $result = query("UPDATE users SET is_deleted = 1 WHERE id = $id");
        }
    }
    redirect("index.php");

?>