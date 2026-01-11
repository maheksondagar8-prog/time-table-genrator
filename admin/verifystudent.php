<?php
 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }
	
 include("header.html"); 

?>

        <div style="width:950px;background-image:url('../images/bg.png');">

<table style="width:950px;">
<tr>
	<td style="width:125px;">&nbsp;</td>
	<td style="width:700px;">&nbsp;</td>
	<td style="width:125px;">&nbsp;</td>
</tr>
<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div style="width:700px;">

		<center><h2> Verify Student Panel </h2>
	<?php

	include("../config.php");

	$q = "select * from reg";

	$r = mysqli_query($con,$q);

	$c = mysqli_num_rows($r);

	if($c>0)
	{
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th> Username </th><th> Password </th><th> Name </th><th> Current Status </th><th> Set Status </th>";	
		echo "</tr>";
		while($row = mysqli_fetch_array($r))
		{

			echo "<tr>";
			echo "<td>".$row['uname']."</td>";
			echo "<td>".$row['pass']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['status']."</td>";
			if($row['status'] == "Allowed")
			{
				$str = "Disallowed";
			}
			else
			{
				$str = "Allowed";
			}	
			echo "<td><a href='setstatus.php?id=".$row['uname']."&abc=".$str."'>".$str."</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No Data to Display";
	}

	?>
	</center>

	</div>

	</td>
	<td style="width:125px;">&nbsp;</td>

</tr>
<tr>
	<td style="width:125px;">&nbsp;</td>
	<td style="width:700px;">&nbsp;</td>
	<td style="width:125px;">&nbsp;</td>
</tr>
</table>

        </div>

<?php include("footer.html"); ?>