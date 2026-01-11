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

<form action="" method="post">

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div style="width:700px;">

		<center><h2> Edit Subject Panel </h2>
	<?php

	include("../config.php");

	$qq = "select * from subj_it where sid='$id'";

	$rr = mysqli_query($con,$qq) or die(mysqli_error());

	$cc = mysqli_num_rows($rr);

	if($cc > 0)
	{
		while($row = mysqli_fetch_array($rr))
		{
			$a = $row['0'];
			$b = $row['2'];
			$c = $row['1'];
		}
	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}

	?>
	</center>

	<table style="width:700px;border:1px solid red;">

		<tr>
			<th>Subject ID</th>
			<th>Semester</th>
			<th>Subject Name</th>
			<th>Action</th>
		</tr>
		<tr>
			<td> <input type="text" style="width:120px;height:25px;" value="<?php echo $a; ?>" readonly> </td>
			<td> <input type="text" style="width:120px;height:25px;" value="<?php echo $b; ?>" name="t1"> </td>
			<td> <input type="text" style="width:120px;height:25px;" value="<?php echo $c; ?>" name="t2"> </td>
			<td> <input type="submit" style="width:80px;" name="s1" value="UPDATE"> <input type="submit" name="s2" style="width:80px;" value="CANCEL"></td>
		</tr>

	</table>

	<?php

	if(isset($_POST['s1']))
	{
		$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];

		$qq = "UPDATE subj_it SET sem='$t1',sname='$t2' where sid='$a'";

		$rr = mysqli_query($qq);

		if($rr > 0)
		{
				echo "<script>alert('Record Edited Successfully');window.location='subj_it.php';</script>";
		}
		else
		{
				echo "<script>alert('Error: Record Could not be edit');window.location='subj_it.php';</script>";
		}
	}
	
	if(isset($_POST['s2']))
	{
		header("Location: subj_it.php");
	}
	?>

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

</form>
                            
        </div>

<?php include("footer.html"); ?>