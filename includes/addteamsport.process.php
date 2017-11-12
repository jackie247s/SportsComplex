<?php
  session_start();
  include 'connection.php';

  $teamname=$_POST['teamname'];
  $sport=$_POST['sport'];

  if(empty($teamname)){
    header('Location: ../addleaguesport.php?error=empty');
  }
  if(empty($sport)){
    header('Location: ../addleaguesport.php?error=empty');
  }


  $query="SELECT SportID FROM sport WHERE Sport_Name='$sport'";
  if (!$result=$db->query($query)) {
    echo "First query failed";
  }else{
    if (!$row=$result->fetch_assoc()) {
      header('Location: ../addteamsport.php?error=invalidsport');
      exit();
    }
    $sportid=$row['SportID'];
    // echo $teamname."<br>";
    // echo $sportid."<br>";

    $query="SELECT TeamID FROM team WHERE Team_Name='$teamname'";
    if (!$result=$db->query($query)) {
      echo "Second query failed";
    }else{
      if (!$row=$result->fetch_assoc()) {
        header('Location: ../addteamsport.php?error=invalidteam');
        exit();
      }
      $teamid=$row['TeamID'];

      $query="INSERT INTO team_sport (TeamID,SportID) VALUES ('$teamid','$sportid')";

      if (!$result=$db->query($query)) {
        echo "Third Query failed";
      }
    }


  }


  $db->close();
  header('Location: ../addteamsport.php?result=sportadded');
 ?>
