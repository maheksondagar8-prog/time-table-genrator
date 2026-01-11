<html>
<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>
		<center><h2> Add Faculty Panel </h2></center>

	<form action="" method="post" enctype="multipart/form-data">

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
		<td style="width:200px;text-align:left;">&nbsp;Faculty Name</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="text" name="t1" class="txt">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Email</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="email" name="t3" class="txt">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Contact</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="text" name="t4" class="txt" maxlength="10">
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Upload File</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<input type="file" name="user_file">
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
		$c = $_POST['t3'];
		$d = $_POST['t4'];
		
		$target_dir="upload_fp/";
		$target_file=$target_dir.basename($_FILES["user_file"]["name"]);
		$uploadok=1;
		
		 if(move_uploaded_file($_FILES["user_file"]["tmp_name"],$target_file))
		{
			echo "The file ".basename($_FILES["user_file"]["name"])."has been uploaded..";
		}
		else
		{
			echo "Sorry, there was an error uploading your file.";
		}
		$path=$target_dir.basename($_FILES["user_file"]["name"],".jpg");

		include("../config.php");

		$q = "INSERT INTO faculty (name,email,contact,photo) VALUES ('$a','$c','$d','$path')";
		$r = mysqli_query($con,$q);

		if($r > 0)
		{
			echo "<script>alert('Faculty Successfully Added')</script>";
		}
	}
}
else if($u == 1)
{
	echo "<center><h2> Edit Faculty Panel </h2></center>";

	include("../config.php");

	$qq = "select * from faculty";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Faculty Id</th><th> faculty name </th><th> Password </th> <th> Action </th> <th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td> <a href='editfaculty.php?id=".$row['0']."'> EDIT </a> </td>";
            echo "<td> <a href='delfaculty.php?id=".$row['0']."'> DELETE </a> </td>";			
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
	echo "<center><h2> Delete Faculty Panel </h2></center>";

	include("../config.php");

	$qq = "select * from faculty";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Faculty Id</th><th> Password </th><th> Name </th><th> Action </th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['0']."</td>";
			echo "<td>".$row['1']."</td>";
			echo "<td>".$row['2']."</td>";
			echo "<td> <a href='delfaculty.php?id=".$row['0']."'> DELETE </a> </td>";			
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