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

    include "display.php";


    function kevin($kevin, $shop){
        array_push($kevin, $shop[randomizer()]);

        display($kevin);
    }

    function arwin_hensem($arwin_hensem, $shop){
        $i = 0;
        while($i < 3){
            $val = randomizer();
            // $test = strpos(implode($arwin_hensem),  $shop[$val]);
            // echo "<br> $test <br>";
            if(strpos(implode($arwin_hensem), $shop[$val]) === false){
                array_push($arwin_hensem, $shop[$val]);
                $i++;
            }
        }
        
        display($arwin_hensem);
        return $arwin_hensem;
    }

    function randomizer(){
        return rand(0,7);
    }

?>
</body>
</html>