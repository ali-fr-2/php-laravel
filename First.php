<?php

// function divide($x, $y)
// {
//     try {
//         if ($y != 0) {
//             echo $x / $y;
//         } else {
//             throw new Exception("DO NOT PUT ZERO!");
//         }
//     } catch (\Throwable $th) {
//         echo $th->getMessage();
//     }
// }

// divide(10,1);
  


$hostName="localhost";
$userName="root";
$password="";


try {
    $connection=new PDO("mysql:host=$hostName",$userName,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE DATABASE AMIR1";
    $connection->exec($sql);
    echo "ok2";
} catch (Exception $e) {
    echo "error".$e->getMessage();
}