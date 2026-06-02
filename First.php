<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $age=array("ali"=>22,"adel"=>21,"taha"=>20);
    echo "ali is ".$age['ali']." years old";

    $first=["red","green"];
    $second=["sky","car"];

    $setArray=array_combine($first,$second);
    print_r($setArray);



    ?>

</body>

</html>