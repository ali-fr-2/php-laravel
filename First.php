<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    // $i=1;
    // do{
    //     echo $i."<br>";
    //     $i++;
    //     echo $i;
    // }while($i<0);

    $i=0;
    $even="";
    $odd="";
    
    do{
        if ($i%2==0) {
            $even=$even."".$i;
        }
        else{
            $odd=$odd."".$i;
        }
        $i++;
    }while($i<30);

    echo "even is =".$even."<br>";
    echo "odd is =".$odd."<br>";


    ?>

</body>

</html>