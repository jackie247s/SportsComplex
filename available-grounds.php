<?php
  include 'includes/header.php';
  $sport=$_POST['sport'];
  $_SESSION['sport']=$sport;
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Available Grounds</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Ground Name</th>
            <th>Reservation Amount</th>
            <th>Manager Name</th>
          </tr>
        </thead>
        <tbody>
          <form action="customerid.php?request=ground" method="POST">
            <?php

            include 'includes/connection.php';
            $query="SELECT g.groundname,g.GroundID,g.manager_name,g.reservation_amount FROM ground g LEFT JOIN ground_reservation r ON g.GroundID=r.GroundID WHERE r.GroundID IS NULL AND g.SportID='$sport' ";
            $result=$db->query($query);


            while(($row=$result->fetch_assoc())!=false){
                $id=$row['GroundID'];
                $groundname=$row['groundname'];
                $amount=$row['reservation_amount'];
                $managername=$row['manager_name'];
                echo "<tr class='success'><td>$groundname</td><td>$amount</td><td>$managername</td><td><button class='btn btn-default' type='submit' name='groundid' value='$id'/>Book</button></td>";
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
