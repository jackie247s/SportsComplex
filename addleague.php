<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';

 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
     <div class="container">
       <div class="text-center">
         <h2>Add League</h2>
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=empty')!==false){
           echo "<p>Please fill out all fields</p>";
         }
         if(strpos($url,'result=leagueadded')!==false){
           echo "<p>League successfully added</p>";
         }
          ?>
       </div>
       <form  action="includes/addleague.process.php" method="POST">
         <div class="form-group">
           <label for="firstname">League Name: </label>
             <input class="form-control" type="text" id="firstname" placeholder="League Name" name="leaguename"/>
         </div>
         <div class="form-group">
           <label for="season">Season: </label>
             <input class="form-control" type="text" id="season" placeholder="Season" name="season"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Add League</button>
         </div>
       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
