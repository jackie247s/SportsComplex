<?php
  include 'includes/admin-header.php';
 ?>

<div class="container">
  <div class="row text-center">
    <div class="col-md-12">
      <h1>Cancel all bookings</h1>
        <form action="includes/remove-all-booking.process.php" method="post">
          <button type="submit" class="btn btn-default" name="button">Cancel Bookings</button>
        </form>
    </div>
  </div>
</div>

 <?php
 include 'includes/footer.php';
  ?>
