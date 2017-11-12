<?php
  include 'includes/header.php';
  if(isset($_SESSION['id'])){
    header('Location: user.php');
  }
?>

<div class="container">
  <div class="jumbotron custom-jumbotron">
    <div class="container">
      <div class="text-center">
        <h2>Register</h2>
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
          <label for="firstname">First name: </label>
            <input class="form-control" type="text" id="firstname" placeholder="First Name" name="firstname" required="required"/>
        </div>
        <div class="form-group">
          <label for="lastname">Last name: </label>
            <input class="form-control" type="text" id="lastname" placeholder="Last Name" name="lastname"/>
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
          <label for="applied-sport">Applied Sport: </label>
            <input class="form-control" type="text" id="applied-sport" placeholder="Applied Sport" name="applied-sport"/>
        </div>
        <div class="form-group">
          <label for="phoneno">Phone Number: </label>
            <input class="form-control" type="text" id="phoneno" placeholder="Phone Number" name="phoneno"/>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth </label>
            <input class="form-control" type="date" id="dob" placeholder="Date of Birth" name="dob"/>
        </div>
        <div class="form-group">
          <label for="username">Username: </label>
            <input class="form-control" type="text" id="username" placeholder="User Name" name="uid"/>
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
            <input class="form-control" type="password" id="password" placeholder="New Password" name="password"/>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Sign Up</button>
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
