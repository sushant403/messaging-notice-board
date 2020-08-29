<?php
session_start();
 require('dbconfig.php'); ?>

<?php
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty/index.php?page=notice');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FACULTY | KONNECTFORD &copy;</title>

<link rel='stylesheet' href='https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap'>
<link rel="stylesheet" href="style/facultylogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post">
  
  <div class="segment">
    <h1>FACULTY LOGIN</h1>
  </div>
  
  <label>
    <input type="email" name="e" placeholder="Faculty ID" required />
  </label>
  <label>
    <input type="password" name="p" placeholder="Password" required />
  </label>
  <button style="color: #5ec0ed" class="red" name="save" type="submit"><i class="icon ion-md-lock"></i> Log in</button>
  
  <div class="segment">
    <a href="index.php"><button class="unit" type="button"><i class="icon ion-md-arrow-back"></i></button></a>
    <button class="unit" type="button"><i class="icon ion-md-bookmark"></i></button>
    <button class="unit" type="button"><i class="icon ion-md-settings"></i></button>
  </div>
  
</form>

<center>
  
  <a href="admin" style="padding: 10px 90px;
    border: 1px solid #f9f9f9;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), inset 0 10px 10px rgba(255, 255, 255, 0.1);
    border-radius: 0.3em;
    background: #ebecf0;
    color: white;
    font-weight: bold;
    cursor: pointer;
    font-size: 13px;color: inherit;text-decoration: none;color: #babecc">ADMIN? Click Here</a>

</center>
<br><br>
<center><?php echo @$err;?></center>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>