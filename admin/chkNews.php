<html>

<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>

	<center><h2> Add News Panel </h2>

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
		<td style="width:200px;text-align:left;">&nbsp;News</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="text" name="t1">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                <td style="width:200px;text-align:left;">&nbsp;News Description</td>
                <td style="width:100px;text-align:center;">&nbsp;:</td>
                <td style="width:200px;text-align:left;">
                	<textarea name="tt"></textarea>
                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s">
                </td>
                <td style="width:100px;text-align:center;">&nbsp;</td>
                <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r">
                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>

	</table>

	</form>

	<?php

	if(isset($_POST['s']))
	{

	$a = $_POST['t1'];
	$b = $_POST['tt'];

	include("../config.php");

	$q = "INSERT INTO newstable (news,description) VALUES ('$a','$b')";

	$r = mysqli_query($con,$q);

	if($r > 0)
	{
		echo "<script>alert('News Successfully Added')</script>";
	}

	}

	echo "</center>";

}
else if($u == 1)
{
	
	echo "<center><h2> Edit News Panel </h2></center>";

	include("../config.php");

	$qq = "select * from newstable";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>News Id</th><th> News </th><th> Description </th><th> Action </th><th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td> <a href='editnews.php?id=".$row['0']."'> EDIT </a> </td>";
			echo "<td> <a href='delNews.php?id=".$row['0']."'> DELETE </a> </td>";			
			echo "</tr>";
		}

	}
}

else
{
	echo "<center><h2> Delete News Panel </h2></center>";

	include("../config.php");

	$qq = "select * from newstable";

	$rr = mysqli_query($con,$qq) or die("Could data not inserted");

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>News Id</th><th> News </th><th>Description</th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['newsid']."</td>";
			echo "<td>".$row['news']."</td>";
			echo "<td> <a href='delNews.php?id=".$row['newsid']."'> DELETE </a> </td>";			
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