<?php
 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

 include("header.html"); ?>

        <div style="width:950px;background-image:url('../images/bg.png');">
        
	<table>

	<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;">&nbsp;</td>	

	<td style="width:125px;">&nbsp;</td>

	</tr>

	<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div id="my" style="width:700px;">

		<center><h2> Feedback Panel </h2>
	<?php

	include("../config.php");

	$q = "select * from feedback";

	$r = mysqli_query($con,$q);

	$c = mysqli_num_rows($r);

	if($c>0)
	{
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th> Name </th><th> Mobile </th><th> Email </th><th> Address </th><th> Message </th><th> Action </th>";	
		echo "</tr>";
		while($row = mysqli_fetch_array($r))
		{

			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['msg']."</td>";
			echo "<td> <a href='delFeedback.php?id=".$row['email']."'> DELETE </a> </td>";
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

	<br>

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