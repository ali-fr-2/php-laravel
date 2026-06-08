<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <form method="post">
        <input type="text" placeholder="firstNumber" name="firstNumber">
        <input type="text" placeholder="secondNumber" name="secondNumber">
        <select name="operator" style="width: 100px;">
            <option>add</option>
            <option>subtract</option>
            <option>multiply</option>
            <option>divide</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit">calcute</button>
    </form>

    <h4>the result is :</h4>


    <?php


    if (isset($_POST['submit'])) {
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        $operator = $_POST['operator'];

        // if($operator=='add'){
        //     echo $firstNumber+$secondNumber;
        // }
        // if($operator=='subtract'){
        //     echo $firstNumber-$secondNumber;
        // }
        // if($operator=='multiply'){
        //     echo $firstNumber*$secondNumber;
        // }
        // if($operator=='divide'){
        //     echo $firstNumber/$secondNumber;
        // }

        //or we can use switch case

        switch ($operator) {
            case 'add':
                echo $firstNumber + $secondNumber;
                break;
            case 'subtract':
                echo $firstNumber - $secondNumber;
                break;
            case 'multiply':
                echo $firstNumber * $secondNumber;
                break;
            case 'divide':
                echo $firstNumber / $secondNumber;
                break;
        }
    }


    ?>

</body>

</html>