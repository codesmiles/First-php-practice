<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- ARRAY (can stor more than one piece data)-->
    <?php



    $friends = array("mike", 1,"max", false, "mide","mildness");
    // echo $friends[0];
    $friends[2] = "mitchel";
    echo $friends[2]; //mitchel
    $friends[7] ='me';
    $friends[10] = 'You';
    // echo friend[9] //error cause even though you defined the array list number 10 u left list-no 8 and 9
    echo $friends[10];  // You
    echo count($friends); // 8
    ?><br>


<!-- Using checkboxes -->
<form action="array.php" method="post">
        Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
        Bananas:<input type="checkbox" name="fruits[]" value="bananas"><br>
        Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears:<input type="checkbox" name="fruits[]" value="pears"><br>

        <input type="submit">//
    </form>

    <?php 
    if(isset($_POST["fruits"])){
        $fruits = $_POST["fruits"];
        echo $fruits[0]; // output any checbox eing checked
    }
    else{     
      
    };
    ?>

    <!-- ASSOCIATIVE ARRAYS --> 
    <!-- NOTE make sure the keys are unique -->
    <?php
    $checkups = array("peter"=>"Peter is stubborn", "Michael"=>"Michael is annoying","Peace"=>"Peace Aka Mummy Trinity The master complaint machine");
    echo $checkups["Peace"];  //Output:Peace AKA mummy trinity the master complaint machine
    echo count($checkups); //Output:3
    ?>
    
    <form action="array.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $grades = array("peter"=>"D", "michael"=>"B-","peace"=>"C+");
    echo $grades[$_POST["student"]];
    ?>
</body>
</html>