<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$file_name = "../www/files/hello.txt";
$file = fopen($file_name,"r");
if (file_exists($file_name)){
    while(!feof($file)){
        // $fileline = fgets($file);
        $fileline = fgetc($file);
        echo $fileline;
        if($fileline == "."){
        echo "<br>";
        }
    }
    fclose($file);
}



?>




    
</body>
</html>