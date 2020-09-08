<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
define('APPLICATION_NAME','AAST_BIS class regisrtration'); 
$nameErr = $emailErr = $genderErr = $groupErr = $CheckErr = $SelectErr ="";
$name = $email = $gender = $comment = $group = $Check = $Select ="";

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
    
  if (empty($_POST["group"])) {
    $groupErr = "group is required";
  } else {
    $group = test_input($_POST["group"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["Select"])) {
    $SelectErr = "Courses is required";
  } else {
    $Select = test_input($_POST["Select"]);
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

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>APPLICATION NAME: <?php echo APPLICATION_NAME?></h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  group: <input type="text" name="group">
  <span class="error">* <?php echo $groupErr;?></span>
  <br><br>
  Class details : <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <label for="Select">Select Courses</label>
    <select  name='subject[]' multiple="5">
      <option value="PHP" >PHP</option>
      <option value="Java Script"> Java Script</option>
      <option value="MySql">MySql</option>
      <option value="Html"> Html</option>
      <option value="5">5</option>
    </select>

    <span class="error">* <?php echo $SelectErr;?></span>

    </br></br>

  <input type="checkbox"  name="Check">
  <label for="Check"> I accept the tems and condtions</label>
  <span class="error">* <?php echo $CheckErr;?></span>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $group;
echo "<br>";
echo $gender;
echo "<br>";
echo $Select;
echo "<br>";
echo $Select;
echo "<br>";
echo $Select;
echo "<br>";
      
// Check if form is submitted successfully 
if(isset($_POST["submit"]))  
{ 
    // Check if any option is selected 
    if(isset($_POST["subject"]))  
    { 
        // Retrieving each selected option 
        foreach ($_POST['subject'] as $subject)  
            print "You selected $subject<br/>"; 
    } 
else
    echo "Select an option first !!"; 
} 
?>

</body>
</html>