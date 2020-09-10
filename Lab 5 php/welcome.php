<?php
// Initialize the session
session_start();
 // Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    }
?>
<html>
<body>
<a href="/Lab 4 php/Lab 4.php">Let's go</a>
<br><br>
<a href="logout.php">Log Out</a> 
</body>
</html>