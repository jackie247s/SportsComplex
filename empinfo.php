<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
 ?>

 <?php

  include 'includes/connection.php';
  $eid=$_POST['eid'];

  if(empty($eid)){
    header('Location: checkemp.php?error=empty');
  }

  $query="SELECT e.DepartmentID,firstname,lastname,age,dob,address,DName,phonenumber FROM employee e JOIN department d ON e.DepartmentID=d.DepartmentID WHERE EmployeeID='$eid'";

  if(!$result=$db->query($query)){
    echo "Query failed";
  }else{
    $row=$result->fetch_assoc();
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $age=$row['age'];
    $dob=$row['dob'];
    $address=$row['address'];
    $department=$row['DName'];
    $phoneno=$row['phonenumber'];
  }
  ?>

 <?php
 include 'includes/footer.php';
  ?>
