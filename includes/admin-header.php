<?php
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Web Project</title>
     <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="includes/style.css">
     <script src="javascript-3.1.1/jquery.min.js"></script>
     <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   </head>
   <body>

   <header>
       <nav class="navbar navbar-inverse">
         <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" href="index.php">Sportiks Administration</a>
           </div>

           <ul class="nav navbar-nav navbar-right">
             <?php
            //  <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Trainers <span class='caret'></span></a>
            //    <ul class='dropdown-menu'>
            //      <li><a href='addtrainer.php'>Add Trainer</a></li>
            //      <li><a href='deltrainer.php'>Delete Trainer</a></li>
            //    </ul>
            //  </li>
             if(isset($_SESSION['admin-id'])){
               echo "
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Employees <span class='caret'></span></a>
                           <ul class='dropdown-menu'>
                             <li><a href='addemp.php'>Add Employee</a></li>
                             <li><a href='remove-emp.php'>Delete Employee</a></li>
                           </ul>
                    </li>

                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Applicants <span class='caret'></span></a>
                           <ul class='dropdown-menu'>
                             <li><a href='applicant-approval.php'>Approve Applicants</a></li>
                           </ul>
                    </li>

                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Leagues <span class='caret'></span></a>
                           <ul class='dropdown-menu'>
                             <li><a href='addleague.php'>Add League</a></li>
                             <li><a href='addsponsor.php'>Add Sponsor</a></li>
                             <li><a href='addleaguesport.php'>Add Sport to League</a></li>
                           </ul>
                    </li>

                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Teams <span class='caret'></span></a>
                           <ul class='dropdown-menu'>
                             <li><a href='addteam.php'>Add Team</a></li>
                             <li><a href='remove-teams.php'>Remove Teams</a></li>
                             <li><a href='addteamsport.php'>Add Sport to Team</a></li>
                           </ul>
                    </li>

                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Bookings <span class='caret'></span></a>
                           <ul class='dropdown-menu'>
                             <li><a href='remove-rents.php'>Cancel Rent</a></li>
                             <li><a href='remove-bookings.php'>Cancel Bookings</a></li>
                           </ul>
                    </li>


                     <li><a href='includes/admin-logout.process.php'>Log out</a></li>" ;
             }
             else{
               echo "<li><a href='admin.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
             }
              ?>
           </ul>
         </div>
       </nav>
   </header>
