<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4-1.php" method="post">
        <!-- What is your name? : <input type="text" name="name">
        <br>
        What is your hobby? : <input type="text" name="hobby">
        <br>
        What is your favourite club? : <input type="text" name="club">
        <br> -->
        <select name="question" id="">
            <option value="name">Name</option>
            <option value="hobby">Hobby</option>
            <option value="club">Club</option>
            <input type="hidden" name="output" value= " ">
        </select>
        <input type="submit">
    </form>


</body>
</html>