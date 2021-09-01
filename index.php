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


echo 50.999;
echo 8 % 3 * 6;
$num = 6;
$num += 4;
echo $num;
echo abs(-300);
echo pow(3,4);
echo max(2,20);
echo min(3, 30);
echo round(3.5);
echo ceil(4.555);
echo floor(4.9);

// PHP number constants 
echo PHP_INT_MAX ."<br/>" ;/*max int in php  */
echo PHP_INT_MIN ."<br/>" ;/*min int in php  */
echo PHP_INT_SIZE ."<br/>" ;/*size int in php  */

// var_dump() gives output of both the datatype and the data
// is_int/is_integer/is_long is to check if a variable/value is an integer and gives a boolean output
var_dump(is_int(300));

// search for php math functions for more intell

//getting user input(form validation and all)



?>
<!-- How php interacts with the web -->
<!-- <form action="index.php" method="get">

<label for="name">Name:</label><br> <input type="text" name='userID'>
<br>
<label for="age">Age:</label> <br><input type="number" name='age'> 
<br> <br>
<input type="submit">
</form>
<p>Your name is <?php echo $_GET["userID"]?></p>

<p>Your age is <?php echo $_GET["age"]?></p> -->

<!-- creating a basic calculator -->
<form action="index.php" method="get">
<input type="number" name="num1"><br>
<input type="number" name="num2" id=""><br>
<input type="submit">
</form>
Your answer is: <?php echo $_GET["num1"] + $_GET["num2"];?>

</body>
</html>