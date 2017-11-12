<?php
  session_start();
  include_once 'connection.php';

  $ids=$_POST['teamremoval_ids'];
  $n=count($ids);


  $query="DELETE FROM team WHERE TeamID=?";
  $stmt=$db->prepare($query);
  $stmt->bind_param("i",$TeamID);

  for($i=0;$i<$n;$i++){
    $TeamID=$ids[$i];
    $stmt->execute();
  }
  $stmt->close();
  $db->close();
  header('Location: ../remove-teams.php');
 ?>
