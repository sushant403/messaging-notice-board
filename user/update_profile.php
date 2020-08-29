<?php 
extract($_POST);
if(isset($update))
{

$query="update user set name='$n',mobile='$mob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);


$err="<div class=udone>Profile Updated Successfully.</div>";

}

//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>

<!DOCTYPE HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../style/loginstyle.css">

</head>

<div id="id04" class="login" style="overflow: auto;">     		
  <form method="post" class="login-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

      <?php 
      $q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
          <a href="update_profile_pic.php"><img style="border-radius:50%" src="../images/person.jpg" width="150" height="150" alt="not found"/></a>
      <?php 
      }
      else
      {
      ?>

      <a href="update_profile_pic.php"><img style="border-radius:50%" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="120" height="150" alt="Image Not Found!"/></a>
      <?php 
      }
      ?>
          <center><span><?php echo @$err;?></span></center>
    </div>

    <div class="container">

      <label for="e">Your Email</b></label>
      <input class="form-control" style="cursor:not-allowed;" type="email" readonly="true" placeholder="<?php echo $res['email'];?>"  name="e"/>

      <label for="n">Update Your Name</b></label>
      <input class="form-control" placeholder="<?php echo $res['name'];?>" value="<?php echo $res['name'];?>"  type="text" name="n"/>

      <label for="mob">New Phone Number</b></label>
      <input class="form-control" type="text" placeholder="<?php echo $res['mobile'];?>" value="<?php echo $res['mobile'];?>"  name="mob"/>
        
      <button type="submit" style="background-color:black; " value="Update Profile" name="update">Update Profile</button>
      <button type="reset" style="background-color: grey;">Reset</button>
      
    </div>   
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){
	$("#id04").modal('show');
});


</script>

</body>

	