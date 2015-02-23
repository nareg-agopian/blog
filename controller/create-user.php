<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILLTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILLTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILLTER_SANITIZE_EMAIL);
    
    echo $password;
    
        $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true)  . "$";
        
        echo $salt;
    