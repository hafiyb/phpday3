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

    include "item.php";

    $shop = ["book","pencil","food","plates","drinks","apple","pen","pineapple"];
    $kevin = [];
    $arwin_hensem = [];

    echo "<br> Kevin buys 1 item <br>";
    
    kevin($kevin, $shop);

    echo"<br> Kevin leaves the shop <br>";

    echo "<br> Arwin buys 3 items <br>";

    $arwin_hensem = arwin_hensem($arwin_hensem, $shop);

    echo "<br> Arwin buys 3 more items <br>";

    $arwin_hensem = arwin_hensem($arwin_hensem, $shop);

    echo"<br> Arwin leaves the shop <br>";

?>
</body>
</html>