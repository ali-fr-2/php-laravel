<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // setcookie('name','ali',time()+5);

    // echo $_COOKIE['name'];

    // setcookie('name', 'ali', time() + 60*60);

    // echo $_COOKIE['name'];

    setcookie('name', 'ali', time() -100);//for deleting the cookies

    echo $_COOKIE['name'];


    ?>



</body>

</html>