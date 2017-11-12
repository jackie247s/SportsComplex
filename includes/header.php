<?php
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Web Project</title>
     <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="includes/style.css">
     <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">  -->
     <script src="javascript-3.1.1/jquery.min.js"></script>
     <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   </head>
   <body>

   <header>
       <nav class="navbar navbar-inverse">
         <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" href="index.php">Sportiks</a>
           </div>
           <ul class="nav navbar-nav">
             <li><a href="index.php">Home</a></li>
             <li><a href='grounds.php'>Book Grounds</a></li>
             <li><a href="equipment.php">Rent Equipment</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <?php
             if(isset($_SESSION['id'])){
               $sportid=$_SESSION['sportid'];
               echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>League <span class='caret'></span></a>
                      <ul class='dropdown-menu'>
                        <li><a href='available-leagues.php'>League Registration</a></li>
                        <li><a href='available-teams.php'>Join Team</a></li>
                      </ul>
                    </li>"
                    ;
               echo "<li><a href='user.php'>My Profile</a></li>
                     <li><a href='includes/logout.process.php'>Log out</a></li>" ;
             }
             else{
               echo "<li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                     <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
             }
              ?>
           </ul>
         </div>
       </nav>
   </header>
