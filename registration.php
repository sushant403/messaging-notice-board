<?php
session_start();
 require('dbconfig.php'); ?>

<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<div class=errors>This user already exists</div>";
}
else
{

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$gen','$mobile','$imageName',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<div class=done>Registration successfull !!<a href=index.php>   HOME</a></div>";

}
}

?>

<!DOCTYPE HTML>
<html>
<title>Sign-Up | Enigma Club</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="style/regstyle.css">

<body>
<header>
<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg">
      <h1 class="logo__text"><a href="index.php" style="color: inherit;">KonnectFord</a></h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome</h1><br>
      <h2 class="heading--secondary">Join and Never Miss An Update.</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com" target="_blank"><fa class="fa fa-twitter"></fa></a></li>
        <li><a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://github.com" target="_blank"><i class="fa fa-github"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">

    <form method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="username">Name</label>
        <input class="form-control" type="text" name="n" id="username" placeholder="User Name" required />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="e" id="email" placeholder="abc@xyz.com" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="p" id="password" placeholder="********" required />
      </div>

      <div class="form-group">
        <label for="gender">Gender:&nbsp;</label><font style="color:#787878;"><br>&nbsp;&nbsp;&nbsp;&nbsp;
        Male&nbsp;&nbsp;<input type="radio" name="gen" value="m" id="gender" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Female&nbsp;&nbsp;<input type="radio" name="gen" value="f" id="gender" required/>  </font>
      </div>

      <div class="form-group">
        <label for="mobile">Phone Number</label>
        <input class="form-control" style="-webkit-appearance:none;margin:0;-moz-appearance:textfield;" type="number" name="mobile" id="mobile" placeholder="Mobile / Phone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required />
      </div>   

      <div class="form-group">
        <label for="pic">Upload Picture</label>
        <input type="file" name="img" class="choose"  id="pic" required/>
      </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" name="save" />
          </li>
          <li>
            <a class="signup__link" style="float: left;" href="index.php">I am already a member</a>
            
          </li>
        </ul>
      </div>
    </form>  
  </div>
</svg></div></div></div><?php echo @$err;?></header>

	</body>
</html> 