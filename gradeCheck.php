<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Drop your remark below</h1>
    <label for="grade">Grade:</label><input type="text" name="grade" id="">
    <input type="submit" value="Submit" name="formInput">
    </form>
    <?php
if(isset($_POST["formInput"])){

    $grade = $_POST['grade'];

    switch($grade){
        case ($grade >= 80 && $grade <= 100) || $grade == "A" || $grade == 'a':
            echo "Excellent";
        break;

        case ($grade >= 60 && $grade <= 79) || $grade == "B" || $grade == 'b':
            echo "Very Good";
        break;
        
        case ($grade >= 50 && $grade <= 59) || $grade == "C" || $grade == 'c':
            echo "Good";
        break;

        case ($grade >= 40 && $grade <= 49) || $grade == "D" || $grade == 'd':
            echo "Fair";
        break;

        case ($grade >= 30 && $grade <= 39) || $grade == "E" || $grade == 'e':
            echo "Poor";
        break;
  
        case ($grade >=0 && $grade <= 29) || $grade == "F" || $grade == 'f':
            echo "Failed";
        break;
        
        default:
            echo "Invalid Grade";
        

    }
    
}

    ?>
</body>
</html>