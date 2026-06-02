<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // $train="alifarjamy@gmail.com";
    // $function=explode("@",$train,2);

    // // print_r($function);
    // $userName=$function[0];
    // echo $userName;


    // $color=array("red","green","blue");
    // $toString=implode(" ",$color);//its opposite of explode 
    // echo $toString; //we use explode in case of change string to array and we use implode when we want to change array to string

    // $name="           ali farjamy             ";
    // var_dump($name);//string(35) " ali farjamy "

    // $reform=trim($name);
    // var_dump($reform);//string(11) "ali farjamy" 


    $name="alifarjamy";
    $reform=trim($name,"ali");//string(7) "farjamy" 
    var_dump($reform);

    ?>

</body>

</html>