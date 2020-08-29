<?php 
$q=mysqli_query($conn,"select * from notice");
$r1=mysqli_num_rows($q);			
?>

<?php
session_start();
 require('../dbconfig.php'); ?>

<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>


	
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style/addnotice.css">

</head>
<body>

<div class="contact-container">


  <h2>Total Number of Recent Notices: <?php echo $r1?></h2>
  <?php echo @$err;?>


  <ul class="actions">
    <li><a href="#" id="contact" class="button big">ADD NEW NOTICE</a></li>
  </ul>
</div>

<div class="cd-popup contact" role="alert" style="overflow: auto;margin-top: -40px;">
  <form method="post"  id="contactform" class="contact-form">
    <div class="cd-popup-container" style="">
      <p style="">
        <a href="" class="cd-popup-close cd-close-button">
          <i class="fa fa-times" style="pointer-events:none;"></i>
        </a>
      </p>
      <p><h2 style="margin-top:-70px;margin-bottom:-10px;font-size: 14px;">ADD NOTICE INFORMATION</h2></p>
      <div class="name" style="color: black;">
        <label for="name">Subject</label>
        <input type="text" id="name" name="sub" />
      </div>
      <div class="email">
        <label for="email">Detail</label>
        <input type="text" id="email" name="details" />
      </div></div>

     <center> <h6 style="margin-top:20px;margin-bottom:4px;color: #777;font-size: 14px;"><b>Select Users</b></h6></center>



<center>

				
<div style="border:5px solid #f9f9f9;color: #777;border-radius:10px;padding: 15px 8px;width: 60%;font-weight: 0;">

		<label class="container" style="letter-spacing: 3px;font-size: 15px;">ALL MEMBERS
				<input type="checkbox" id="select-all" onclick="toggle(this);" /><br />
				<span class="checkmark"></span>
			</label>


			<?php 
	$sql=mysqli_query($conn,"select name,email from user");

	while($r=mysqli_fetch_array($sql))
	{
		echo "<label class='container' style='font-weight:2'>".$r['name']."";		
		echo "<input type='checkbox' name='user[]' value='$r[email]'/>";
		echo "<span class='checkmark'></span>";
		echo "</label>";
	}
			?>

		
		<script type="text/javascript">
			
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

		</script>

</div>
      <br>
  </center>

      <div style="text-align:left"><center>
        <input type="checkbox" id="human" name="human" />
        <label for="human">I am a Verfied Faculty Member.</label></center>
      </div>

      <div class="submit">
        <input type="submit" name="add" id="submit" value="Send" />
      </div>
    </div>
  </form>
</div>

<div class="cd-popup notification" role="alert">
  <div class="cd-popup-container">
    <a href="" class="cd-popup-close cd-close-button"><i class="fa fa-times" style="pointer-events:none;"></i></a>
    <p>
      <h3 id="notification-text"><?php echo @$err;?></h3>
    </p>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../style/addnotice.js"></script>

</body>
</html>