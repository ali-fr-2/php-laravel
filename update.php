<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDatabase";


try {
    $connection = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `users` SET fName = 'mmd' WHERE id=1 ";
    $connection->exec($sql);
    echo "ok2";
} catch (Exception $e) {
    echo "error" . $e->getMessage();
}
