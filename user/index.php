<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>

<?php 

$q=mysqli_query($conn,"select * from notice");
$r1=mysqli_num_rows($q);   

$qq=mysqli_query($conn,"select * from chat");
$r2=mysqli_num_rows($qq);      
 
$qqq=mysqli_query($conn,"select * from user ");
$r3=mysqli_num_rows($qqq);  

?>



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

        if($page=="notice")
          {
           include('notice.php');      
          }  

        if($page=="profile")
          {
           include('profile.php');      
          }             
      }
    else
    {      
?>                     
<?php } ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Home | KonnectFord</title>
  <link rel="stylesheet" href="../style/userindexmain.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="index.php"><img src="../images/logo.png" height="90" style="margin-top: -30px;" alt="logo"></a>

            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-user"></i>&nbsp; My Profile
                      </a>
                      <div class="dropdown-menu dropdown-with-icons">
                        <a href="index.php?page=update_profile" class="dropdown-item">
                            <i class="fa fa-user"></i>&nbsp; Update Profile
                        </a>
                        
                        <a href="index.php?page=update_password" class="dropdown-item">
                            Update Password
                        </a>
                      </div>
                    </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick=" return confirm('Are you sure to logout?');">
                  <i class="fa fa-sign-out"></i>&nbsp;Logout
                </a>
              </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="page-header header-filter" data-parallax="true">
    <div class="w3-content w3-section" style="height: 70vh;max-width: 95.5%;
    background-size:cover;
    display: flex;
    border:0;
    align-items: center;
    width: 100%;

">

  <img class="mySlides" src="../images/slideshow/1.jpg">
  <img class="mySlides" src="../images/slideshow/2.jpg">
  <img class="mySlides" src="../images/slideshow/3.jpg">

 </div>



<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);
}
</script>

</div>

<span id="home"></span>
    <div class="main main-raised">
    <div class="profile-content">
            <div class="container">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto">
                     <div class="profile">
                          <div class="avatar">

                            <?php 
      $q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
          <img src="../images/person.jpg" width="180"/>
      <?php 
      }
      else
      {
      ?>
            <img class="img-raised rounded-circle img-fluid" title="<?php echo $users['name'];?>" alt="<?php echo $users['name'];?>" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>"/>
      <?php 
      }
      ?>   
                          </div>
                          <div class="name">
                              <h3 class="title"><?php echo $users['name'];?></h3>
                <h6>Member</h6>
                <a href="ttps://slack.com" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-slack"></i></a>
                                <a href="https://twitter.com" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                          
                          </div>
                      </div>
                  </div>
                </div>
                <div class="description text-center"s>
                    <p>About You</p>
                </div>

                <!--===============================================================================================-->

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="notice.php" role="tab" data-toggle="tab">
                                  <i class="material-icons">airplay</i>
                                  <b> <?php echo $r1?></b><br>NOTICES
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="discussion.php" role="tab" data-toggle="tab">
                                  <i class="material-icons">chat</i>
                                    <b style="color: red"><?php echo $r2?></b><br>DISCUSSIONS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile"  role="tab" data-toggle="tab">
                                  <i class="material-icons">account_circle</i>
                                   <b> <?php echo $r3?></b><br>PROFILE
                                </a>
                            </li>
                          </ul>
                        </div>
            </div>
            </div>
        

          <div class="tab-content tab-space">


            <div class="tab-pane active text-center gallery" id="notice">
        </div>

            <div class="tab-pane text-center gallery" id="chat">
        </div>

            <div class="tab-pane text-center gallery" id="profile">
          </div>


          </div>

        
            </div>
        </div>
  </div>
  </div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<script  src="../style/usermain.js"></script>

</body>
</html>

