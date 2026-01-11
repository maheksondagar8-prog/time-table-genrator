<?php
	include("main.php");
	include("../config.php");

$x =0;
$y =0;
$fill = "Lib";

$arr = array(1=>"First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester");

$q = "SELECT * FROM subj_ce where sem='$sem' limit 5";
$r = mysqli_query($con,$q);
$c = mysqli_num_rows($r);
if($c == 5)
{
	while($row = mysqli_fetch_array($r))
	{
		$sid[$x] = $row['sid'];
		$sname[$x] = $row['sname'];
		$x++;
	}
}
else
{
	echo "<script>alert('Error: Your semester timetable is not currently available right now');window.location='userIndex.php';</script></font>";
}

$q1 = "SELECT * FROM subj_ce where sem='$sem' ";
$r1 = mysqli_query($con,$q1);
while($row1 = mysqli_fetch_array($r1))
{
	$lid[$y] = $row1['sid'];
	$lname[$y] = $row1['sname'];
	$y++;
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

<h1> <?php echo $arr[$sem]." TimeTable"; ?> </h1>

<div style="width:900px;height:550px;border:2px solid black;border-radius:5px 5px 5px 5px;">

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
		<th> 11:30-12:30  </th>
		<th> 12:30-01:30  </th>
		<th> 1:30-2:00  </th>
		<th> 2:00-:3:00  </th>
		<th> 3:00-4:00  </th>
		<th> 4:00-5:00  </th>
	</tr>
	<tr>
		<th> Monday </th>
		<td style="text-align:center;">  <?php echo $sname[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;" class="red"> R </td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
		<td style="text-align:center;">   <?php echo $fill; ?></td>
	</tr>
	<tr>
		<th> Tuesday </th>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;" class="red"> E </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?></td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
	</tr>
	<tr>
		<th> Wednesday </th>
		
		<td style="text-align:center;" colspan="2">  <?php echo $lname[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
		<td style="text-align:center;" class="red"> C </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
	</tr>
	<tr>
		<th> Thursday </th>
		<td style="text-align:center;" colspan="2"> <?php echo $lname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;" class="red"> E </td>
		<td style="text-align:center;">  <?php echo $sname[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
	</tr>
	<tr>
		<th> Friday </th>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;" colspan="2"> <?php echo $lname[2] ; ?> </td>
		<td style="text-align:center;"> <?php echo $fill; ?>  </td>
		
	</tr>
	<tr>
		<th> Saturday </th>
		<td style="text-align:center;">  <?php echo $sname[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[1]; ?> </td>
		<td style="text-align:center;">   <?php echo $fill; ?></td>
		<td style="text-align:center;">  <?php echo $sname[2]; ?> </td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;">  <?php echo $sname[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sname[3]; ?> </td>
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