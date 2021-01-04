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
        var $empName;
        var $salary;
        var $department;

        function __construct($empname,$sal,$dept)
        {
            $this->empName = $empname;
            $this->salary = $sal;
            $this->department = $dept;
            
        }

    }

    $emp = new Employee("Rupesh", 1000, "Admin");
    // $emp->empName = "Ram";
    // $emp->salary = 1000;
    // $emp->department = "Admin";

    echo $emp->empName;
    echo $emp->salary;
    echo $emp->department;

    ?>



    
</body>
</html>