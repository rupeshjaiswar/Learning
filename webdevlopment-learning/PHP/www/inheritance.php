<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

    class Employee{

        public $empName;
        public $dept;
        public $salary;
        public $message = "Happy New Year 2021 <br>";
        const companyname = "XYZ Limited <br>";

        public function __construct($empname, $department, $salary)
        {
            $this->empName = $empname;
            $this->dept = $department;
            $this->salary = $salary;

        }

        function __destruct()
        {
            echo "End of session <hr>";
        }

        static function greet(){
            echo "How you doin'<br>";

        }

        function printDetails(){
            echo $this->empName."<br>";
            echo $this->dept."<br>";
            echo $this->salary."<br>";
            echo self::$message;
            self::greet();
        }
    }

    class Manager extends Employee{
        public $experience;
        public $lvlofmgr;

        public function __construct($empname,$department,$salary,$exp, $lvlofmgr)
        {
            parent::__construct($empname, $department, $salary);
            $this->experience = $exp;
            $this->lvlofmgr = $lvlofmgr;

        }
        function calcBonus($bonus){
            echo "Bonus: ".$this->salary*$bonus."<br>";
        }
        function printMgrDetails(){
            parent::printDetails();
            echo "Manager: ".$this->experience."<br>";
            echo "Manager: ".$this->lvlofmgr."<br>";
        }
    }

    $emp = new Employee("Rupesh", "Web Devlopment", 25000);
    $emp->printDetails();

    $mgr = new Manager("Rahul","Web Devlopment",50000,"5 years", "Second level");
    $mgr->printMgrDetails();
    $mgr->calcBonus(10);







?>



    
</body>
</html>