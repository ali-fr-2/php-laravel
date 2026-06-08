<?php

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// echo '<hr>';

// echo $_GET['name'] ?? 'name not found';
//----------------------------------------------
// echo $_GET['name'];

if($_GET['name']=="ali"&&$_GET['family']=="farjamy"){
    echo "welcome ".$_GET['name']." ".$_GET['family'];
}
else{
    echo "fuck off";
}