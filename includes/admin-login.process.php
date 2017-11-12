<?php
  session_start();
  include_once("connection.php");

  $uid=$_POST['uid'];
  $pwd=$_POST['password'];

  if(empty($uid)){
    header('Location: ../admin.php?error=emptyuid');
    exit();
  }
  if(empty($pwd)){
    header('Location: ../admin.php?error=emptypwd');
    exit();
  }

  $query="SELECT * from admin WHERE uid = '$uid' and pwd = '$pwd'";

  $result=$db->query($query);

  if(!$row=$result->fetch_assoc()){
    $db->close();
    header('Location: ../admin.php?error=noentry');
    exit();
  }
  else{
    $_SESSION['admin-id']=$row['AdminID'];
    $db->close();
    header('Location: ../admin-home.php');
  }
?>
