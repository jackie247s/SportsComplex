<?php
  session_start();
  include 'connection.php';

  if(!isset($_SESSION['cid']) && !isset($_SESSION['id'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $phoneno=$_POST['phonenumber'];

    if(empty($firstname)){
      header('Location: ../bookground.php?error=empty');
      exit();
    }
    if(empty($lastname)){
      header('Location: ../bookground.php?error=empty');
      exit();
    }
    if(empty($address)){
      header('Location: ../bookground.php?error=empty');
      exit();
    }
    if(empty($phoneno)){
      header('Location: ../bookground.php?error=empty');
      exit();
    }

    $date=date('Y-m-d');
    $query="INSERT INTO customer (firstname,lastname,phonenumber,address) VALUES('$firstname','$lastname','$phoneno','$address')";

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
        $groundid=$_SESSION['groundid'];
        $sport=$_SESSION['sport'];


        $query="INSERT INTO ground_reservation(CustomerID,R_Date,Expiry_Date,GroundID) VALUES('$id',CURDATE(),CURDATE()+1,'$groundid')";

        if (!$result=$db->query($query)) {
          echo "Third query failed";
          echo $id."<br>";
          echo $groundid."<br>";
          echo $sport;
          $db->close();
        }else{
          $db->close();
          unset($_SESSION['groundid']);
          $email=$_POST['email'];
          $subject="Ground Booking";
          $message="The ground you selected has been booked for ".date('Y-m-d')." Your reservation will expire on ".date('Y-m-d')+1;
          mail($email,$subject,$message);
          header('Location: ../bookingsuccess.php?result=firsttimecustomer');
        }
      }

    }
  }else{
    $groundid=$_SESSION['groundid'];
    $sport=$_SESSION['sport'];
    if (isset($_SESSION['id'])) {
      $id=$_SESSION['id'];
    }
    else if (isset($_SESSION['cid'])) {
      $id=$_SESSION['cid'];
    }


    $query="INSERT INTO ground_reservation(CustomerID,R_Date,Expiry_Date,GroundID) VALUES('$id',CURDATE(),CURDATE()+1,'$groundid')";

    if (!$result=$db->query($query)) {
      echo "Third query failed <br>";
      echo $id."<br>";
      echo $groundid."<br>";
      echo $sport;
      $db->close();
    }else{
      $db->close();
      unset($_SESSION['groundid']);
      $email=$_POST['email'];
      $subject="Ground Booking";
      $message="The ground you selected has been booked for ".date('Y-m-d')." Your reservation will expire on ".date('Y-m-d')+1;
      mail($email,$subject,$message);
      header('Location: ../bookingsuccess.php');

  }
}

 ?>
