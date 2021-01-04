<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greater of 3 numbers
    </title>
</head>
<body>

<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

if ($num1 = "" && $num2 = "" && $num3 = ""){

    ?>

    <form action="greaterof3nos.php" method="get">
    Number 1 <input type="number" name="num1">
    Number 2 <input type="number" name="num2">
    Number 3 <input type="number" name="num3">
    <input type="submit" value="submit">33


    
    
    
    </form>
    <?php
}

if(($num1>$num2)&&($num1>$num3)){
    echo "Greatest number is: $num1";
}


elseif(($num2>$num1)&&($num2>$num3)){
    echo "Greatest number is: $num2";
}
else{

echo "Greatest number is: $num3";
}






?>
</body>
</html>