<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // $x = 5;
    // $y = 6;
    // $z = 7;

    // if ($x < $y + $z && $y < $x + $z && $z < $x + $y) {
    //     echo "true";
    // }
    // else{
    //     echo "false";
    // }

    $x=15;
    $y=17;

    // switch ($x+$y) {
    //     case 30:
    //        echo "30";
    //         break;
        
    //     case 31:
    //        echo "31";
    //         break;
        
    //     case 32:
    //        echo "32";
    //         break;
        
    //     default:
    //         echo "false";
    //         break;
    // }

    switch ($x+$y) {
        case 30://it means or in switch case ||
        case 31:
           echo "true";
            break;
        
        case 32:
           echo "32";
            break;
        
        default:
            echo "false";
            break;
    }

    ?>

</body>

</html>