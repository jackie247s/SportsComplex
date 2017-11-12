<?php
  include 'includes/admin-header.php';
  if (isset($_SESSION['admin-id'])) {
    header('Location: admin-home.php');
  }
 ?>

 <div class="container">
   <div class="jumbotron custom-jumbotron">
       <div class="row text-center">
         <div class="col-md-12">
           <h2>Sportiks App Admin Login</h2><br>
           <?php
            $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if (strpos($url,"error=empty")) {
              echo "<p>Please fill out all fields</p>";
            }
            if (strpos($url,"error=notloggedin")) {
              echo "<p>You are not logged in</p>";
            }
            ?>
         </div>
       </div>
       <form  action="includes/admin-login.process.php" method="POST">
         <div class="form-group">
           <label for="username">Admin Username</label>
             <input type="text" class="form-control" size="40" id="username" placeholder="User Name" name="uid"/>
         </div>
         <div class="form-group">
           <label for="password">Password</label>
             <input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-default">Submit</button>
         </div>
         <?php
           if (strpos($url,"error=noentry")) {
             echo "<p>Incorrect username or password</p>";
           }
          ?>
       </form>
   </div>
 </div>

 <?php
 include 'includes/footer.php';
  ?>
