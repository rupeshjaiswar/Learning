<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$file_name = "../www/files/myfile1.txt";
$file = fopen($file_name,"x");
$txt = ".Some data";
fwrite($file,$txt);
fclose($file);
// $file = fopen($file_name,"r");
if(file_exists($file_name));{
$file = fopen($file_name,"r");
$filecontent = fread($file,"r");
fclose($file);
echo "fileexists";

}else{
    echo "file does not exists";
    exit();
}


echo "completed";
echo "Filesize: ".filesize($file_name);









?>
    
</body>
</html>