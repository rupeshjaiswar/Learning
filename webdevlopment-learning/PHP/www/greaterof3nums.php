<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$num1 = 20;
$num2 = 10;
$num3 = 30;

if (($num1 > $num2)&&($num1 > $num3)){
    echo "num1 is greater";
}
elseif (($num2 > $num1)&&($num2 > $num3)){
    echo "num2 is greater";

}
else{
    echo "num3 is greater";
}


?>
    
</body>
</html>