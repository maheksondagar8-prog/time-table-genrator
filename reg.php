<?php include("header.html"); ?>

        <div style="width:950px;height:400px;background-image:url('images/bg.png');">
        
        <table style="width:950px;" cellpadding="0" border="0" cellspacing="0">
            <tr>
                <td style="width:225px;">
                </td>
                <td style="width:500px;">
                </td>
                <td style="width:225px;">
                </td>
            </tr>
            <tr>
                <td style="width:225px;">
                </td>
                <td style="width:500px;">
		    <form action="" method="post" enctype="multipart/form-data">
			
                    <table style="width:500px;height:400px;" cellpadding="0" border="0" cellspacing="0">
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;
                            </td>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;UserName
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="text" name="t1">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Password
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="password" name="t2">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Confirm Password
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="password" name="t3">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Course
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <select style="width:200px;" name="course">
				<option value="">Choose Course</option>
				<option>CE</option>
				<option>IT</option>
		</select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Semester
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <select style="width:200px;" name="sem">
				<option value="0">Choose Semester</option>
				<option value="1">Sem - 1</option>
				<option value="2">Sem - 2</option>
				<option value="3">Sem - 3</option>
				<option value="4">Sem - 4</option>
				<option value="5">Sem - 5</option>
				<option value="6">Sem - 6</option>
		</select>
                            </td>
                        </tr>
						
						<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Division
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <select style="width:200px;" name="division">
				<option value="">Choose Division</option>
				<option>A</option>
				<option>B</option>
		</select>
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;
                            </td>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Name
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="text" name="t4">
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Gender
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input style="width:20px;" type="radio" name="r" value="Male"> Male
				      <input style="width:20px;" type="radio" name="r" value="Female"> Female
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Mobile
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="text" name="t5">
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Address
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <textarea name="t"></textarea>
                            </td>
                        </tr>
						
						<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Upload File
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="file" name="user_file">
                            </td>
                        </tr>
						
			<tr>
                            <td colspan="3">
                                <input style="width:20px;" type="checkbox" name="c"> I accept all terms and condition regarding the use of this website.
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s">
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;
                            </td>
                            <td style="width:200px;text-align:left;">
                                &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r">
                            </td>
                        </tr>
			<tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;
                            </td>
                            <td style="width:200px;text-align:left;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
		    </form>
                </td>
                <td style="width:225px;">
                </td>
            </tr>
            <tr>
                <td style="width:225px;">
                </td>
                <td style="width:500px;">
                </td>
                <td style="width:225px;">
                </td>
            </tr>
			
        </table>
                            
        </div>

<?php include("footer.html");

if(isset($_POST['s']))
{

	if(isset($_POST['c']))
	{

		$u = $_POST['t1'];

		$p = $_POST['t2'];

		$cp = $_POST['t3'];

		$course= $_POST['course'];
		
		$division= $_POST['division'];

		$t = $_POST['sem'];

		$n = $_POST['t4'];

		$g = $_POST['r'];

		$m = $_POST['t5'];

		$a = $_POST['t'];

		$s = "Disallowed";
		
		
		$target_dir="uploadss/";
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
	

		include("config.php");

		$q = "select * from reg WHERE uname='$u'";
		
		$r = mysqli_query($con,$q);

		$c = mysqli_num_rows($r);

		if($c > 0)
		{
			echo "<script>alert('Error: Username already taken, Plz try with new Username');</script>";
		}
		else
		{
			$q = "INSERT INTO reg (uname,pass,cpass,sem,name,gender,mobile,address,status,course,division,photo) VALUES ('$u','$p','$cp','$t','$n','$g','$m','$a','$s','$course','$division','$path')";

			$r = mysqli_query($con,$q);

			if($r > 0)
			{
				echo "<script>alert('Your registration was successful');window.location='index.php';</script>";
			}
			else
			{
				echo "<script>alert('Error: Registration was not successful');</script>";
			}		
		}
	}
	else
	{
		echo "<script>alert('Plz check a checkbox')</script>";
	}
}

?>