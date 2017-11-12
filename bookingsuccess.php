<?php
  include 'includes/header.php';
 ?>

 <div class="container">
   <div class="row">
     <div class="col-md-2">

     </div>
     <div class="col-md-10">
       <h1>Your Booking was successful</h1>
       <?php
          $today=date('d-m-Y');
          echo "<h3>Your booking is for '$today'. The booking will expire within one day. </h3>";
          $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          if (isset($_SESSION['cid'])) {
            $cid=$_SESSION['cid'];
          }

          if(strpos($url,'result=firsttimecustomer')!==false){
            echo "<p>Your customer id is '$cid'</p>";
          }
       ?>
       <a href="index.php" class="btn btn-default">Return to Home Page</a>
     </div>
   </div>
 </div>

<?php
  include 'includes/footer.php';
 ?>
