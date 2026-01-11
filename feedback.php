<?php include("header.html"); ?>

        <div style="width:950px;height:300px;background-image:url('images/bg.png');">
        
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
	<form action="" method="post">
                    <table style="width:500px;height:300px;" cellpadding="0" border="0" cellspacing="0">
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
                                <input type="text" name="t1">
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
                                <input type="text" name="t2">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px;text-align:left;">
                                &nbsp;Email
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <input type="text" name="t3">
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
                                &nbsp;Query/ Message
                            </td>
                            <td style="width:100px;text-align:center;">
                                &nbsp;:
                            </td>
                            <td style="width:200px;text-align:left;">
                                <textarea name="tt"></textarea>
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

<?php

	include("footer.html");

	if(isset($_POST['s']))
	{

	include("config.php");

	$a = $_POST['t1'];

	$b = $_POST['t2'];

	$c = $_POST['t3'];

	$d = $_POST['t'];

	$e = $_POST['tt'];

	$q = "insert into feedback (name,mobile,email,address,msg) VALUES ('$a','$b','$c','$d','$e')";

	$r = mysqli_query($con,$q);
	
	if($r > 0)
	{
		echo "<script>alert('Your feedback successfully submited')</script>";
	}
	else
	{
		echo "<script>alert('Error: Feedback could not be submited')</script>";
	}

	}
?>