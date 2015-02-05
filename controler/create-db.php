<?php

require_once(_DIR_ . "../model/database;");

$connecttion = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("Error: " . $connection->connect_error);
} else {
    echo "Success" . $connection->host_info;
}

$connection->close();
