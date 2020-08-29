<?php
	include('../dbconfig.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($conn,"select user and pass from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$email;
				header('location:dashboard.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Only | KONNECTFORD &copy;</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../style/adminloginstyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post">
  <h1>ADMIN &copy; KONNECTFORD</h1>
  <div class="inset">
  <p>
    <label for="email">ADMIN ID</label>
    <input name="email" type="text" id="email" required/>
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input name="pass" type="password" id="password" required/>
  </p>

  </div>
  <p class="p-container">
    <input name="login" type="submit" id="go" value="Log in">
  </p>
</form>
<center><?php echo @$err;?></center>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
