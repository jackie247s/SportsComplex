<?php
  session_start();
  include_once 'connection.php';

  $ids=$_POST['approval_ids'];
  $n=count($ids);


  $query="DELETE FROM applicant WHERE ApplicantID=?";
  $stmt=$db->prepare($query);
  $stmt->bind_param("i",$ApplicantID);

  for($i=0;$i<$n;$i++){
    $ApplicantID=$ids[$i];
    $stmt->execute();
  }
  $stmt->close();
  $db->close();
  header('Location: ../applicant-approval.php');
 ?>
