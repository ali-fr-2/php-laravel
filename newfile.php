<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    var_dump($_GET);
    ?>

    <!-- <form action="./First.php" method="get">
    <input type="text" name="myName" >
    <button type="submit">submit</button>
    </form> -->

    <form action="./First.php" method="post">
        <input type="text" name="myName">
        <button type="submit">submit</button>
    </form>


</body>

</html>