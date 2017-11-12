<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
 ?>
 <br>
 <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Applicant Name</th>
            <th>DOB</th>
            <th> Age </th>
            <th>Phone number</th>
          </tr>
        </thead>
        <tbody>
          <form action="includes/approve.process.php" method="POST">
            <?php

            // $conn = oci_connect('hr', '123', 'localhost/orcl');
            // if (!$conn) {
            //     $e = oci_error();
            //     trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            // }
            //
            // $stid = oci_parse($conn, 'SELECT * FROM applicant');
            // oci_execute($stid);
            include 'includes/connection.php';
            $query='SELECT * FROM applicant';
            $result=$db->query($query);

            // while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
            while(($row=$result->fetch_assoc())!=false){
                $id=$row['ApplicantID'];
                $name=$row['firstname'];
                $dob=$row['dob'];
                $age=$row['age'];
                $phoneno=$row['phonenumber'];
                echo "<tr class='success'><td>$name</td><td>$dob</td><td>$age</td><td>$phoneno</td><td><input type='checkbox' name='approval_ids[]' value='$id'/></td>";
            }

            // oci_free_statement($stid);
            // oci_close($conn);
            $result->free();
            $db->close();

            ?>
            <br>
            <input type="submit" value="Approve" name="approvalsubmit">
          </form>
        </tbody>
      </table>
      <div class="row">
        <div class="col-md-12 text-center">
          <form action="includes/approve-all.process.php" method="post">
            <button type="submit" class="button btn-default" name="button">Approve All</button>
          </form>
        </div>
      </div>
    </div>

<?php
  include 'includes/footer.php';
?>
