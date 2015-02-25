<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILLTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILLTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILLTER_SANITIZE_EMAIL);
    
    echo $password;
    
        $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true)  . "$";
        
        $hashedPassword = crypt($password, $salt);
        
        $query = $_SESSION["connection"]->query("INSERT INTO USERS SET"
               . "email = '$email',"
               . "username = '$username',"
               . "password = '$hashedPassword',"
               . "salt = '$salt',");
        
        if($query) {
            echo "Successfully created user: $username";
        }
        else {
            echo "<p>" . $_SESSION["connection"]->error . "</p>";
        }
    