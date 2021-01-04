<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $names = array("Rupesh","Rahul","Raj","Ranger");
    echo $names;
    echo $names[2];
    $names[2] = 'Lucy';
    echo $names[2];
    $names [10] = "Jon";
    echo $names[8];
    echo $names;

    echo count($names);

    foreach($names as $values){
        echo "Name is $values <br/>";
    }

    // other way of cereating arrays

    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";

    foreach($numbers as $val){
        echo "Name is $val <br/>";
    }






    ?>




    
</body>
</html>