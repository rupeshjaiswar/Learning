<?php
session_start();
include "zuser.php";
$message = $_SESSION["msg"];
$greet = $_SESSION["greetings"];
$user = new User("","",0,"","");
$user = unserialize($_SESSION["user"]);
?>

<h2><?php echo $message; ?> </h2>
<h2><?php echo $greet; ?> </h2>
<h2><?php echo $user->get_name(); ?> </h2>
<h2>Welcome <?php echo $name; ?> </h2>

<?php  ?>





