<?php 

$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<center><h2 style='color:black'>Total Number of Members: $r1</h2></center>";	


$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<center><h2 style='color:black'>Total Number of Faculty: $rows</h2></center>";	
?>
