<?php 
//  $dbhost = 'localhost';
//  $dbuser = 'root';
//  $dbpass = '';
//  $dbname ='db1';
//  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//  if(! $conn ) {
//     die('Could not connect: ' . mysqli_error($conn));}
//  echo 'Connected successfully<br>';
//  mysqli_select_db( $conn,$dbname );
//  $sql = 'CREATE TABLE employee( emp_id INT NOT NULL AUTO_INCREMENT,
//  emp_name VARCHAR(20) NOT NULL,
//  emp_address  VARCHAR(20) NOT NULL,
//  emp_salary   INT NOT NULL,
//  join_date    timestamp(6) NOT NULL,
//  primary key ( emp_id ))';
//    $retval = mysqli_query( $conn,$sql );
//  if(! $retval ) {
//     die('Could not create table: ' . mysqli_error($conn));
//  }


define('APPLICATION_NAME','AAST_BIS class regisrtration'); 
$nameErr = $emailErr = $genderErr  = $CheckErr  ="";
$name = $email = $gender  = $Check  ="";

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
   if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["Check"])) {
      $CheckErr = "You must accecpt the tems and condutions";
    } else {
      $Check = test_input($_POST["Check"]);
    }
   }
?> 
<html>
<head>
<title> Jacky</title>
</head>
   <body>
   <style>
.error {color: #FF0000;}
</style>
   <h2>APPLICATION NAME: <?php echo APPLICATION_NAME?></h2>
   <p><span class="error" >* required field</span></p>
<form method="post" action="Lab 4.1.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <input type="checkbox"  name="Check">
  <label for="Check"> I accept the tems and condtions</label>
  <span class="error">* <?php echo $CheckErr;?></span>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
