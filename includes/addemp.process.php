<?php
  session_start();
  include_once("connection.php");

  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $age=$_POST['age'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $department=$_POST['department'];
  $phoneno=$_POST['phoneno'];

  if(empty($firstname)){
    header('Location: ../addemp.php?error=emptyfirst');
    exit();
  }
  if(empty($lastname)){
    header('Location: ../addemp.php?error=emptylast');
    exit();
  }
  if(empty($age)){
    header('Location: ../addemp.php?error=emptyage');
    exit();
  }
  if(empty($dob)){
    header('Location: ../addemp.php?error=emptydob');
    exit();
  }
  if(empty($address)){
    header('Location: ../addemp.php?error=emptyaddress');
    exit();
  }
  if(empty($department)){
    header('Location: ../addemp.php?error=emptydepartment');
    exit();
  }
  if(empty($phoneno)){
    header('Location: ../addemp.php?error=emptyphoneno');
    exit();
  }

  $query="SELECT DepartmentID FROM department WHERE DName='$department'";
  if (!$result=$db->query($query)) {
    echo "First query failed";
  }else{
    if (!$row=$result->fetch_assoc()) {
      header('Location: ../addemp.php?error=incorrectdepartment');
      exit();
    }
    $departmentid=$row['DepartmentID'];

    $query="INSERT INTO employee(firstname,lastname,age,dob,address,DepartmentID,phonenumber) VALUES ('$firstname','$lastname','$age','$dob','$address','$departmentid','$phoneno')";

    if (!$result=$db->query($query)) {
      echo "Second query failed";

    }else{
      $db->close();
      header('Location: ../addemp.php?result=empadded');
    }
  }


?>
