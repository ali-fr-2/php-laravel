<?php 

include "databse.php";

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result=$connection->prepare("SELECT * FROM users WHERE email=? AND password=? ");
    $result->bindValue(1,$email);
    $result->bindValue(2,$password);
    $result->execute();
    if($result->rowCount()>=1){
        echo "ok";
        header("location:https://github.com/dashboard");
    }
    else{
        echo "no";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email" placeholder="email">
        </div>
        <br>
        <div>
            <label for="password">password</label>
            <input type="text"id="password" name="password" placeholder="password">
        </div>
        <br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>