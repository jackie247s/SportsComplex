<?php
if(!isset($_SESSION['admin-id'])){
  header('Location: admin.php?error=notloggedin');
  die();
}
 ?>
