<?php
  include 'includes/admin-header.php';
 ?>

<div class="container">
  <div class="row text-center">
    <div class="col-md-12">
      <h1>Cancel all rents</h1>
        <form action="includes/remove-all-rents.process.php" method="post">
          <button type="submit" class="btn btn-default" name="button">Cancel Rents</button>
        </form>
    </div>
  </div>
</div>

 <?php
 include 'includes/footer.php';
  ?>
