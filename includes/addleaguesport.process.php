<?php
  session_start();
  include 'connection.php';

  $leaguename=$_POST['leaguename'];
  $sport=$_POST['sport'];

  if(empty($leaguename)){
    header('Location: ../addleaguesport.php?error=empty');
  }
  if(empty($sport)){
    header('Location: ../addleaguesport.php?error=empty');
  }


  $query="SELECT SportID FROM sport WHERE Sport_Name='$sport'";
  if (!$result=$db->query($query)) {
    echo "First query failed";
  }else{
    $row=$result->fetch_assoc();
    $sportid=$row['SportID'];
    // echo $leaguename."<br>";
    // echo $sportid."<br>";

    $query="SELECT LeagueID FROM league WHERE League_Name='$leaguename'";
    if (!$result=$db->query($query)) {
      echo "Second query failed";
    }else{
      if (!$row=$result->fetch_assoc()) {
        header('Location: ../addleaguesport.php?error=invalidleague');
        exit();
      }
      $leagueid=$row['LeagueID'];

      $query="INSERT INTO league_sport (LeagueID,SportID) VALUES ('$leagueid','$row')";

      if (!$result=$db->query($query)) {
        echo "Third Query failed";
      }
    }


  }


  $db->close();
  header('Location: ../addleaguesport.php?result=sportadded');
 ?>
