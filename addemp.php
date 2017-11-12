<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
?>

<div class="container">
  <div class="jumbotron custom-jumbotron">
    <div class="container">
      <div class="text-center">
        <h2>Add Employee</h2>
        <?php
        $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url,'error=empty')!==false){
          echo "<p>Please fill out all fields</p>";
        }
        if(strpos($url,'error=incorrectdepartment')!==false){
          echo "<p>Please enter a correct department name</p>";
        }
        if(strpos($url,'result=empadded')!==false){
          echo "<p>Employee successfully added</p>";
        }
         ?>
      </div>
      <form  action="includes/addemp.process.php" method="POST">
        <div class="form-group">
          <label for="firstname">First name: </label>
            <input class="form-control" type="text" id="firstname" placeholder="First Name" name="firstname"/>
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
          <label for="applied-sport">Department: </label>
            <input class="form-control" type="text" id="applied-sport" placeholder="Department" name="department"/>
        </div>
        <div class="form-group">
          <label for="phoneno">Phone Number: </label>
            <input class="form-control" type="text" id="phoneno" placeholder="Phone Number" name="phoneno"/>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth </label>
            <input class="form-control" type="text" id="dob" placeholder="Date of Birth" name="dob"/>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-default">Add Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  include 'includes/footer.php';
?>
