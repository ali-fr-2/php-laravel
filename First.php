<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    // $showFullName = array("ali", "farjamy", 20);
    // var_dump($showFullName);
    //array(3) { [0]=> string(3) "ali" [1]=> string(7) "farjamy" [2]=> int(20) } 

    // print_r($showFullName);
    //Array ( [0] => ali [1] => farjamy [2] => 20 ) 
    // print_r($showFullName[2]); //20 
    //print_r method did not return data-type
    // the  echo method is faster than two others

    $color = "red blue green black";
    // $function = explode(" ", $color,); // it respectively present : seperate , string , limit
    // print_r($function); //    Array
    // (
    //     [0] => red
    //     [1] => blue
    //     [2] => green
    //     [3] => black
    // )

    $function = explode(" ", $color, 2);
    print_r($function); //    Array
    // (
    //     [0] => red
    //     [1] => blue green black
    // )


    ?>
    </pre>
</body>

</html>