<?php
 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

 $id = $_GET['id'];

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

		<center><h2> View News Panel </h2>
	<?php

	include("../config.php");

	$q = "select * from newstable where newsid='$id'";

	$r = mysqli_query($con,$q);

	$c = mysqli_num_rows($r);

	if($c>0)
	{
		echo "<table border='1'>";
		
		while($row = mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td> <b> Topic : ".$row['news']."</b></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td style='text-align:justify;'>".$row['description']."</td>";
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