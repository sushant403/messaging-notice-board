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
      }
    else
    {      
?>                     
<?php } ?>

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

    <div class="header">
          <a href="discussion.php#scroll" style="background-color:#007182fb;color: white;">Hello, <?php echo $users['name'];?></a>
          
            <div class="header-right">
          <a href="index.php#home"><i class="fa fa-home"></i>&nbsp;Home</a>
          <a href="../user/logout.php" onclick=" return confirm('Are you sure to logout?');" style="font-weight: bold;margin-right: 10px;">Logout&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
    </div></div>

<script>
  
  $(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout')) {
            return true;
        }

        return false;
    });
});


</script> 
 

<?php 

  if(isset($_SESSION['user']))
  {   
    
    $sql="SELECT * FROM `chat`";

    $query = mysqli_query($conn,$sql);
?>
<div class="chatbox">
 <div style="height:80px;">
          <h2><span style="margin-left:10px;">Welcome to the Discussion Forum</span><br></h2>
          <span style="font-size:11px; margin-left:10px;padding-bottom:15px;
                border-bottom: 2px solid #e0e0e0;"><i>Note: Avoid using foul language and hate speech to avoid banning of account</i></span></br>
</div>
  <div class="display-chat">
<?php
  if(mysqli_num_rows($query)>0)
  {
    while($row= mysqli_fetch_assoc($query)) 
    {
?>
    <div class="message" >
      <p>
        <div id="chat_area" style="margin-left:10px;">
            <div> 

      <img src="../<?php if(empty($row['image'])){echo "images/img-01.png";}else{echo $row['image'];} ?>" style="height:50px; width:50px; position:relative; top:32px; left:10px;">


      <span style="color: #919aa3;font-size:11px; position:relative; top:5px; left:15px;"><i><?php echo date('M-d-Y h:i A',strtotime($row['created_on'])); ?></i></span><br>

      <span style="font-size:14px; position:relative; top:0px; left:69px;"><strong><?php echo $row['name']; ?> :</strong></span>   <span style="margin-left: 70px;"> <?php echo $row['message'];?><br></span>
            </div>  

          </div>
      </p>
    </div>
<?php
    }
  }
  else
  {
?>

<div class="message">
      <p>
        No previous messages available.
      </p>
</div>
<?php
  } 
?>

<br><p style="margin-left: 15px;" id="scroll"><i>&nbsp;&nbsp;Messages End</i></p>

  </div>
        
  <form method="post" action="sendMessage.php">

    <input type="text" width="50" style="position: relative;left:11%;width: 600px;padding: 20px 20px;border:2px solid black;border-radius: 3px;" class="form-control" placeholder="Type message..." name="msg" required/>
          
    <button style="position: relative;right:140px;top:7px; float:right;background: #2471FF;border: none;padding: 10px 20px 10px 20px;border-bottom: 3px solid #5994FF;border-radius: 5px;color: #D2E2FF;" type="submit" id="send_msg" value="<?php echo $id; ?>" required/>
    Send</button>

  </form>

<?php
  }
  else
  {
    header('location:index.php#scroll');
  }
?>    
</div>

  </body>
</html>
