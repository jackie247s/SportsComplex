<?php
  include 'includes/header.php';
  if(isset($_SESSION['id'])){
    header('Location: home.php');
  }
 ?>
    <div class="container">
      <div class="jumbotron custom-jumbotron">
          <div class="row text-center">
            <div class="col-md-12">
              <h2>Sportiks App Login</h2>
              <?php
              $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              if (strpos($url,"error=empty")!== false) {
                echo "<p>Please fill out all fields</p>";
              }
              if(strpos($url,"result=signedup")!==false){
                echo "<p>Registration complete. Please wait until an administrator approves your application before logging in.</p>";
              }
              if (strpos($url,"error=notapproved")!== false) {
                echo "<p>Your application has not been approved yet. Please wait until an administrator approves your application before logging in.</p>";
              }
              if (strpos($url,"error=notloggedin")) {
                echo "<p>You are not logged in</p>";
              }
               ?>
            </div>
          </div>
          <form  action="includes/login.process.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
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
              $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              if(strpos($url,"error=noentry")!==false){
                echo "<p>Incorrect username or password</p>";
              }
             ?>
          </form>
      </div>
    </div>
<?php
  include 'includes/footer.php';
?>
