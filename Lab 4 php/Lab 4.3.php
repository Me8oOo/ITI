<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname ='db1';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
  }
  else{  
    $id = $_GET['id'];
    $sql = "DELETE FROM employee WHERE emp_id='$id' ";
    if (mysqli_query($conn,$sql)) {
        header('location:Lab 4.2.php');

    }
    }

?>