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
// Numbers methods in php


// echo 50.999;
// echo 8 % 3 * 6;
// $num = 6;
// echo $num++;
// echo abs(-300);
// echo pow(3,4);
// echo max(2,20);
// echo min(3, 30);
// echo round(3.5);
// echo ceil(4.555);
// echo floor(4.9);

// search for php math functions for more intell

//getting user input(form validation and all)



?>

<form action="index.php" method="get">

<label for="name">Name:</label> <input type="text" name='userID'>
<br>
<label for="age">Age:</label> <input type="number" name='age'> 
<br>
<input type="submit">
</form>
<p>Your name is <?php echo $_GET["userID"]?></p>

<p>Your age is <?php echo $_GET["age"]?></p>
</body>
</html>