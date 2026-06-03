<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // $cars=array("tesla","benz");
    // array_unshift($cars,"bmw");
    // var_dump($cars);

    // $cars = array("tesla", "benz");
    // array_shift($cars);
    // var_dump($cars);

    // $fruits=array("a"=>"mango","b"=>"apple","c"=>"banana");
    // sort($fruits);
    // var_dump($fruits);

    // $fruits1 = array("a" => "mango", "b" => "apple", "c" => "lemon");
    // $fruits2 = array("a" => "mango", "b" => "apple", "d" => "banana");
    // var_dump(array_diff($fruits1, $fruits2));

    // $fruits1 = array("a" => "mango", "b" => "apple", "c" => "lemon");
    // $fruits2 = array("a" => "mango", "b" => "apple", "d" => "banana");
    // var_dump(array_diff_key($fruits1, $fruits2));

    $fruits1 = array("a" => "mango", "b" => "apple", "c" => "lemon");
    $fruits2 = array("d" => "strawberry", "e" => "orange", "f" => "banana");
    var_dump(array_merge($fruits1,$fruits2));


    ?>

</body>

</html>