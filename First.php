<?php

include "databse.php";


$sql = "SELECT * FROM blog ORDER BY sort  ";
$statement = $connection->query($sql);
$menus = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <?php 
        foreach($menus as $value){
            if($value["status"]==1){ ?>
                <li>
                    <a href="#"><?php echo $value['title']; ?></a>
                </li>
            <?php }} ?>
       


    </div>


</body>

</html>