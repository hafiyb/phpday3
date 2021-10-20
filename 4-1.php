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
    $question = $_POST['question'];
    $name = '';
    $hobby = '';
    $club = '';
    $output = $_POST['output'];
    
    if(empty($output)){
        $output = ' ';
    }

    switch($question){
        case '名前':
            questionName();
            break;
        case 'hobby':
            questionHobby();
            break;
        case 'club':
            questionClub();
            break;
    }

    $question = '';

    function questionName(){
        echo "<form action='4-1.php' method='post'>";
        echo "Name : <input type='text' name='output'>";
        echo "<input type='hidden' name='question' value='名前'>";
        echo "<input type='submit'>";
        echo "</form>";
        
    }
    function questionHobby(){
        echo "<form action='4-1.php' method='post'>";
        echo "Hobby : <input type='text' name='output'>";
        echo "<input type='hidden' name='question' value='hobby'>";
        echo "<input type='submit'>";
        echo "</form>";

    }
    function questionClub(){
        echo "<form action='4-1.php' method='post'>";
        echo "Club : <input type='text' name='output'>";
        echo "<input type='hidden' name='question' value='club'>";
        echo "<input type='submit'>";
        echo "</form>";
        
    }

    display($output);

    function display($output){
        echo "<br>Output : $output<br>";
    }

?>
<br>
<br>
<a href="4.php">Return</a>
</body>
</html>