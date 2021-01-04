<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InputDemo</title>
</head>
<body>
    <?php

    $username = $_GET["username"];
    $salary = $_GET["salary"];
    $bonus = $_GET["bonus"];
    if($username=="" && $salary=="" && $bonus=="")

    ?>



    <form action="inputdemo.php" method="get">
        Username <input type="text" name="username">
        Salary <input type="text" name="salary">
        Bonus <input type="number" name="bonus">
        <input type="submit" value="Add">
    </form>

<?php if($_GET["username"]!='' && $_GET["salary"]!='' && $_GET["bonus"]!=''){?> 
    <h2>Name:<?php echo $_GET["username"]?></h2>

    <h2>Salary:<?php echo $_GET["salary"] + $_GET["bonus"]?></h2>
    <?php }?>




    
</body>
</html>