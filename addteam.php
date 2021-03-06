<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';

 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">
         <h2>Add Team</h2>
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }
         if(strpos($url,'error=invalidteamname')!==false){
           echo "<p>The Team Name has already been taken</p>";
         }
         if(strpos($url,'result=teamadded')!==false){
           echo "<p>Team successfully added</p>";
         }
          ?>
       </div>
       <form  action="includes/addteam.process.php" method="POST">
         <div class="form-group">
           <label for="firstname">Team Name: </label>
             <input class="form-control" type="text" id="firstname" placeholder="Team Name" name="teamname"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Add Team</button>
         </div>
       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
