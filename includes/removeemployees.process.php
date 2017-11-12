<?php
  session_start();
  include_once 'connection.php';

  $ids=$_POST['removeemp_ids'];
  $n=count($ids);


  $query="DELETE FROM employee WHERE EmployeeID=?";
  $stmt=$db->prepare($query);
  $stmt->bind_param("i",$EmployeeID);

  for($i=0;$i<$n;$i++){
    $EmployeeID=$ids[$i];
    $stmt->execute();
  }
  $stmt->close();
  $db->close();
  header('Location: ../applicant-approval.php');
 ?>
