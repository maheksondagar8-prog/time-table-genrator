<?php
	include("main.php");
	include("../config.php");

$x =0;
$fill = "&nbsp;";

$q = "SELECT * FROM it where fid='$u'";
$r = mysqli_query($con,$q);
$c = mysqli_num_rows($r);
if($c==4)
{
	while($row = mysqli_fetch_array($r))
	{
		$cid[$x] = $row['cid'];
		$slot[$x] = $row['slot'];
		$x++;
	}
}
else
{
	echo "<script>alert('Error: IT Subjects are not Allocated to you');window.location='userIndex.php';</script></font>";
}

?>
<html>
<head>
	<style>
.red
{
	color:red;
	font-weight:bold;
}
.green
{
	background-color:green;
	color:white;
}
	</style>
</head>
<body>
<form>

<center>

<h1> TimeTable For IT Classes </h1>

<div style="width:900px;height:500px;border:2px solid black;border-radius:5px 5px 5px 5px;">

<table style="width:900px;">
<tr>
	<th style="width:25px;">&nbsp;</th>
	<th style="width:850px;">&nbsp;</th>
	<th style="width:25px;">&nbsp;</th>
</tr>
<tr>
	<th style="width:25px;">&nbsp;</th>
	<th style="width:850px;">
	<table border="1" style="width:850px;height:450px;" cellspacing="0" bordercolor="gray">
	<tr class="green">
		<th> Day </th>
		<th> 9:30-10:30 </th>
		<th> 10:30-11:30 </th>
		<th> 11:30-12:30 </th>
		<th> 12:30-1:30 </th>
		<th> 1:30-2:00 </th>
		<th> 2:00-2:00 </th>
		<th> 3:00-4:00 </th>
		<th> 4:00-5:00</th>
	</tr>
	<tr>
		<th> Monday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 1)
				{
					echo $cid[0];
				}
				else if($slot[1] == 1)
				{
					echo $cid[1];
				}
				else if($slot[2] == 1)
				{
					echo $cid[2];
				}
				else if($slot[3] == 1)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 2)
				{
					echo $cid[0];
				}
				else if($slot[1] == 2)
				{
					echo $cid[1];
				}
				else if($slot[2] == 2)
				{
					echo $cid[2];
				}
				else if($slot[3] == 2)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 3)
				{
					echo $cid[0];
				}
				else if($slot[1] == 2)
				{
					echo $cid[1];
				}
				else if($slot[2] == 3)
				{
					echo $cid[2];
				}
				else if($slot[3] == 3)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 4)
				{
					echo $cid[0];
				}
				else if($slot[1] == 4)
				{
					echo $cid[1];
				}
				else if($slot[2] == 4)
				{
					echo $cid[2];
				}
				else if($slot[3] == 4)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> R </td>
		<td style="text-align:center;">  
			<?php
				if($slot[0] == 5)
				{
					echo $cid[0];
				}
				else if($slot[1] == 5)
				{
					echo $cid[1];
				}
				else if($slot[2] == 5)
				{
					echo $cid[2];
				}
				else if($slot[3] == 5)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 6)
				{
					echo $cid[0];
				}
				else if($slot[1] == 6)
				{
					echo $cid[1];
				}
				else if($slot[2] == 6)
				{
					echo $cid[2];
				}
				else if($slot[3] == 6)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 7)
				{
					echo $cid[0];
				}
				else if($slot[1] == 7)
				{
					echo $cid[1];
				}
				else if($slot[2] == 7)
				{
					echo $cid[2];
				}
				else if($slot[3] == 7)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
	</tr>
	<tr>
		<th> Tuesday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 8)
				{
					echo $cid[0];
				}
				else if($slot[1] == 8)
				{
					echo $cid[1];
				}
				else if($slot[2] == 8)
				{
					echo $cid[2];
				}
				else if($slot[3] == 8)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
				<td style="text-align:center;">
			<?php
				if($slot[0] == 9)
				{
					echo $cid[0];
				}
				else if($slot[1] == 9)
				{
					echo $cid[1];
				}
				else if($slot[2] == 9)
				{
					echo $cid[2];
				}
				else if($slot[3] == 9)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 10)
				{
					echo $cid[0];
				}
				else if($slot[1] == 10)
				{
					echo $cid[1];
				}
				else if($slot[2] == 10)
				{
					echo $cid[2];
				}
				else if($slot[3] == 10)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
				<td style="text-align:center;">
			<?php
				if($slot[0] == 11)
				{
					echo $cid[0];
				}
				else if($slot[1] == 11)
				{
					echo $cid[1];
				}
				else if($slot[2] == 11)
				{
					echo $cid[2];
				}
				else if($slot[3] == 11)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> E </td>
				<td style="text-align:center;">
			<?php
				if($slot[0] == 12)
				{
					echo $cid[0];
				}
				else if($slot[1] == 12)
				{
					echo $cid[1];
				}
				else if($slot[2] == 12)
				{
					echo $cid[2];
				}
				else if($slot[3] == 12)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 13)
				{
					echo $cid[0];
				}
				else if($slot[1] == 13)
				{
					echo $cid[1];
				}
				else if($slot[2] == 13)
				{
					echo $cid[2];
				}
				else if($slot[3] == 13)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 14)
				{
					echo $cid[0];
				}
				else if($slot[1] == 14)
				{
					echo $cid[1];
				}
				else if($slot[2] == 14)
				{
					echo $cid[2];
				}
				else if($slot[3] == 14)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
	</tr>
	<tr>
		<th> Wednesday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 15)
				{
					echo $cid[0];
				}
				else if($slot[1] == 15)
				{
					echo $cid[1];
				}
				else if($slot[2] == 15)
				{
					echo $cid[2];
				}
				else if($slot[3] == 15)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 16)
				{
					echo $cid[0];
				}
				else if($slot[1] == 16)
				{
					echo $cid[1];
				}
				else if($slot[2] == 16)
				{
					echo $cid[2];
				}
				else if($slot[3] == 16)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 17)
				{
					echo $cid[0];
				}
				else if($slot[1] == 17)
				{
					echo $cid[1];
				}
				else if($slot[2] == 17)
				{
					echo $cid[2];
				}
				else if($slot[3] == 17)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 18)
				{
					echo $cid[0];
				}
				else if($slot[1] == 18)
				{
					echo $cid[1];
				}
				else if($slot[2] == 18)
				{
					echo $cid[2];
				}
				else if($slot[3] == 18)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> C </td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 19)
				{
					echo $cid[0];
				}
				else if($slot[1] == 19)
				{
					echo $cid[1];
				}
				else if($slot[2] == 19)
				{
					echo $cid[2];
				}
				else if($slot[3] == 19)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 20)
				{
					echo $cid[0];
				}
				else if($slot[1] == 20)
				{
					echo $cid[1];
				}
				else if($slot[2] == 20)
				{
					echo $cid[2];
				}
				else if($slot[3] == 20)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		
		<td style="text-align:center;">
			<?php
				if($slot[0] == 20)
				{
					echo $cid[0];
				}
				else if($slot[1] == 20)
				{
					echo $cid[1];
				}
				else if($slot[2] == 20)
				{
					echo $cid[2];
				}
				else if($slot[3] == 20)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>

	</tr>
	<tr>
		<th> Thursday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 21)
				{
					echo $cid[0];
				}
				else if($slot[1] == 21)
				{
					echo $cid[1];
				}
				else if($slot[2] == 21)
				{
					echo $cid[2];
				}
				else if($slot[3] == 21)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 22)
				{
					echo $cid[0];
				}
				else if($slot[1] == 22)
				{
					echo $cid[1];
				}
				else if($slot[2] == 22)
				{
					echo $cid[2];
				}
				else if($slot[3] == 22)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 23)
				{
					echo $cid[0];
				}
				else if($slot[1] == 23)
				{
					echo $cid[1];
				}
				else if($slot[2] == 23)
				{
					echo $cid[2];
				}
				else if($slot[3] == 23)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 24)
				{
					echo $cid[0];
				}
				else if($slot[1] == 24)
				{
					echo $cid[1];
				}
				else if($slot[2] == 24)
				{
					echo $cid[2];
				}
				else if($slot[3] == 24)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> E </td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 25)
				{
					echo $cid[0];
				}
				else if($slot[1] == 25)
				{
					echo $cid[1];
				}
				else if($slot[2] == 25)
				{
					echo $cid[2];
				}
				else if($slot[3] == 25)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 26)
				{
					echo $cid[0];
				}
				else if($slot[1] == 26)
				{
					echo $cid[1];
				}
				else if($slot[2] == 26)
				{
					echo $cid[2];
				}
				else if($slot[3] == 26)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 27)
				{
					echo $cid[0];
				}
				else if($slot[1] == 27)
				{
					echo $cid[1];
				}
				else if($slot[2] == 27)
				{
					echo $cid[2];
				}
				else if($slot[3] == 27)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
	</tr>
	<tr>
		<th> Friday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 28)
				{
					echo $cid[0];
				}
				else if($slot[1] == 28)
				{
					echo $cid[1];
				}
				else if($slot[2] == 28)
				{
					echo $cid[2];
				}
				else if($slot[3] == 28)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 29)
				{
					echo $cid[0];
				}
				else if($slot[1] == 29)
				{
					echo $cid[1];
				}
				else if($slot[2] == 29)
				{
					echo $cid[2];
				}
				else if($slot[3] == 29)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 30)
				{
					echo $cid[0];
				}
				else if($slot[1] == 30)
				{
					echo $cid[1];
				}
				else if($slot[2] == 30)
				{
					echo $cid[2];
				}
				else if($slot[3] == 30)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 31)
				{
					echo $cid[0];
				}
				else if($slot[1] == 31)
				{
					echo $cid[1];
				}
				else if($slot[2] == 31)
				{
					echo $cid[2];
				}
				else if($slot[3] == 31)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 32)
				{
					echo $cid[0];
				}
				else if($slot[1] == 32)
				{
					echo $cid[1];
				}
				else if($slot[2] == 32)
				{
					echo $cid[2];
				}
				else if($slot[3] == 32)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 33)
				{
					echo $cid[0];
				}
				else if($slot[1] == 33)
				{
					echo $cid[1];
				}
				else if($slot[2] == 33)
				{
					echo $cid[2];
				}
				else if($slot[3] == 33)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 34)
				{
					echo $cid[0];
				}
				else if($slot[1] == 34)
				{
					echo $cid[1];
				}
				else if($slot[2] == 34)
				{
					echo $cid[2];
				}
				else if($slot[3] == 34)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
	</tr>
	<tr>
		<th> Saturday </th>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 35)
				{
					echo $cid[0];
				}
				else if($slot[1] == 35)
				{
					echo $cid[1];
				}
				else if($slot[2] == 35)
				{
					echo $cid[2];
				}
				else if($slot[3] == 35)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 36)
				{
					echo $cid[0];
				}
				else if($slot[1] == 36)
				{
					echo $cid[1];
				}
				else if($slot[2] == 36)
				{
					echo $cid[2];
				}
				else if($slot[3] == 36)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 37)
				{
					echo $cid[0];
				}
				else if($slot[1] == 37)
				{
					echo $cid[1];
				}
				else if($slot[2] == 37)
				{
					echo $cid[2];
				}
				else if($slot[3] == 37)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 38)
				{
					echo $cid[0];
				}
				else if($slot[1] == 38)
				{
					echo $cid[1];
				}
				else if($slot[2] == 38)
				{
					echo $cid[2];
				}
				else if($slot[3] == 38)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 39)
				{
					echo $cid[0];
				}
				else if($slot[1] == 39)
				{
					echo $cid[1];
				}
				else if($slot[2] == 39)
				{
					echo $cid[2];
				}
				else if($slot[3] == 39)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 40)
				{
					echo $cid[0];
				}
				else if($slot[1] == 40)
				{
					echo $cid[1];
				}
				else if($slot[2] == 40)
				{
					echo $cid[2];
				}
				else if($slot[3] == 40)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
		<td style="text-align:center;">
			<?php
				if($slot[0] == 41)
				{
					echo $cid[0];
				}
				else if($slot[1] == 41)
				{
					echo $cid[1];
				}
				else if($slot[2] == 41)
				{
					echo $cid[2];
				}
				else if($slot[3] == 41)
				{
					echo $cid[3];
				}
				else
				{
					echo $fill;
				}
			?>
		</td>
	</tr>
	</table>
	</th>
	<th style="width:25px;">&nbsp;</th>
</tr>
<tr>
	<th style="width:25px;">&nbsp;</th>
	<th style="width:850px;">&nbsp;</th>
	<th style="width:25px;">&nbsp;</th>
</tr>
</table>

	<p align="right">
	<input type="submit" formAction="userIndex.php" value="Home page" />
	</p>

</div>
</center>

</form>
</body>
</html>