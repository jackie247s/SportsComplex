<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">
         <h3>Check Employee Details</h3>
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }

          ?>
       </div>
       <form  action="empinfo.php" method="POST">
         <div class="form-group">
           <label for="firstname">Employee ID: </label>
             <input class="form-control" type="text" id="firstname" placeholder="Employee ID" name="eid"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Enter</button>
         </div>

       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
