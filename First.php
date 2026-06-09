<?php


// var_dump($_FILES['image']);

// var_dump($_FILES['image']['name']);

// if($_FILES['image']['size']<100000){
//     echo "succesfully";
// }
// else{
//     echo "error";
// }

// $fileName=basename($_FILES['image']['name']);
// $fileTemp=$_FILES['image']['tmp_name'];

// move_uploaded_file($fileTemp,"images/".$fileName);



// echo "<pre>";
// var_dump($_FILES['image']);
// echo "</pre>";


//------------------------------------------important
if(move_uploaded_file(
    $_FILES['image']['tmp_name'],
    "D:/practice-php/".$_FILES['image']['name']
)){
    echo "succes";
}
else{
    echo "failed";
}




// $basepath=__DIR__;

// var_dump($basepath);

?>