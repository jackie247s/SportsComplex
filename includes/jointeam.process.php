<?php
  session_start();
  include 'connection.php';

  $id=$_SESSION['id'];
  $teamid=$_POST['teamid'];

  $query="UPDATE player SET TeamID='$teamid' WHERE PlayerID='$id'";

  if (!$result=$db->query($query)) {
    echo "Query failed";
  }else{
    $query="SELECT t.LeagueID,Team_Name,League_Name FROM team t JOIN league l ON t.LeagueID=l.LeagueID WHERE TeamID='$teamid'";
    if(!$result=$db->query($query)){
      echo "Second query failed";
    }else{
      $row=$result->fetch_assoc();
      $leagueid=$row['LeagueID'];
      $teamname=$row['Team_Name'];
      $leaguename=$row['League_Name'];
      $_SESSION['teamid']=$teamid;
      $_SESSION['leagueid']=$leagueid;
      $_SESSION['teamname']=$teamname;
      $_SESSION['leaguename']=$leaguename;
    }
  }

  $db->close();
  header('Location: ../user.php?result=joinedteam');
 ?>
