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
    $sql = 'SELECT emp_id , emp_name, emp_address,emp_gender,emp_Check FROM employee';
    mysqli_select_db($conn, $dbname);
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die('Could not get data: ' . mysqli_error($conn));
    }
    
}
?> 
        <table class="table">
            <thead>
                <tr>
                 <a href="lab 4.php"  >Create new user</a>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $key => $value) : ?>
                    <tr>
                        <th scope="row"><?= $value['emp_id']; ?></th>
                        <td><?= $value['emp_name']; ?></td>
                        <td><?= $value['emp_address']; ?></td>
                        <td><?= $value['emp_gender']; ?></td>
                        <td><?= $value['emp_Check']; ?></td>
                        <td><a href="Lab 4.3.php?id=<?= $value['emp_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php
                endforeach;
                ?>

            </tbody>
        </table>

    </div>
