<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['faculty_login'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from faculty where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculty Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav style="background-color: black;color: white" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" style="float: right;color: white" href="index.php?page=notice">KONNECTFORD - Faculty Members</a>
                <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello, <?php echo $users['Name'];?></a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" style="background-color: #f9f9f9;" id="side-menu">
                        <li>
                            <a href="index.php?page=notice"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
            
                            <!-- /.nav-second-level -->
                        </li>
                                
            <li>
                 <li>
                                    <a href="index.php?page=notification"><i class="fa fa-eye"></i> Manage Notices</a>
                                </li>               
                                   <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=update_profile"><i class="fa fa-plus fa-fw"></i>Update Profile</a>
                                </li>
                                 <li>
                                    <a href="index.php?page=update_password"><i class="fa fa-eye"></i>Change Password</a>
                                </li>                           
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                        </li>                           
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
      <?php 
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }

      if($page=="notification")
      {
        include('display_notification.php');
      }

      if($page=="notices")
      {
        include('a.php');
      }

      if($page=="notice")
      {
        include('notice.php');
      }

     }
      else
      {
      include('index.php');
 } 
 ?>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>