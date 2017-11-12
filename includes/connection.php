<?php
 @$db=new mysqli('localhost','root','','hr');

 if(mysqli_connect_errno()){
   die("Error connecting to the database. Error no: ".mysqli_connect_error());
 }
 ?>
