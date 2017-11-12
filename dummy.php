<?php
  session_start();
  $email="k142170@nu.edu.pk";
  $subject="Ground Booking";
  $message="The ground you selected has been booked for ".date('Y-m-d')." Your reservation will expire on ".date('Y-m-d')+1;
  mail($email,$subject,$message);
 ?>
