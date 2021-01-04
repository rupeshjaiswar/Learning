<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$num = 100;
$fnum = 10.5;
$flag = true;
$name = "Rupesh";
$names = array("Rahul", "Ram", "Raj");

//data type and value
echo var_dump($num);
echo var_dump($fnum);
echo var_dump($flag);
echo var_dump($name);
echo var_dump($names);

// to check datatypr
echo var_dump(is_int($num));
echo var_dump(is_int($fnum));
echo var_dump(is_float($fnum));
echo var_dump(is_array($names));

//type casting
$numm = (int) $fnum;
echo $numm ."<br>";
echo var_dump($numm)."<br>";

$snum = "1000pp";
$numm = (int) $snum;
echo $numm ."<br>";
echo var_dump($numm)."<br>";

//to check if it is a numerical value
echo is_numeric(90)."<br>";
echo is_numeric("900")."<br>";
echo is_numeric(10.35)."<br>";
echo is_numeric("hello")."<>br";
echo is_string("hello")."<br>";
echo is_string("600")."<br>";






?>
    
</body>
</html>