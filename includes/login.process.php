<?php
  session_start();
  include_once("connection.php");

  $uid=$_POST['uid'];
  $pwd=$_POST['password'];

  if(empty($uid)){
    header('Location: ../login.php?error=emptyuid');
    exit();
  }
  if(empty($pwd)){
    header('Location: ../login.php?error=emptypwd');
    exit();
  }

  $query="SELECT * FROM applicant WHERE uid='$uid'";
  $result=$db->query($query);

  if(!$row=$result->fetch_assoc()){
    $query="SELECT PlayerID,p.SportID,p.TeamID,t.LeagueID,Team_Name,League_Name from player p LEFT JOIN team t ON p.TeamID=t.TeamID LEFT JOIN league l ON l.LeagueID=t.LeagueID WHERE uid = '$uid' and pwd = '$pwd' ";

    $result=$db->query($query);

    if(!$row=$result->fetch_assoc()){
      $db->close();
      header('Location: ../login.php?error=noentry');
    }
    else{
      $id=$row['PlayerID'];
      $_SESSION['id']=$id;
      $_SESSION['sportid']=$row['SportID'];
      $_SESSION['teamid']=$row['TeamID'];
      $_SESSION['leagueid']=$row['LeagueID'];
      $_SESSION['teamname']=$row['Team_Name'];
      $_SESSION['leaguename']=$row['League_Name'];
      $db->close();
      header('Location: ../user.php');
    }
  }else{
    $db->close();
    header('Location: ../login.php?error=notapproved');
  }

?>
