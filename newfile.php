<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php 

$hostName="localhost";
$userName="root";
$password="";

$connection=mysqli_connect($hostName,$userName,$password);

// if(!$connection){
//     echo "fail";
//     exit;
// }
// else{
//     echo "ok";
// }

if(!$connection){
    die("fail".mysqli_connect_error());
}
echo "ok   ";

$sql="CREATE DATABASE `alitest`";

if(mysqli_query($connection,$sql)){
    echo "succes";
}
else{
    echo "fail". mysqli_error($connection);
}



?>


</body>

</html>