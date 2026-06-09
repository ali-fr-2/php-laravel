<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbname = "ali";

$connection = mysqli_connect($hostName, $userName, $password, $dbname);

if (!$connection) {
    die("fail" . mysqli_connect_error());
}
echo "ok   ";

$table = "CREATE TABLE `users` (`id` int NOT NULL,`username`varchar(255),`email`varchar(255) ) ";
if (mysqli_query($connection, $table)) {
    echo "table crated";
} else {
    echo "not created" . mysqli_error($connection);
}
