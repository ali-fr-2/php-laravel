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

$insert="INSERT INTO `users`(id,username,email) VALUES (1,'alifarjamy','alifarjamy2@gmail.com')";

if(mysqli_query($connection,$insert)){
    echo "insert succesfully";
}
else{
    echo "insert fail". mysqli_error($connection);
}
