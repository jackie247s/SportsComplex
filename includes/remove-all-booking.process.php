<?php
  include 'connection.php';

  $query1="DELETE FROM ground_reservation";
  if (!$result=$db->query($query1)) {
    echo "First query failed";
  }
  $db->close();
  header('Location: ../admin-home.php');
 ?>
