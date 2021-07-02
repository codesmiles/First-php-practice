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

echo "<h1>Codsmiles's site</h1>";
echo "<hr/>";
echo "<p>This is my site</p>";


// variable
$characterName = "Tom";
$characterAge = 50;

echo "There once was a man named $characterName <br/>";
echo "He was $characterAge years old<br/>";

$characterName = "mike";
$characterAge = 23;
echo "There once was a man named $characterName <br/>";
echo "He was $characterAge years old<br/>";

// george and 70
echo "He really likes the name George <br/>";
echo "But he didn't like being 70 <br/>"


?>


<?php
// Data type
$phrase = "This Is a string(To be or not to be)";
$age = 30;
$gpa = 4.5;
$isMale = true;
$isFemale = false;
$sense = null;

// Working with strings in PHP
$truewords = "Life no balance";
echo "$truewords<br/>";

// String Functions
echo strtolower("$truewords<br/>");
echo strtoupper("$truewords <br/>");
echo strlen("$truewords");
echo $truewords[0];

echo str_replace("no", "is", $truewords);
echo substr ($truewords, 8);

?>
</body>
</html>