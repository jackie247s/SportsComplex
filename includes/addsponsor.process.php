<?php
  session_start();
  include 'connection.php';

  $leaguename=$_POST['leaguename'];
  $sname=$_POST['sname'];

  if(empty($leaguename)){
    header('Location: ../addleague.php?error=empty');
  }
  if(empty($sname)){
    header('Location: ../addleague.php?error=empty');
  }

  $query="SELECT LeagueID FROM league WHERE League_Name='$leaguename'";

  if(!$result=$db->query($query)){
    echo "First query failed";
  }else{
    if(!$row=$result->fetch_assoc()){
      $db->close();
      header('Location: ../addsponsor.php?error=incorrectleague');
      exit();
    }
    $leagueid=$row['LeagueID'];

    $query="SELECT SponsorID FROM sponsor WHERE LeagueID='$leagueid'";

    if (!$result=$db->query($query)) {
      echo "Second query failed";
    }else{
      if(!$row=$result->fetch_assoc()){

        $query="INSERT INTO sponsor (Sponsor_Name,LeagueID) VALUES ('$sname','$leagueid')";

        if (!$result=$db->query($query)) {
          // echo $leaguename."<br>";
          // echo $sname;
          echo "Third Query failed";
        }


        $db->close();
        header('Location: ../addsponsor.php?result=sponsoradded');
      }else{

        $db->close();
        header('Location: ../addsponsor.php?error=leaguetaken');

      }
    }
  }


 ?>
