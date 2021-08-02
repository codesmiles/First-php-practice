<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- MADLIBS game -->
    <form action="site.php" method="get">
    color:<input type="text" name="color" placeholder="color"><br>
    Plural noun:<input type="text" name="pluralNoun" placeholder="plural noun"><br>
    Celebrity:<input type="text" name="celebrity" placeholder="celebrity"><br>
    <input type="submit">
    </form>
    
    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity =$_GET['celebrity'];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity";
    ?>

    <!-- URL parameter -->
     <form action="site.php" method="get">
     Name: <input type="text" name="name"><br>
     <input type="submit">
     </form>

     <?php echo $_GET["name"]?>

<!-- password use of POST method -->
     <form action="site.php" method="post">
     Password: <input type="password" name="password"><br>
     <input type="submit">
     </form>
    
    <?php echo $_POST["password"];?>


    

</body>
</html>