<?php
  include 'includes/header.php';
 ?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
     <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     <div class="item active" style="background-image:url('images/home-cricket.jpg');">
       <div class="carousel-caption">
         <h1>Welcome to our Sports Complex App</h1>
         <h3>Feel free to explore our services</h3><br>
         <a href="grounds.php" class="btn btn-danger">Book a Ground</a> &nbsp<a href="equipment.php" class="btn btn-danger">Rent Equipment</a>
       </div>
     </div>

     <div class="item " style="background-image:url('images/home-football.jpg');">
       <div class="carousel-caption">
         <h1>We sincerely hope you enjoy your stay</h1>
       </div>
     </div>

     <div class="item" style="background-image:url('images/home-tennis.jpg');">
       <div class="carousel-caption">
         <h1>Our services are ranked among the topmost in the World</h1>
       </div>
     </div>

     <!-- <div class="item">
       <img src="img_flower2.jpg" alt="Flower">
     </div> -->
   </div>

   <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>

<?php
  include 'includes/footer.php';
?>
