<?php

 session_start();
 $u = $_SESSION['adminSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

?>
<HTML>

<head>

        <link rel="stylesheet" href="../style.css">

<script>

function a(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();	
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function ()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("my").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","chkSubj_it.php?id="+str,true);
	xmlhttp.send();
}
</script>

</head>

<body style="margin:0 auto;">
    <center>
    <div style="width:950px;border:1px solid gray;">

        <div style="width: 950px;">
            <img src="../images/banner.jpg" width ="950" height="300">
        </div>
        <div style="width: 950px;">
            <table style="width: 950px;height:25px; background-color: #9D4D77;" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 25px;">&nbsp;</td>
                    <td style="width: 900px;">
                        <table style="width: 900px; height:20px" cellspacing="0">
                            <tr>

                                <td style="height:20px;width:80px;"><a class="link" href="adminIndex.php"> HOME </a></td>
                                <td style="height:20px;width:10px;">
                                    <span id="Label1" style="color:White;">|</span></td>
                                <td style="height:20px;width:150px;"><a class="link" href="subj_it.php"> SUBJECTS </a></td>
                                <td style="height:20px;width:10px;">
                                    <span id="Label2" style="color:White;">|</span></td>

                                <td style="height:20px;width:175px;"><a class="link" href="faculty.php"> FACULTY </a></td>
				<td style="height:20px;width:10px;">
                                    <span id="Label5" style="color:White;">|</span></td>

                                <td style="height:20px;width:95px;"><a class="link" href="verifystudent.php"> VERIFY </a></td>
                                <td style="height:20px;width:10px;">
                                    <span id="Label5" style="color:White;">|</span></td>

                                <td style="height:20px;width:170px;"><a class="link" href="viewFeedback.php"> VIEW FEEDBACK </a></td>
				<td style="height:20px;width:10px;">
                                    <span id="Label5" style="color:White;">|</span></td>

                                <td style="height:20px;width:170px;"><a class="link" href="news.php"> NEWS PANEL </a></td>
                                <td style="height:20px;width:10px;">
                                    <span id="Label4" style="color:White;">|</span></td>
                                <td style="height:20px;width:90px;">
                                    <a class="link" href="logout.php"> LOGOUT </a></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 25px;">&nbsp;</td>
                </tr>
            </table>
        </div>


<div style="width:950px;background-image:url('../images/bg.png');">

<table style="width:950px;">

<tr>

	<td style="width:125px;">&nbsp;</td>
	<td style="width:700px;">
	
	<fieldset style="width:700px;">
	
	<legend> IT Subjects Panel </legend>

	<form action="" method="post">

	<input style="width:20px;" type="radio" name="r" value="0" onchange="a(this.value)"> Add Subject <br>
	<input style="width:20px;" type="radio" name="r" value="1" onchange="a(this.value)"> Edit Subject <br>
	<input style="width:20px;" type="radio" name="r" value="2" onchange="a(this.value)"> Delete Subject <br>
	</form>

	</fieldset>

	</td>
	<td style="width:125px;">&nbsp;</td>

</tr>
<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div id="my" style="width:700px;">

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
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;text-align:center;">&nbsp;</td>
		<td style="width:200px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
		<td style="width:500px;text-align:center;" colspan="3">
			<a href="subj_ce.php"> Click here for CE Subjects </a>
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

	$q = "INSERT INTO subj_it (sid,sname,sem) VALUES ('$a','$b','$c')";

	$r = mysqli_query($con,$q) or die("count not insert data");

	if($r > 0)
	{
		echo "<script>alert('Subject Successfully Added')</script>";
	}

	}

	?>

	</div>

	</td>
	<td style="width:125px;">&nbsp;</td>

</tr>

</table>


</div>

<?php include("footer.html") ?>

</body>

</html>