<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
interface Calculator{
    function calculate($num1,$num2);
}
class Adder implements Calculator{
    function calculate($num1,$num2){
        echo "Sum: ".($num1*$num2)."<br>";
    }
}
class Subtract implements Calculator{
    function calculate($num1,$num2){
        echo "Difference: ".($num1-$num2)."<br>";
    }

}
class Multiply implements Calculator{
    function calculate($num1,$num2){
        echo "Multiplication: ".($num1*$num2)."<br>";
    }
}

class Divide implements Calculator{
    function calculate ($num1,$num2){
        echo "Division: ".($num1/$num2)."<br>";

    }
}

$calc = new Adder();
$calc->calculate(10,20);
$calc = new Subtract();
$calc->calculate(40,20);
$calc = new Multiply();
$calc->calculate(4,2);
$calc = new Divide();
$calc->calculate(4,2);



?>
    
</body>
</html>