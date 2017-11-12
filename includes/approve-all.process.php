<?php
  include 'connection.php';

  $query="DELETE FROM applicant";
  $db->query($query);

  $db->close();
  header('Location: ../applicant-approval.php');
 ?>
