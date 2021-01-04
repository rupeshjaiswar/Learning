<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class product{
       protected $brand;
       protected $price;
       protected $quantity;
       
       public function __construct($brand,$price,$quantity){
        $this->brand=$brand;
        $this->price=$price;
        $this->quantity=$quantity;
    
        }
        function __destruct(){

            echo "good bye";
        }
        function totalcost(){

            echo "Total Cost". $this->price*$this->quantity."<br>";
            

            
    
        }
        abstract function showDiscountedPrice();
        abstract function showAcc();

       
    }


    class laptop extends product{

        protected $accesssories=array("charger","Speaker");

         function showAcc(){
            for($i=0;$i<count($this->accesssories);$i++){
                echo "Mobile accessories".$this->accesssories[$i]."<br>";
            
            }

         }
         function showDiscountedPrice()
         {
             echo "print slashed";
         }


        

    }
    
   
    
    $mbl=new laptop("HP",40000,7);
 
    $mbl->totalcost();
    $mbl->showAcc();
   
    

   
    ?>
    
</body>
</html> 