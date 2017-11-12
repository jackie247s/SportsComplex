<?php
  include 'includes/header.php';
  $esport=$_POST['esport'];
  $_SESSION['esport']=$esport;
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Available Equipment</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Equipment Name</th>
            <th>Rent Price</th>
          </tr>
        </thead>
        <tbody>
          <form action="customerid.php?request=equipment" method="POST">
            <?php

            include 'includes/connection.php';
            $query="SELECT e.EquipmentID,E_Name,price FROM equipments e LEFT JOIN equipment_reservation r ON e.EquipmentID=r.EquipmentID JOIN equipment_price p ON e.PriceID=p.PriceID WHERE r.EquipmentID IS NULL AND e.SportID='$esport'";
            if(!$result=$db->query($query)){
              echo "Query failed";
            }


            while(($row=$result->fetch_assoc())!=false){
                $id=$row['EquipmentID'];
                $name=$row['E_Name'];
                $price=$row['price'];
                echo "<tr class='success'><td>$name</td><td>$price</td><td><button class='btn btn-default' type='submit' name='equipmentid' value='$id'/>Book</button></td>";
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
