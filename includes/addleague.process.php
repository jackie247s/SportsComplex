<?php
  session_start();
  include 'connection.php';

  $leaguename=$_POST['leaguename'];
  $season=$_POST['season'];

  if(empty($leaguename)){
    header('Location: ../addleague.php?error=empty');
  }
  if(empty($season)){
    header('Location: ../addleague.php?error=empty');
  }

  $query="INSERT INTO league (League_Name,Season) VALUES ('$leaguename','$season')";

  if (!$result=$db->query($query)) {
    // echo $leaguename."<br>";
    // echo $season;
    echo "Query failed";
  }


  $db->close();
  header('Location: ../addleague.php?result=leagueadded');
 ?>
