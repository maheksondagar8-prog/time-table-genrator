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
	xmlhttp.open("GET","chkFaculty.php?id="+str,true);
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
                                <td style="height:20px;width:150px;"><a class="link" href="subj_ce.php"> SUBJECTS </a></td>
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
	
	<legend> Faculty Panel </legend>

	<form action="" method="post">

	<input style="width:20px;" type="radio" name="r" value="0" onchange="a(this.value)"> Add Faculty <br>
	<input style="width:20px;" type="radio" name="r" value="1" onchange="a(this.value)"> Delete Faculty <br>
	<input style="width:20px;" type="radio" name="r" value="1" onchange="a(this.value)"> Edit Faculty <br>
	</form>

	</fieldset>

	</td>
	<td style="width:125px;">&nbsp;</td>

</tr>
<tr>

	<td style="width:125px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div id="my" style="width:700px;">

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