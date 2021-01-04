<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
<?php
class Employee{
    protected $name;
    protected $salary;

    public function __construct($name,$salary)
    {
        $this->name = $name;
        $this->salary = $salary;

    }
    function printDetails(){
        echo $this->name."<br>";
        echo $this->salary."<br>";
    }
}
interface BonusCalculator{
    function calcBonus($bonus);
    function calcInterest($loanamount);
}
class Manager extends Employee implements BonusCalculator{
    protected $dept;
    public function __construct($name,$salary,$dept)
    {
        parent::__construct($name,$salary);
        $this->dept = $dept;
        
    }
    function calcBonus($bonus){
        echo "Bonus: ".($this->salary*$bonus)."<br>";

    }
    function calcInterest($loanamount){
        echo "Interest:".($this->salary-$loanamount)."<br>";
    }


}



?>
    
</body>
</html>