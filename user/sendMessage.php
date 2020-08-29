<?php

include "../dbconfig.php";
session_start();
if($_POST)
{
	$name=$_SESSION['user'];
    $msg=$_POST['msg'];

	$sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";


	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location:discussion.php#scroll');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>