<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
 ?>
 <br>
 <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Team Name</th>
            <th>Sport</th>
          </tr>
        </thead>
        <tbody>
          <form action="includes/removeteams.process.php" method="POST">
            <?php

            include 'includes/connection.php';
            $query='SELECT * FROM team';
            if(!$result=$db->query($query)){
              echo "Query failed";
            }

            while(($row=$result->fetch_assoc())!=false){
                $teamid=$row['TeamID'];
                $teamname=$row['Team_Name'];
                $sport=$row['Sport'];
                echo "<tr class='success'><td>$teamname</td><td>$sport</td><td><input type='checkbox' name='teamremoval_ids[]' value='$teamid'/></td>";
            }

            $result->free();
            $db->close();

            ?>
            <input type="submit" value="Approve" name="approvalsubmit">
          </form>
        </tbody>
      </table>

<?php
  include 'includes/footer.php';
?>
