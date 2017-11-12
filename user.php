<?php
  include 'includes/header.php';
  if(!isset($_SESSION['id'])){
    header('Location: index.php');
    die();
  }
  include 'includes/connection.php';
  $id=$_SESSION['id'];

 ?>

 <div class="container">
   <br>
   <div class="jumbotron player-jumbotron">
     <div class="row">
       <div class="text-center">
         <h2>Player Info</h2>
       </div>
       <br>
       <div class="col-md-4">
         <img class="img-responsive img-hover img-circle" src="images/Sniper.jpg" alt="" width="304" height="206">
       </div>
       <div class="col-md-8">
         <?php


          $query="SELECT * FROM player WHERE PlayerID='$id'";
          $result=$db->query($query);
          $row=$result->fetch_assoc();

          $firstname=$row['firstname'];
          $lastname=$row['lastname'];
          $address=$row['address'];
          $age=$row['age'];

          echo "<h3>$firstname $lastname</h3>
                <p>$address</p>
                <p>$age</p>";
          ?>
       </div>
     </div>
     <div class="row text-center">
       <div class="col-md-12">
         <?php
         $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'error=joinedteam')!==false){
           echo "<p>You are already a member of a team</p>";
         }
         if(strpos($url,'result=joinedteam')!==false){
           echo "<p>You have successfully joined a team</p>";
         }
         if(strpos($url,'result=joinedleague')!==false){
           echo "<p>You have successfully registered your team for a league</p>";
         }
         if(strpos($url,'error=joinedleague')!==false){
           echo "<p>Your team has already joined a league</p>";
         }
         if(strpos($url,'error=notjoinedteam')!==false){
           echo "<p>You need to join a team before you can register for a league</p>";
         }
          ?>
       </div>
     </div>
   </div>

   <hr>

   <div class="jumbotron">
     <div class="row text-center">
       <div class="col-md-6">
         <h2>Team Name</h2>
         <?php
         if (isset($_SESSION['teamname'])) {
           $teamname=$_SESSION['teamname'];
           echo "<p>$teamname</p>";
         }
         else{
           echo "<p>Not Joined</p>";
         }
          ?>
       </div>
       <div class="col-md-6">
         <h2>League Name</h2>
         <?php
          if (isset($_SESSION['leaguename'])) {
            $leaguename=$_SESSION['leaguename'];
            echo "<p>$leaguename</p>";
          }
          else{
            echo "<p>Not Registered</p>";
          }
          ?>
       </div>
     </div>
   </div>

   <hr>

 </div>

<?php
  include 'includes/footer.php';
?>
