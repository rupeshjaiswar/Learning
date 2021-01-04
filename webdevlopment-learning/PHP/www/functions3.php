<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php
    class Employee{
        public $empName;
        public $salary;
        public $department;

        public function __construct($empname,$sal,$dept)
        {
            $this->empName = $empname;
            $this->salary = $sal;
            $this->department = $dept;
            
        }
        public function __destruct()
        {
           echo "called before closing the script"; 
        }
        private function calcBonus($amount){
            return $this->salary+$amount; 
        }
        public function showBonus($amount){
            echo "Bonus:", $this->calcBonus($amount);
        }
        function printDetails(){
            echo $this->empName."<br>";
            echo $this->salary."<br>";
            echo $this->department."<br>";
        }

    }

    $emp = new Employee("Rupesh", 1000, "Admin");
    $emp->printDetails();
    $emp->showBonus(400);
    // $emp->empName = "Ram";
    // $emp->salary = 1000;
    // $emp->department = "Admin";

    echo $emp->empName;
    echo $emp->salary;
    echo $emp->department;

    $emp1 = new Employee("Rahul", 2000, "CSE");
    $emp->printDetails();
    $emp1->showBonus(200);

    ?>



    
</body>
</html>