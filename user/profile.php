<?php 
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:index.php#scroll');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Discussion Forum | KonnectFord</title>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" type="text/css" href="../style/userindexstyle.css">
  
  </head>
    
  <body>
 
<div class="wrapper" style="top: 45%;left:5%">
    <div class="left">
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
            <img width="180" title="<?php echo $users['name'];?>" alt="Image Not Found" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>"/>
      <?php 
      }
      ?>     

<div class="social_media">
            <ul>
              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
      </div>

      </div>

    <div class="right">
        <div class="info">
            <h3 style="font-size: 15px;letter-spacing: 0px">Member Info.</h3>
            <div class="info_data">
                 <div class="data">
                          <h3 style="text-transform: uppercase;letter-spacing:2px;"><?php echo $users['name'];?></h3> 

                    <h4>Email</h4>
                    <p><?php echo $users['email'];?></p>    

                    <h5 style="margin-top:25px;color:#353c4e;"><a href="index.php?page=update_password">Update-Password</a></h5>

                 </div>

                 <div class="data">
                   <h4 align="right">Gender</h4>
                    <p align="right" style="text-transform: uppercase;"><?php echo $users['gender'];?></p>

                    <h4 align="right">Phone</h4>
                    <p align="right"><?php echo $users['mobile'];?></p>
              </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>