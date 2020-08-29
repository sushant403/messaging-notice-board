<?php
 require('../dbconfig.php'); ?>

<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>

<div style="position: absolute;top:45%;left:25%;border:1px solid black;border-radius: 5px;padding: 10px 12px;">
<h2>ALL NOTICES</h2>

<table class="table table-bordered" style="padding: 8px 8px;">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>


		<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>

</div>

<?php }?>