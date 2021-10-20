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
    $students = array("kevin","amir","azizi","amirul");
    print_r ($students);
    echo "<br>";
    array_push($students, "arjun");
    print_r ($students);

?>
</body>
</html>