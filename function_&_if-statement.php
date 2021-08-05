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
// FUNCTIONS
function sayHi($name){
    echo "Hello $name <br>";
}



sayHi("codesmiles");


function cubeNums($num){
    return pow($num,3);
};


echo cubeNums(5), "<br>";


//IF STATEMENTS
$isMale = true;
$isTall = true;

if($isMale && $isTall){
    echo "He is tall <br>";
}
else{
    echo 'shut up';
};



//WRITING THE MAX FUNCTION WITHOUT USING THE MATH FUNCTIONS
function getMax($num1,$num2){
    if($num1>$num2){

       return "$num1 is bigger";
    }
    elseif($num1<$num2){
        return "$num2 is bigger";
    }elseif($num1 == $num2){
        return "both value $num1 and $num2 are the same";
    }
    else{
        return 'No inputed value yet';
    }

}

echo getMax(22,2);

?>    



</body>
</html>