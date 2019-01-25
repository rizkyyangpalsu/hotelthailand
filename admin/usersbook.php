<?php
 session_start();
 include('db.php');
 if(!isset($_SESSION["users"]))
 {
      header("location:users.php");

 }

 ?>
 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>User page	</title>
     <!-- Bootstrap Styles-->
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
     <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- Custom Styles-->
     <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 </head>

 <body>
     <div id="wrapper">
         <nav class="navbar navbar-default top-navbar" role="navigation">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="usersbook.php"> <?php echo $_SESSION["users"]; ?> </a>
             </div>

             <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="edit_users.php" aria-expanded="false">
                         <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-user">
                         <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                         </li>
                         <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                         </li>
                         <li class="divider"></li>
                         <li><a href="metu.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                         </li>
                     </ul>
                     <!-- /.dropdown-user -->
                 </li>
                 <!-- /.dropdown -->
             </ul>
         </nav>
         <!--/. NAV TOP  -->
         <nav class="navbar-default navbar-side" role="navigation">
             <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">

                     <li>
                         <a class="active-menu" href="reservation.php"><i class="fa fa-dashboard"></i> reservation </a>
                     </li>

                     <li>
                         <a href="metu.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                     </li>




 					</ul>

             </div>

         </nav>
         <!-- /. NAV SIDE  -->
         <div id="page-wrapper">
             <div id="page-inner">


                 <div class="row">
                     <div class="col-md-28">
                       <a href="reservation.php" class="btn btn-success" role="button">Reservation Book</a>


                     </div>
                 </div>
                 <!-- /.
