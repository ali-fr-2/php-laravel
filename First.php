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
$dbName="myfirst";


try {
    $connection=new PDO("mysql:host=$hostName;dbname=$dbName",$userName,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM `users`";
    $statement=$connection->query($sql);
    $users=$statement->fetchAll();
    // var_dump($users[3]['username']);
    // var_dump($users[3]['email']);

    foreach ($users as $value) {
        echo $value['id']." ".$value['username']."<br>";
    }

} catch (Exception $e) {
    echo "error".$e->getMessage();
}