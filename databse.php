<?php 

$hostname="localhost";
$username="root";
$password="";
$dbname="myfirst";

try {
    $connection=new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "ok";
} catch (PDOException $th) {
    echo "connection failed: " .$th->getMessage();
};


?>