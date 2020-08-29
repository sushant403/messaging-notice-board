

<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

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
                <a class="navbar-brand" href="dashboard.php">KONNECTFORD - ADMIN Management</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" style="background-color: #f9f9f9;" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
						
                            <!-- /.nav-second-level -->
                        </li>
                    						
						<li>
								 <li>
                                    <a href="dashboard.php?info=display_member"><i class="fa fa-eye"></i> Manage Members</a>
                                </li>               
							                     <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=add_faculty"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
                                 <li>
                                    <a href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li>                           
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                            <li>
                                    <a href="dashboard.php?info=contact"><i class="fa fa-user"></i>&nbsp;Contact Requests</a>
                                </li>

                        <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i>Change Password</a>
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
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
	
										
									if($info=="display_member")
										{
											include('display_member.php');
										}
                                        elseif($info=="add_faculty")
                                        {
                                            include('add_faculty.php');
                                        }
                                        
                                    elseif($info=="show_faculty")
                                        {
                                            include('show_faculty.php');
                                        }
                                                                               
                                    elseif($info=="edit_faculty")
                                        {
                                            include('edit_faculty.php');
                                        }   
										
									elseif($info=="contact")
										{
											include('contact.php');
										}					
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}	
								 }
								else
								{
								include('dashboard_home.php');
								}
							?>
				
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
