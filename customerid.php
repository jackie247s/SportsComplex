<?php
  include 'includes/header.php';
  if (isset($_SESSION['id'])) {
    if (isset($_POST['groundid'])) {
      header('Location: includes/bookground.process.php');
    }
    if (isset($_POST['equipmentid'])) {
      header('Location: includes/rentequipment.process.php');
    }
  }
 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">

         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }
         if (isset($_POST['groundid'])) {
           $groundid=$_POST['groundid'];
           $_SESSION['groundid']=$groundid;
           $_SESSION['request']="Ground";
           echo "<h2>Book Ground</h2>";
         }
         if (isset($_POST['equipmentid'])) {
           $equipmentid=$_POST['equipmentid'];
           $_SESSION['equipmentid']=$equipmentid;
           $_SESSION['request']="Equipment";
           echo "<h2>Book Equipment</h2>";
         }
          ?>
       </div>
       <form  action="includes/getcustomerid.process.php" method="POST">
         <div class="form-group">
           <label for="firstname">Customer ID: </label>
             <input class="form-control" type="text" id="firstname" placeholder="Customer ID" name="cid"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Enter</button>
         </div>

         <?php
         if($_SESSION['request']=="Ground"){
           echo "<a href='bookground.php'>Not a Customer?</a>";
         }
         if($_SESSION['request']=="Equipment"){
           echo "<a href='bookequipment.php'>Not a Customer?</a>";
         }
          ?>

       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
