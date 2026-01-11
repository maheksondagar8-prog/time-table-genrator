<?php
 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }
	
 include("header.html"); 

?>

        <div style="width:950px;height:350px;background-image:url('../images/bg.png');">

<table style="width:950px;">
<tr>
	<td style="width:125px;">&nbsp;</td>
	<td style="width:700px;">&nbsp;</td>
	<td style="width:125px;">&nbsp;</td>
</tr>
<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div id="my" style="width:700px;">

		<center><h2> Allocate CE Subject Panel </h2></center>

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
		<td style="width:200px;text-align:left;">&nbsp;Faculty ID</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<select name="t1" class="txt">
				<option value="0">Select Faculty ID</option>
				<?php
					include("../config.php");
					$q1 = "SELECT * FROM faculty";
					$r1 = mysqli_query($con,$q1);
					while($row1 = mysqli_fetch_array($r1))
					{
						echo "<option>".$row1['fid']."</option>";
					}
				?>
			</select>
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Choose Course ID</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<select name="t2" class="txt">
				<option value="0">Select Course ID</option>
				<?php
					$q2 = "SELECT * FROM subj_ce";
					$r2 = mysqli_query($con,$q2);
					while($row2 = mysqli_fetch_array($r2))
					{
						echo "<option>".$row2['sid']."</option>";
					}
				?>
			</select>
		</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;Choose Slot</td>
		<td style="width:100px;text-align:center;">&nbsp;:</td>
		<td style="width:200px;text-align:left;">
			<select name="t3" class="txt">
				<option value="0">Choose Slot</option>
				<?php
					$i = 1;
					while($i<=49)
					{
						echo "<option>".$i."</option>";
						$i++;
					}
				?>
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

		$q11 = "SELECT * from ce WHERE cid='$b'";
		$r11 = mysqli_query($con,$q11) or die("not sucess");
		$c1= mysqli_num_rows($r11);	
		if($c1 > 0)
		{
			echo "<script>alert('Subject is already allocated')</script>";
		}
		else
		{
			$q12 = "SELECT * from ce WHERE slot='$c'";
			$r12 = mysqli_query($con,$q12) or die("not sucess");
			$c2= mysqli_num_rows($r12);	
			if($c2 > 0)
			{
				echo "<script>alert('Slot is already allocated')</script>";
			}
			else
			{
				$q13 = "SELECT * from ce WHERE fid='$a'";
				$r13 = mysqli_query($con,$q13) or die("not sucess");
				$c3= mysqli_num_rows($r13);	
				if($c3 > 4)
				{
					echo "<script>alert('Maximum 4 subjects can be allocate')</script>";
				}
				else
				{
					$q = "INSERT INTO ce (fid,cid,slot) VALUES ('$a','$b','$c')";
					$r = mysqli_query($con,$q) or die("not sucess");
					if($r > 0)
					{
						echo "<script>alert('Subject Successfully Allocated')</script>";
					}
				}
			}
		}
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

        </div>

<?php include("footer.html"); ?>