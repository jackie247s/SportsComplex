<?php
  include 'includes/admin-header.php';
  include 'includes/admin-security.php';
  include 'includes/connection.php';
 ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" ><h3>Sports</h3></div>
    <div class="col-sm-2" ><h4>Current Booking</h4></div>
    <div class="col-sm-2" ><h4>Maintenance Call</h4></div>
    <div class="col-sm-2" ><h4>Upcoming Reservations</h4></div>
    <div class="col-sm-2" ><h4>Book Reservations</h4></div>
  </div>

  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-4" ><h4>Cricket</h4></div>
      <div class="col-sm-2" ><h5>5/10</h5></div>
      <div class="col-sm-2" ><h5>Nhn Chahiey</h5></div>
      <div class="col-sm-2" ><h5>Sarah 05:00</h5></div>
      <div class="col-sm-2" ><input type="button" value="Book Grounds" onclick="window.location.href='booking.php'" /></div>
    </div>
  </div>

  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-4" ><h4>Football</h4></div>
      <div class="col-sm-2" ><h5>3/10</h5></div>
      <div class="col-sm-2" ><h5>Nhn Chahiey</h5></div>
      <div class="col-sm-2" ><h5>Waleed 05:00</h5></div>
      <div class="col-sm-2" ><input type="button" value="Book Grounds" onclick="window.location.href='booking.php'" /></div>
    </div>
  </div>

  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-4" ><h4>Tennis</h4></div>
      <div class="col-sm-2" ><h5>7/10</h5></div>
      <div class="col-sm-2" ><h5>Nhn Chahiey</h5></div>
      <div class="col-sm-2" ><h5>Ali 05:00</h5></div>
      <div class="col-sm-2" ><input type="button" value="Book Grounds" onclick="window.location.href='booking.php'" /></div>
    </div>
  </div>
</div>

</body>
</html>

<?php
  include 'includes/footer.php'
 ?>
