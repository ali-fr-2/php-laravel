<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDatabase";


try {
    $connection = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "DELETE FROM `users` WHERE id=1";

    //OR WE CAN USE THIS 


    $sql = "DELETE FROM `users` WHERE fName='farhad'";
    $connection->exec($sql);
    echo "ok2";
} catch (Exception $e) {
    echo "error" . $e->getMessage();
}
