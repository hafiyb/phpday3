<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $student = array("Fikri","Arwin","Zafri","Chee Hoe");
    $grades = array("A","B","C","D","E","F");
    $subject = array("English","Maths");

    echo "$student[0], $subject[0] ";

    // for($i = 0; $i < count($grades); $i++){
    //     echo "$grades[$i] ";
    // }

    foreach($grades as $var){
        echo "$var ";
    }

?>
</body>
</html>