<?php
  session_start();
  include 'connection.php';

  if (!isset($_SESSION['cid']) && !isset($_SESSION['id'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $phoneno=$_POST['phonenumber'];

    if(empty($firstname)){
      header('Location: ../bookequipment.php?error=empty');
      exit();
    }
    if(empty($lastname)){
      header('Location: ../bookequipment.php?error=empty');
      exit();
    }
    if(empty($address)){
      header('Location: ../bookequipment.php?error=empty');
      exit();
    }
    if(empty($phoneno)){
      header('Location: ../bookequipment.php?error=empty');
      exit();
    }

    $date=date('Y-m-d');
    $query="INSERT INTO customer(firstname,lastname,phonenumber,address) VALUES('$firstname','$lastname','$phoneno','$address')";

    if(!$result=$db->query($query)){
      echo "Query failed";
    }else{
      $query="SELECT IDCUSTOMER FROM customer WHERE phonenumber='$phoneno'";
      if(!$result=$db->query($query)){
        echo "Second query failed";
        $db->close();
      }else{
        $row=$result->fetch_assoc();
        $id=$row['IDCUSTOMER'];
        $_SESSION['cid']=$id;
        $equipmentid=$_SESSION['equipmentid'];
        $esport=$_SESSION['esport'];


        $query="INSERT INTO equipment_reservation(CustomerID,EquipmentID) VALUES('$id','$equipmentid')";

        if (!$result=$db->query($query)) {
          echo "Third query failed";
          echo $sport;
          $db->close();
        }else{
          $db->close();
          unset($_SESSION['equipmentid']);
          $email=$_POST['email'];
          $subject="Equipment Renting";
          $message="Your equipment has been rented";
          mail($email,$subject,$message);
          header('Location: ../bookingsuccess.php');
        }
      }

    }
  } else{
    $equipmentid=$_SESSION['equipmentid'];
    $esport=$_SESSION['esport'];
    if (isset($_SESSION['id'])) {
      $id=$_SESSION['id'];
    }
    else if (isset($_SESSION['cid'])) {
      $id=$_SESSION['cid'];
    }



    $query="INSERT INTO equipment_reservation(CustomerID,EquipmentID) VALUES('$id','$equipmentid')";

    if (!$result=$db->query($query)) {
      echo "Third query failed";
      echo $sport;
      $db->close();
    }else{
      $db->close();
      unset($_SESSION['equipmentid']);
      $email=$_POST['email'];
      $subject="Equipment Renting";
      $message="Your equipment has been rented";
      mail($email,$subject,$message);
      header('Location: ../bookingsuccess.php');
    }

  }

 ?>
