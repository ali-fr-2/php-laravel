<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php



    // function secondHigh(){
    //     $number=array(22,52,48,548,854,5896,35655,48524);
    //     $max=$number[0];
    //     $secondMax=$number[0];

    //     foreach ($number as  $value) {
    //         if ($value>$max) {
    //             $secondMax=$max;
    //             $max=$value;
    //         }
    //         else if($value<$max&&$value>$secondMax){
    //             $secondMax=$value;
    //         }
    //     }
    //     echo $secondMax;
    // }

    // secondHigh();

    $arr = array(22, 35, 545, 44555);
    function secondMax(array $arr)
    {
        if (empty($arr)) {
            return;
        }
        $max = -1;
        $secondNumber = -1;

        foreach ($arr as $number) {
            if ($number > $max) {
                $secondNumber = $max;
                $max = $number;
            }
            if ($number > $secondNumber && $number < $max) {
                $secondNumber = $max;
            }
        }
        return $secondNumber;
    }

    echo secondMax($arr);




    ?>



</body>

</html>