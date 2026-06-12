<?php

include "databse.php";

$error = "";
if (isset($_POST['submit'])) {
    if (
        isset($_POST['email']) && $_POST['email'] !== ""
        && isset($_POST['first_name']) && $_POST['first_name'] !== ""
        && isset($_POST['last_name']) && $_POST['last_name'] !== ""
        && isset($_POST['password']) && $_POST['password'] !== ""
        && isset($_POST['confirm']) && $_POST['confirm'] !== ""
    ) {
        if ($_POST['password'] === $_POST['confirm']) {

            if (strlen($_POST['password']) > 4) {

                if (isset($_POST['submit'])) {

                    $email=$_POST['email'];
                    $first_name=$_POST['first_name'];
                    $last_name=$_POST['last_name'];
                    $password=$_POST['password'];
                    $result=$connection->prepare("INSERT INTO users SET email=? , first_name=? , last_name=?, password=?");
                    $result->bindValue(1,$email);
                    $result->bindValue(2,$first_name);
                    $result->bindValue(3,$last_name);
                    $result->bindValue(4,$password);
                    $result->execute();

                }
            } else {
                $error = "the password must be at last 5";
            }
        } else {
            $error = "password and confirm is not match";
        }
    } else {
        $error = " please complete the fields";
    }
}

// if(isset($_POST['submit'])){

//     if(
//         empty($_POST['email']) ||
//         empty($_POST['first_name']) ||
//         empty($_POST['last_name']) ||
//         empty($_POST['password']) ||
//         empty($_POST['confirm'])
//     ){
//         $error = "Please complete the fields";
//     }

// }



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <section>

        <form action="" method="post">

            <div style="color: red;">
                <?php
                if ($error !== "") echo $error;
                ?>
            </div>

            <label for="email">email</label>
            <input type="text" name="email" id="email" placeholder="email">
            <br>
            <label for="first_name">first_name</label>
            <input type="text" name="first_name" id="first_name" placeholder="first_name">
            <br>
            <label for="last_name">last_name</label>
            <input type="text" name="last_name" id="last_name" placeholder="last_name">
            <br>
            <label for="password">password</label>
            <input type="text" name="password" id="password" placeholder="password">
            <br>
            <label for="confirm">confirm</label>
            <input type="text" name="confirm" id="confirm" placeholder="confirm">
            <br>
            <input type="submit" name="submit" value="register">

        </form>

    </section>

</body>

</html>