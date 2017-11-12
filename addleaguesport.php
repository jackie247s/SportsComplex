<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';

 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">
         <h2>Add Sport to League</h2>
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }
         if(strpos($url,'result=sportadded')!==false){
           echo "<p>Sport successfully added</p>";
         }
         if(strpos($url,'result=invalidleague')!==false){
           echo "<p>The League Name you entered is invalid.</p>";
         }
          ?>
       </div>
       <form  action="includes/addleaguesport.process.php" method="POST">
         <div class="form-group">
           <label for="firstname">League Name: </label>
             <input class="form-control" type="text" id="firstname" placeholder="League Name" name="leaguename"/>
         </div>
         <div class="form-group">
           <label for="season">Sport: </label>
             <input class="form-control" type="text" id="season" placeholder="Sport" name="sport"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Add Sport</button>
         </div>
       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
