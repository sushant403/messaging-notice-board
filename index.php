<?php
session_start();
 require('dbconfig.php'); ?>

<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<div class=errors>Username and Password Required!</div>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user/index.php');
}

else
{

$err="<div class=errors>Incorrect Login Credentials!</div>";

}
}
}
?>

<?php 
extract($_POST);
if(isset($contact))
{
mysqli_query($conn,"insert into contact values('','$n','$e','$msg',now())");

	
$errors="<div class=contact>Admin Will Contact You Soon.</div>";	
}
?>



<!DOCTYPE html>
<head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">

			<title>KonnectFord | Notices and Discussions</title>


			<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

			<link rel="stylesheet" type="text/css" href="style/indexstyle.css">

		</head>
		<body>

<header>
        <div class="nav">
            <a href="index.php" class="logo">
                <img src="images/logo.png" height="100" alt="logo">
            </a>
            <nav>
                <a href="#about">ABOUT</a>
            	<a href="creators.html">CREATORS</a>
                <a href="#contact">CONTACT</a>
                <a href="faculty_login.php">FACULTY</a>
                <a href="registration.php" class="btn-nav">SIGN UP</a>
            </nav>
        </div>
<?php echo @$err;?>
        <div class="header-container">
            <p class="small">Never Miss The Recent Notices.</p>
            <p class="large">Find yourself,
                <span>in an interesting discussion</span> from your collegemates.</p>
                
               <p class="small"> <span><b>LOGIN NOW</b></span></p>

            <form method="post" enctype="multipart/form-data">
                <input type="email" name="e" id="" placeholder="Enter your Email" required/>&nbsp;
                <input type="password" name="p" id="" placeholder="Enter your Password" required/>
                <button type="submit" name="save"><i class="fa fa-user"></i>
                    
                </button>
            </form>
        </div>

    </header>

<div class="thead" id="about">

 <div class="header-container2">
	<center><p class="large" style="text-align: right;margin-top:-70px;margin-bottom:70px;padding: 10px 10px;width: 110px;border-bottom: 4px solid #5ec9ed"><b>ABOUT</b></p></center>
            <p class="small">Users are required to register and login to view the notices and the discussions.</p><br>

            <p class="small" style="font-size: 1.3rem;">Access the college’s current news, notices.
                Have a general text conversation, more like a discussion forum of reddit, stack-overflow. </p><br>

             <p class="small">Once logged in to the site, users can view the current notices, read and send messages
				in the discussion / message forum, change own password, update their profile, request to admin
				and so on for now.</p>
                
        </div>
    </div>

<div class="uhead" id="contact">
 <div class="header-container3">

<form method="post" enctype="multipart/form-data">          
<div class="contact-us">
  <div class="title">
  	<?php echo @$errors;?>
    <h1>Get in Touch.</h1>
  </div>
  <div class="form">
    <div class="form-items">
       <i class="fas fa-user"></i><input type="text" name="n" class="input" placeholder="Username" required/>
     
    </div>
    <div class="form-items">
      <input type="text" name="e" class="input" placeholder="Email" required/>
      <i class="fas fa-envelope"></i>
    </div>
    <div class="form-items">
      <textarea class="input message" cols="30" rows="10" name="msg" placeholder="Message..." required/></textarea>
    </div>
  </div>
  
  <button type="submit" name="contact" class="btn">
    Submit
    <i class="fas fa-arrow-right"></i>
  </div>
  
  <div class="social-icons"><a href="">
    <div class="facebook">
      <i class="fab fa-facebook-f"></i>
    </div></a>

    <div class="twitter"><a href="">
      <i class="fab fa-twitter"></i>
    </div></a>

    <div class="google"><a href="">
      <i class="fab fa-google-plus-g"></i>
    </div></a>
    
  </div>
  		
</div>

</form>

</div>
</div>

</body>

</html>
