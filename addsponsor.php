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
         if(strpos($url,'error=leaguetaken')!==false){
           echo "<p>The specified league already has a sponsor. Please try a different one.</p>";
         }
         if(strpos($url,'error=incorrectleague')!==false){
           echo "<p>The league name you entered is invalid.</p>";
         }
         if(strpos($url,'result=sponsoradded')!==false){
           echo "<p>Sponsor successfully added</p>";
         }
          ?>
       </div>
       <form  action="includes/addsponsor.process.php" method="POST">
         <div class="form-group">
           <label for="season">Sponsor Name: </label>
             <input class="form-control" type="text" id="season" placeholder="Sponsor Name" name="sname"/>
         </div>
         <div class="form-group">
           <label for="firstname">League Name: </label>
             <input class="form-control" type="text" id="firstname" placeholder="League Name" name="leaguename"/>
         </div>
         <div class="form-group text-center">
           <button type="submit" class="btn btn-default">Add Sponsor</button>
         </div>
       </form>
     </div>
   </div>
 </div>


 <?php
 include 'includes/footer.php';
  ?>
