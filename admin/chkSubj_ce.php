<html>
<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>
		<center><h2> Add Subject Panel </h2></center>

	<form action="" method="post">

	<table style="width:700px;">

	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;text-align:center;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Subject Code</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="text" name="t1" class="txt">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Subject Name</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="text" name="t2" class="txt">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Semester</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<select name="t3" class="txt">
				<option value="0">Choose Semester</option>
				<option value="1">Sem - 1</option>
				<option value="2">Sem - 2</option>
				<option value="3">Sem - 3</option>
				<option value="4">Sem - 4</option>
				<option value="5">Sem - 5</option>
				<option value="6">Sem - 6</option>
			</select>
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;text-align:center;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s" class="btn">
                </td>
                <td style="width:100px;text-align:center;">&nbsp;</td>
                <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r" class="btn">
                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>

	</table>

	</form>

	<?php

	if(isset($_POST['s']))
	{

		$a = $_POST['t1'];
		$b = $_POST['t2'];
		$c = $_POST['t3'];

		include("../config.php");

		$q = "INSERT INTO subj_ce (sid,sname,sem) VALUES ('$a','$b','$c')";

		$r = mysqli_query($con,$q);

		if($r > 0)
		{
			echo "<script>alert('Subject Successfully Added')</script>";
		}
	}
}
else if($u == 1)
{
	echo "<center><h2> Edit Subject Panel </h2></center>";

	include("../config.php");

	$qq = "select * from subj_ce";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Subject Id</th><th> Semester </th><th> Subject Name </th><th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td> <a href='editSubj_ce.php?id=".$row['0']."'> EDIT </a> </td>";			
			echo "</tr>";
		}

	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}
}
else
{
	echo "<center><h2> Delete Subject Panel </h2></center>";

	include("../config.php");

	$qq = "select * from subj_ce";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Subject Id</th><th> Semester </th><th> Subject Name </th><th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['0']."</td>";
			echo "<td>".$row['2']."</td>";
			echo "<td>".$row['1']."</td>";
			echo "<td> <a href='del_ce.php?id=".$row['0']."'> DELETE </a> </td>";			
			echo "</tr>";
		}

	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}
}

?>

</body>
</html>