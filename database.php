<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "reviewdb";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "error";
    die("error!");
}

?>