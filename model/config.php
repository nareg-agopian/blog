<?php
/*before checking something else it checks require_once first */

require_once(__DIR__ . "/../model/database.php");
session_start(); 

$path = "/Nareg.A-blog";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}

