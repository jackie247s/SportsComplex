<?php
  include 'includes/header.php';
  if(!isset($_SESSION['teamid'])){
    header('Location: user.php?error=notjoinedteam');
  }
  if(isset($_SESSION['leagueid'])){
    header('Location: user.php?error=joinedleague');
  }
  $sportid=$_SESSION['sportid'];
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Available Leagues</h1>
      <table class="table">
        <thead>
          <tr>
            <th>League Name</th>
          </tr>
        </thead>
        <tbody>
          <form action="includes/joinleague.process.php" method="POST">
            <?php
            include 'includes/connection.php';
            $query="SELECT l.LeagueID,League_Name FROM league l LEFT JOIN team t ON l.LeagueID=t.LeagueID JOIN league_sport s ON s.LeagueID=l.LeagueID WHERE s.SportID='$sportid' GROUP BY (l.LeagueID) HAVING COUNT(t.TeamID)<6";
            $result=$db->query($query);


            while(($row=$result->fetch_assoc())!=false){
                $leagueid=$row['LeagueID'];
                $leaguename=$row['League_Name'];
                echo "<tr class='success'><td>$leaguename</td><td><button class='btn btn-default' type='submit' name='leagueid' value='$leagueid'/>Join </button></td>";
            }

            $result->free();
            $db->close();

            ?>
            <br>
          </form>
        </tbody>
      </table>
    </div>
  </div>
</div>

 <?php
 include 'includes/footer.php';
  ?>
