<?php
  session_start();
  include 'connection.php';

  $teamname=$_POST['teamname'];

  if(empty($teamname)){
    header('Location: ../addteam.php?error=empty');
  }


  $query="SELECT TeamID FROM team WHERE Team_Name='$teamname'";
  if (!$result=$db->query($query)) {
    echo "First query failed";
  }else{
    if($row=$result->fetch_assoc()){
      header('Location: ../addteam.php?error=invalidteamname');
      exit();
    }
    // echo $teamname."<br>";
    // echo $sportid;
    $query="INSERT INTO team (Team_Name) VALUES ('$teamname')";

    if (!$result=$db->query($query)) {
      echo "Second Query failed";
    }else{
      $query="SELECT TeamID FROM team WHERE Team_Name='$teamname'";
      if(!$result=$db->query($query)){
        echo "Third query failed";
      }else{
        $db->close();
        header('Location: ../addteam.php?result=teamadded');

      }
    }
  }


  $db->close();
 ?>
