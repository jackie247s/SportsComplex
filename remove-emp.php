<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
 ?>
 <br>
 <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Employee Name</th>
            <th>Department</th>
          </tr>
        </thead>
        <tbody>
          <form action="includes/removeemployees.process.php" method="POST">
            <?php

            include 'includes/connection.php';
            $query='SELECT EmployeeID,firstname,lastname,DName FROM employee e JOIN department d ON e.DepartmentID=d.DepartmentID';
            $result=$db->query($query);

            while(($row=$result->fetch_assoc())!=false){
                $id=$row['EmployeeID'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $dname=$row['DName'];
                echo "<tr class='success'><td>$firstname $lastname</td><td>$dname</td><td><input type='checkbox' name='removeemp_ids[]' value='$id'/></td>";
            }

            $result->free();
            $db->close();

            ?>
            <br>
            <button class="btn btn-default" type="submit" name="button">Fire these people</button>
          </form>
        </tbody>
      </table>
    </div>

<?php
  include 'includes/footer.php';
?>
