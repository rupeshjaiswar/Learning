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
        private $empName;
        private $salary;
        private $department;
        static $message = "Merry Christmas";
        const $companyName = "XYZ Limited";

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

        public static function greet(){
            echo "happy learning, <br>";
        }

        public function set_name($name){
            $this->empname = $name;

        }
        public function set_salary($salary){
            $this->salary = $salary;
        }
        public function set_department($department){
            $this->dept = $department;

        }
        function get_name(){
            return $this->empname;
        }
        function get_salary(){
            return $this->salary;
        }
        function get_dept(){
            return $this->dept;
        }



        function printDetails(){
            echo $this->empName."<br>";
            echo $this->salary."<br>";
            echo $this->department."<br>";
            Employee::$message = "Happy day";
            echo Employee::$message."<br>";
            echo "<h2>".Employee::companyName."</h2><br>";
        }

    }

    $emp = new Employee("Rupesh", 1000, "Admin");
    echo Employee::$message."<br>";
    echo Employee::companyName."<br>";
    $emp->printDetails();
    $emp->showBonus(400);
    // $emp->empName = "Ram";
    // $emp->salary = 1000;
    // $emp->department = "Admin";

    // echo $emp->empName;
    // echo $emp->salary;
    // echo $emp->department;

    $emp1 = new Employee("Rahul", 2000, "CSE");
    $emp->printDetails();
    echo $emp->get_name()."<br>";
    echo $emp->set_name("Rahul")."<br>";
    echo $emp->get_name()."<br>";
    echo $emp->set_salary(7000)."<br>";
    echo $emp->get_salary()."<br>";
    echo $emp->set_department("EXTC")."<br>";
    echo $emp->get_dept()."<br>";

    // $emp1->showBonus(200);
    // Employee::greet();

    ?>



    
</body>
</html>