<?php
  include 'includes/header.php';
  if(isset($_SESSION['id'])){
    header('Location: includes/rentequipment.process.php');
  }
  if (isset($_SESSION['cid'])) {
    header('Location: includes/rentequipment.process.php');
  }
 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">
         <h2>Book Equipment</h2>
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }
         $equipmentid=$_SESSION['equipmentid'];
          ?>
       </div>
       <form  action="includes/rentequipment.process.php" method="POST">
         <div class="form-group">
           <label for="firstname">First Name: </label>
             <input class="form-control" type="text" id="firstname" placeholder="First Name" name="firstname"/>
         </div>
         <div class="form-group">
           <label for="lastname">Last Name: </label>
             <input class="form-control" type="text" id="lastname" placeholder="Last Name" name="lastname"/>
         </div>
         <div class="form-group">
           <label for="age">Phone Number: </label>
             <input class="form-control" type="text" id="age" placeholder="Phone number" name="phonenumber"/>
         </div>
         <div class="form-group">
           <label for="address">Address: </label>
             <input class="form-control" type="text" id="address" placeholder="Address" name="address"/>
         </div>
         <div class="form-group">
           <label for="email">Email: </label>
             <input class="form-control" type="text" id="email" placeholder="Email" name="email"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Rent</button>
         </div>
       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
