<?php
	include("main.php");
	include("../config.php");

$x =0;
$y =0;
$fill = "Lib";

$arr = array(1=>"First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester");

$q = "SELECT * FROM subj_it where sem='$sem' limit 5";
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

$q1 = "SELECT * FROM subj_it where sem='$sem' limit 6";
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
		<th> 1 </th>
		<th> 2 </th>
		<th> 3 </th>
		<th> 4 </th>
		<th> &nbsp; </th>
		<th> 5 </th>
		<th> 6 </th>
		<th> 7 </th>
	</tr>
	<tr>
		<th> Monday </th>
		<td style="text-align:center;">  <?php echo $sid[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;" class="red"> R </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
	</tr>
	<tr>
		<th> Tuesday </th>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;" class="red"> E </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
	</tr>
	<tr>
		<th> Wednesday </th>
		<td style="text-align:center;" colspan="2"> <?php echo $lname[0] ; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
		<td style="text-align:center;" class="red"> C </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
	</tr>
	<tr>
		<th> Thursday </th>
		<td style="text-align:center;" colspan="2"> <?php echo $lname[1] ; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;" class="red"> E </td>
		<td style="text-align:center;">  <?php echo $sid[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
	</tr>
	<tr>
		<th> Friday </th>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;" colspan="3"> <?php echo $lname[2] ; ?> </td>
	</tr>
	<tr>
		<th> Saturday </th>
		<td style="text-align:center;">  <?php echo $sid[0]; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[1]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[2]; ?> </td>
		<td style="text-align:center;" class="red"> S </td>
		<td style="text-align:center;">  <?php echo $sid[4]; ?> </td>
		<td style="text-align:center;">  <?php echo $fill; ?> </td>
		<td style="text-align:center;">  <?php echo $sid[3]; ?> </td>
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

</div>
</center>

</form>
</body>
</html>