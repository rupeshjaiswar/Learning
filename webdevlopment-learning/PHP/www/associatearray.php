<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="get">
Enter Name <input type="text" name="studname">
<input type="submit" value="show marks">
</form>

<h2>
<?php

define("MSG", "Have a great day");
echo MSG;
echo var_dump(MSG);



$studgrades = array("Jack"=>90, "Kathy"=>80, "Helen"=>90);
echo $studgrades["Kathy"]."<br>";
$studentname = $_GET["studname"];
echo $studgrades[$studentname];
echo $studgrades[$_GET["studname"]];



?>
</h2>



    
</body>
</html> -->