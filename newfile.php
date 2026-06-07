<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

session_start();

// session_destroy();//if wwe delete the varaible the varaible will vanished

// $_SESSION['name']="alifarajamy";
// // session_unset();
// echo $_SESSION['name'];


if(isset($_SESSION['counter'])){
    $_SESSION['counter']+=1;
}
else{
    $_SESSION['counter']=1;
}

$msg='visited  '.$_SESSION['counter'];
echo $msg;

//------------------------------------
//each browser saved its own session

?>


</body>
</html>