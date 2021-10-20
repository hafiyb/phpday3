<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="2.php" method="post">
    Name : <input type="text" name="name">
    <br>
    IC : <input type="text" name="IC">
    <br>
    Mobile : <input type="text" name="mobile">
    <br>
    <input type="submit">
</form>

<?php

$name = '';
$IC = '';
$mobile = '';

$name = getName();
$IC = getIC();
$mobile = getMobile();
displayInfo($name, $IC, $mobile);

    function getName(){
        return $_POST["name"];
    }

    function getIC(){
        return $_POST["IC"];
    }

    function getMobile(){
        return $_POST["mobile"];
    }

    function displayInfo($name, $IC, $mobile){
        echo "Name : $name <br> IC : $IC <br> Mobile : $mobile";
    }
    
?>
</body>
</html>