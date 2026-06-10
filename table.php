<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDatabase";


try {
    $connection = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    fName VARCHAR(255)
    )";
    $connection->exec($sql);
    echo "ok2";
} catch (Exception $e) {
    echo "error" . $e->getMessage();
}
