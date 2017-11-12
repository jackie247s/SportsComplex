<?php
  include 'includes/header.php';
  if(isset($_SESSION['teamid'])){
    header('Location: user.php?error=joinedteam');
  }
  $sportid=$_SESSION['sportid'];
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Available Teams</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Team Name</th>
          </tr>
        </thead>
        <tbody>
          <form action="includes/jointeam.process.php" method="POST">
            <?php
            include 'includes/connection.php';
            $query="SELECT t.TeamID,Team_Name FROM team t LEFT JOIN player p ON t.TeamID=p.TeamID JOIN team_sport s ON s.TeamID=t.TeamID WHERE s.SportID='$sportid' GROUP BY t.TeamID HAVING COUNT(t.TeamID)<5";
            $result=$db->query($query);

            while(($row=$result->fetch_assoc())!=false){
                $teamid=$row['TeamID'];
                $teamname=$row['Team_Name'];
                echo "<tr class='success'><td>$teamname</td><td><button class='btn btn-default' type='submit' name='teamid' value='$teamid'/>Join </button></td>";
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
