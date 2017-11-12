<?php
  session_start();
  include_once("connection.php");

  $first=$_POST['firstname'];
  $last=$_POST['lastname'];
  $age=$_POST['age'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $applied_sport=$_POST['applied-sport'];
  $phoneno=$_POST['phoneno'];
  $uid=$_POST['uid'];
  $pwd=$_POST['password'];

  if(empty($first)){
    header('Location: ../register.php?error=emptyfirst');
    exit();
  }
  if(empty($last)){
    header('Location: ../register.php?error=emptylast');
    exit();
  }
  if(empty($age)){
    header('Location: ../register.php?error=emptyage');
    exit();
  }
  if(empty($dob)){
    header('Location: ../register.php?error=emptydob');
    exit();
  }
  if(empty($address)){
    header('Location: ../register.php?error=emptyaddress');
    exit();
  }
  if(empty($applied_sport)){
    header('Location: ../register.php?error=emptysport');
    exit();
  }
  if(empty($phoneno)){
    header('Location: ../register.php?error=emptyphoneno');
    exit();
  }
  if(empty($uid)){
    header('Location: ../register.php?error=emptyuid');
    exit();
  }
  if(empty($pwd)){
    header('Location: ../register.php?error=emptypwd');
    exit();
  }

  $query="SELECT * FROM player WHERE uid='$uid'";
  $result=$db->query($query);

  if (!$row=$result->fetch_assoc()) {

    $query="SELECT SportID FROM sport WHERE Sport_Name='$applied_sport'";
    if(!$result=$db->query($query)){
      echo " Second query failed";
    }
    else{
      $row=$result->fetch_assoc();
      $sportid=$row['SportID'];
      $query="INSERT INTO applicant (firstname,lastname,age,dob,address,SportID,phonenumber,uid,pwd) VALUES ('$first','$last','$age','$dob','$address','$sportid','$phoneno','$uid','$pwd')";
      if (!$result=$db->query($query)) {
        echo "Third query failed";
      }

      $db->close();
  
      header('Location: ../login.php?result=signedup');
    }


  }else {
    $db->close();
    header('Location: ../register.php?error=uidtaken');
  }
?>
