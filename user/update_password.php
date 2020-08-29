<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$op=md5($op);	

$sql=mysqli_query($conn,"select * from user where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
	$err="<div class=udone>Password Updated.</div>";
	}
	else
	{
	$err="<div class=uerrors>New Passwords didn't match!</div>";
	}
}

else
{

$err="<div class=uerrors>Incorrect Password!</div>";

}
}
}

?>

<!DOCTYPE HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../style/loginstyle.css">

</head>


<body>
<div id="id03" class="login">     		
  <form method="post" class="login-content animate" >
    <div class="container">

      <input type="password" placeholder="Current Password" name="op" required>

      <input type="password" placeholder="New Password" name="np" required>

      <input type="password" placeholder="Re-enter Password" name="cp" required>
        
      <button type="submit" style="background-color:black; " value="Update Password" name="save">Update</button>
      <button type="reset" style="background-color: grey;">Reset</button>
      
    </div> 

     <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
         	<span style="float: right"><?php echo @$err;?></span>
    </div>

  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>