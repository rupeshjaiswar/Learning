<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstraction</title>
</head>
<body>
<?php
abstract class Vehicle{
    protected $model;
    protected $brand;
    protected $price;
    public function __construct($model,$brand,$price)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->price = $price;
        
    }
    function printDetails(){
        echo $this->model."<br>";
        echo $this->brand."<br>";
        echo $this->price."<br>";

    }
    abstract getMilage();
    abstract showAccessories();
}

class Bike extends Vehicle{

    $accessories = array("battery","helmet","OC");
    function getMilage(){
        
    }



}
class Car extends Vehicle{

}





?>





    
</body>
</html>