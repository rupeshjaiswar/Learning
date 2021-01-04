<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zsuccess</title>
</head>
<body>
<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$city = $_POST["city"];


include "zuser.php";
$user = new User($username,$password,$mobile,$gender,$city);
$_SESSION["user"] = serialize($user);
$_SESSION["msg"] = "Products Page";
$_SESSION["greetings"] = "Happy New Year";

?>

<h2>Name: <?php echo $username; ?>  </h2>
    <h2>Gender:<?php  echo $gender; ?> </h2>
    <h2>Mobile<?php  echo $mobile; ?> </h2>
<a href="zproducts.php">Click here</a>

 <?php  ?>




    
</body>
</html>