<?php

require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password);


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>";

$query = $connection->query("INSERT INTO POSTS SET TITLE = '$title', post = 'post'");

if ($query) {
    echo "<p1>successfully inserted post: $title</p1>";
} else {
    echo "<p>$connection->error</p>";
}