<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // $x = 10;
    // $y = 15;

    // function add()
    // {
    //     global $x, $y;
    //     echo $x + $y;
    // }

    // add();

    // $x=70;

    // function number(){
    //     echo $GLOBALS['x'];
    // }
    // number();

    // $x = 70;
    // $y=20;

    // function number()
    // {
    //     echo $GLOBALS['z']=$GLOBALS['x']-$GLOBALS['y'];
    // }
    // number();

    // function number(){
    //     $x=20;
    //     $x++;
    //     echo $x;
    // }

    // number();
    // number();
    // number();


    function number()
    {
        static $x = 20;
        $x++;
        echo $x;
    }

    number();
    number();
    number();



    ?>



</body>

</html>