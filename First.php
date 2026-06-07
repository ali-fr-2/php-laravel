<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<!-- <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    table{
        text-align: center;
        border-collapse: collapse;
    }
    table th{
        background-color: blue;
        padding: 5px;
        color: white;
    }
    tr:nth-child(even){
        background-color: #ccc;
    }
</style> -->


    <?php

    $name = array("ali", "ahmad", "karen", "hooman", "koroosh", "adel", "farhan", "fardad", "faraz");
    // $family = array("farjamy", "rooz", "rezaie", "ahmady", "goodarzy", "ehsanpoor", "eghtesady", "emady", "saatchi");



    // echo "<table border='1' width=300>";
    // echo "<tr>
    // <th>masters</th>
    // <th>name</th>
    // <th>family</th>    
    // </tr>";

    // for ($i = 0; $i < 9; $i++) {
    //     echo ("<tr>
    //     <td>
    //     " . (1 + $i) . "
    //     </td>
    //     <td>
    //     " . $name[$i] . "
    //     </td>
    //     <td>
    //     " . $family[$i] . "
    //     </td>
    //     </tr>");
    // }

    foreach($name as $value){
        echo "$value <br>";
    }

    ?>



</body>

</html>