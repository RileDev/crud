<?php
    
    function connect(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db";
    
        $conn = mysqli_connect($host, $user, $pass, $db);
    
        if(!$conn){
            return false;
        }
        else{
            return $conn;
        }
    
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);

        if(!$result){
            echo "<p>" . "Error query no. " . mysqli_errno($conn) . "<br>" . " Error: " . mysqli_error($conn) . "</p>";
            exit(1);
        }else{
            return $result;
        }

    }

    function escape($str){
        global $conn;
        return mysqli_real_escape_string($conn, $str);
    }

    function clean($str){
        return htmlentities($str);
    }

    function redirect($location){
        header("location:$location");
    }

    function validateForm(){
        $errors = [];

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $fname = clean($_POST['fname']);
            $lname = clean($_POST['lname']);
            $email = clean($_POST['email']);
            $phone_num = clean($_POST['phone']);

            if(empty($fname) || empty($lname)){
                $errors[] = "Name must contain any character";
            }

            if(empty($phone_num)){
                $errors[] = "Phone must contain any character";
            }

            if(empty($email)){
                $errors[] = "Email must contain any character";
            }

            if(strlen($fname) < 3 || strlen($lname) < 3){
                $errors[] = "Name can't be less than 3 characters";
            }
            if(strlen($phone_num) < 10){
                $errors[] = "Phone number can't be less than 10 characters";
            }

            if(strlen($email) < 5){
                $errors[] = "Email can't be less than 5 characters";
            }

            if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
                $errors[] = "Invalid mail format";
            }
            
            if(!empty($errors)){
                foreach($errors as $error){
                    echo "<p class='text-danger text-uppercase'>$error</p>";
                }
                return false;
            }else{
                insertUser($fname, $lname, $phone_num, $email);
            }
        }
        
    }

    function insertUser($fname, $lname, $phone_num, $email){
        $fname = escape($fname);
        $lname = escape($lname);
        $phone_num = escape($phone_num);
        $email = escape($email);

        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
        $phone_num = filter_var($phone_num, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $query = "INSERT INTO users(first_name, last_name, email, phone_number) VALUES('$fname', '$lname', '$email', '$phone_num')";
        $result = query($query);
        echo "Query has been successfully executed";
    }
