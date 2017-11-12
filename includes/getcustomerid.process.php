<?php
  session_start();
  include 'connection.php';

  $cid=$_POST['cid'];
  $request=$_SESSION['request'];
  echo $request;
  unset($_SESSION['request']);

  $query="SELECT IDCUSTOMER FROM customer WHERE IDCUSTOMER='$cid'";

  if (!$result=$db->query($query)) {
    echo "Query failed";
  }
  $row=$result->fetch_assoc();
  $cid=$row['IDCUSTOMER'];
  if(!isset($cid)){
    header('Location: ../customerid.php?error=invalidcid');
    exit();
  }
  $_SESSION['cid']=$cid;
  $db->close();
  if ($request=="Ground") {
    header('Location: bookground.process.php');
  }
  else if ($request=="Equipment") {
    header('Location: rentequipment.process.php');
  }
  else{
    echo "Error redirecting";
  }

 ?>
