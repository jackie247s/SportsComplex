<?php
  include 'includes/header.php';
  if(!isset($_SESSION['id'])){
    header('Location: login.php?error=notloggedin');
    die();
  }

?>
  <div class="container">
    <div class="jumbotron custom-jumbotron">
      <div class="container">
        <div class="text-center">
          <h2>Register Team</h2>
          <?php
          $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          if(strpos($url,'error=empty')!==false){
            echo "<p>Please fill out all fields</p>";
          }
          if(strpos($url,'error=uidtaken')!==false){
            echo "<p>The username you chose has already been taken. Please try a different username.</p>";
          }
           ?>
        </div>
        <form  action="includes/signup.process.php" method="POST">
          <div class="form-group">
            <label for="firstname">Team Name: </label>
              <input class="form-control" type="text" id="firstname" placeholder="Team Name" name="firstname"/>
          </div>
          <div class="form-group">
            <label for="lastname">Team Captain: </label>
              <input class="form-control" type="text" id="lastname" placeholder="Team Captain" name="lastname"/>
          </div>
          <div class="form-group">
            <label for="age">Age: </label>
              <input class="form-control" type="text" id="age" placeholder="Age" name="age"/>
          </div>
          <div class="form-group">
            <label for="address">Address: </label>
              <input class="form-control" type="text" id="address" placeholder="Address" name="address"/>
          </div>
          <div class="form-group">
            <label for="applied-sport">Applied League: </label>
              <input class="form-control" type="text" id="applied-sport" placeholder="Applied League" name="applied-sport"/>
          </div>
          <div class="form-group">
            <label for="phoneno">Phone Number: </label>
              <input class="form-control" type="text" id="phoneno" placeholder="Phone Number" name="phoneno"/>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
          </div>
          <?php
            if(isset($_SESSION['uidfail'])){
              echo "This username has been taken. Please try a different username.";
            }
           ?>
        </form>
      </div>
    </div>
  </div>



<?php
  include 'includes/footer.php';
?>
