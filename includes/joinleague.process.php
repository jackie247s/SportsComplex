<?php
  session_start();
  include 'connection.php';

  $id=$_SESSION['id'];
  $teamid=$_SESSION['teamid'];
  $leagueid=$_POST['leagueid'];
  echo $teamid;
  echo $leagueid;

  $query="UPDATE team SET LeagueID='$leagueid' WHERE TeamID='$teamid'";

  if (!$result=$db->query($query)) {
    echo "Query failed";
  }

  $query="SELECT League_Name FROM league WHERE LeagueID='$leagueid'";
  if (!$result=$db->query($query)) {
    echo "Second Query failed";
  }
  $row=$result->fetch_assoc();
  $leaguename=$row['League_Name'];

  $_SESSION['leagueid']=$leagueid;
  $_SESSION['leaguename']=$leaguename;

  $db->close();
  header('Location: ../user.php?result=joinedleague');
 ?>
