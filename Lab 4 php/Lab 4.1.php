<html><body>
<a href="lab 4.2.php"  >Delete users</a>
<br />
<br />
</body></html>
<?php  
 $emp_name = $_POST['name'];
 $emp_address =$_POST['email'];
 $emp_gender =$_POST['gender'];
 $Check=$_POST['Check'];

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname ='db1';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
  }
  else{  
    $sql = "INSERT INTO employee(emp_name,emp_address,emp_gender,emp_Check)
    VALUES(\"$emp_name\",\"$emp_address\",\"$emp_gender\",\"Check\")";

    $retval = mysqli_query( $conn,$sql );
   if(! $retval ) {
   die('Could not insert to table: ' . mysqli_error($conn));
}
}

if( $_REQUEST["name"] || $_REQUEST["email"] ) {
    echo "Welcome ". $_REQUEST['name']. "<br />";
    echo "Your Email ". $_REQUEST['email']. " years old.<br />";
    echo "Your are ". $_REQUEST['gender']. " .<br />";
    echo "Your are ". $_REQUEST['Check']. " .<br />";

    exit();
 }
?>
