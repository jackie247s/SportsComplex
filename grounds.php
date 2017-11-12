<?php
  include 'includes/header.php';
?>
<!-- <ul id="myTab" class="nav nav-tabs nav-justified" role="tablist">
  <li class="active"><a data-toggle="tab" href="#Menu1">Morning</a></li>
  <li><a data-toggle="tab" href="#Menu2">Afternoon</a></li>
  <li><a data-toggle="tab" href="#Menu3">Evening</a></li>
</ul> -->

  <div id="Menu1" class="active">
    <div class="container">
    <div class="row text-center custom-row">
      <div class="col-md-12">
        <h1>Cricket</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="images/cricket-ground.jpg"style="width:500px;height:327px;">
      </div>
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <form action="available-grounds.php" method="post">
          <button class="btn btn-default" type="submit" name="sport" value="1">Book Now</button>
        </form>
      </div>
    </div>
    <br>
    <div id="Menu1" class="tab-pane fade in active">
      <div class="row">
        <div class="col-md-12 text-center custom-row">
          <h1>Football</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="images/football-ground.jpg" style="width:500px;height:327px;">
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <form action="available-grounds.php" method="post">
            <button class="btn btn-default" type="submit" name="sport" value="2">Book Now</button>
          </form>
        </div>
      </div>
    </div>
      <br>
      <div id="Menu1" class="tab-pane fade in active">
        <div class="row text-center custom-row">
          <div class="col-md-12">
            <h1>Tennis</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="images/tennis-ground.jpg" style="width:500px;height:327px;">
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <form action="available-grounds.php" method="post">
              <button class="btn btn-default" type="submit" name="sport" value="3">Book Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div id="Menu2" class="tab-pane">
    <div class="container">
    <div class="row text-center custom-row">
      <div class="col-md-12">
        <h1>Cricket</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="images/cricket-ground.jpg"style="width:500px;height:327px;">
      </div>
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-default">Book Now</button>
      </div>
    </div>
    <br>
    <div id="Menu2" class="tab-pane fade in active">
      <div class="row">
        <div class="col-md-12 text-center custom-row">
          <h1>Football</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="images/football-ground.jpg" style="width:500px;height:327px;">
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button type="button" class="btn btn-default">Book Now</button>
        </div>
      </div>
    </div>
      <br>
      <div id="Menu2" class="tab-pane fade in active">
        <div class="row text-center custom-row">
          <div class="col-md-12">
            <h1>Tennis</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="images/tennis-ground.jpg" style="width:500px;height:327px;">
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button type="button" class="btn btn-default">Book Now</button>
          </div>
        </div>
      </div>
    </div>
    </div>


  <div id="Menu3" class="tab-pane fade">
    <div class="container">
    <div class="row text-center custom-row">
      <div class="col-md-12">
        <h1>Cricket</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="images/cricket-ground.jpg"style="width:500px;height:327px;">
      </div>
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-default">Book Now</button>
      </div>
    </div>
    <br>
    <div id="Menu3" class="tab-pane fade in active">
      <div class="row">
        <div class="col-md-12 text-center custom-row">
          <h1>Football</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="images/football-ground.jpg" style="width:500px;height:327px;">
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button type="button" class="btn btn-default">Book Now</button>
        </div>
      </div>
    </div>
      <br>
      <div id="Menu3" class="tab-pane fade in active">
        <div class="row text-center custom-row">
          <div class="col-md-12">
            <h1>Tennis</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="images/tennis-ground.jpg" style="width:500px;height:327px;">
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button type="button" class="btn btn-default">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<?php
  include 'includes/footer.php';
 ?>
