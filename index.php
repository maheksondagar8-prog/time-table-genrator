<?php include("header.html"); ?>
<?php 
ob_start();
?>

        <div style="width:950px;height:510px;background-image:url('images/bg.png');">
        
                    <div style="width:300px;height:400px;float:left;text-align:left;">
                    
			<form action="" method="post">

                    <fieldset style="width:280px;height:380px;">
                        <legend style="font-size:30px;"> Login </legend>
                        <table style="width:280px;height:300px;">
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    Choose Your Login Type :
                                
                                </td>
                            </tr>                        
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    <select style="width:270px;" name="ch">
                                            <option value="0">Login Type</option>
                                            <option value="2">Student</option>
                                            <option value="3">Faculty</option>
                                            <option value="1">Admin</option>
                                    </select>
                                
                                </td>
                            </tr>    
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    UserName :
                                
                                </td>
                            </tr>
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    <input style="width:270px;" type="text" name="t1" />
                                
                                </td>
                            </tr>                                                    
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    Password :
                                
                                </td>
                            </tr>
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                    <input style="width:270px;" type="password" name="t2" />
                                
                                </td>
                            </tr>
                            <tr>
                                <td style="width:280px;text-align:left;">
                                
                                <table style="width:280px;height:80px;">
                                
                                    <tr>
                                    
                                        <td style="width:5px;">&nbsp;</td>
                                    
                                        <td style="width:120px;text-align:left;">
                                            <input type="submit" style="width:120px;" name="s"/>
                                        </td>

                                        <td style="width:5px;">&nbsp;</td>

                                        <td style="width:120px;text-align:left;">
                                            <input type="reset" style="width:120px;" name="r"/>
                                        </td>
                                    
                                        <td style="width:5px;">&nbsp;</td>
                                    </tr>
                                                                   
                                </table>
                                
                                </td>
                            </tr>
                            <tr>
                                <td style="width:280px;text-align:left;">
                                <span style="color:Red;">If not register yet ? </span><a href="reg.php"> Click here </a>                                                                
                                </td>
                            </tr>   
                        </table>
                    
			</form>
			<?php
             session_start();
            include("config.php");

			if(isset($_POST['s']))
			{
				session_start();
				$u = $_POST['t1'];
				$p = $_POST['t2'];
				$c = $_POST['ch'];
			
				include("config.php");
				if($c == 0)
				{
					echo "<script>alert('Error: Plz select Your login type');</script></font>";
				}
				else if($c == 1)
				{
					$q = "select * from admin WHERE uname='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						$_SESSION['adminSession'] = $u;
						header("Location: admin/adminIndex.php");
                        ob_enf_fluch();
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}
				}
				else if($c == 2)
				{
					$q = "select * from reg WHERE uname='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						if($row = mysqli_fetch_array($r))
						{
							$s = $row['sem'];
							$course = $row['course'];
							$status = $row['status'];
							$division = $row['division'];
							
						}
						if($status == "Allowed")
						{
							$_SESSION['userSession'] = $u;
							$_SESSION['sem'] = $s;
							$_SESSION['course'] = $course;
							$_SESSION['division'] = $division;
							
							header("Location: student/userIndex.php");
						}
						else
						{
		echo "<script>alert('Error: You are not allowed by admin');</script></font>";
						}
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}
				}
				else
				{
					$q = "select * from faculty WHERE fid='$u' and pass='$p'";
					$r = mysqli_query($con,$q);
					$c = mysqli_num_rows($r);
					if($c > 0)
					{
						$_SESSION['facSession'] = $u;
						header("Location: faculty/userIndex.php");
					}
					else
					{
						echo "<script>alert('Error: Username OR Password not matched');</script></font>";
					}
				}
			}
			
			?>

                    </fieldset>
                    
                    </div>
        
                    <div style="width:650px;height:510px;float:left;">
                    
                        <table height="100%" width="100%" style="color:#000000;">
                            <tr>
                                <td height="100%" width="5%"></td>
                                <td height="100%" width="90%">
                                    <table height="100%" width="100%" style="color:#000000;text-align:justify;">
                                        <tr>
                                            <td height="100S%" width="90%">
                                                <h1>Welcome </h1>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time-Table Management System, our software allows users to generate time table for newly occurringchanges in less time, with less effort and with more efficiency. It will allow usersto work on and view time tables in different platforms and view different information simultaneously. Our aim here is to develop a simple, easily understandable, efficient and portableapplication, which could automatically generate good quality time tables within seconds.
 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="100%" width="90%">
                                                <table>
                                                    <tr>
                                                        <td height="100%" width="30%"><img src="images/Picture9.jpg" width="206" height="100" /></td>
                                                        <td height="100%" width="60%" style="text-align:justify;">

                                                           This helps us ensure that the drugs we sourse are not just inexpensive, but also comfirm to world-class standard of manufacturing and quality control.We do belive that helping our customers is as good as helping you as it gives us satisfaction.																		</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h3>What You Should Do to TTG</h3>

                                                The Objective of this project is to provide online time table generator and to make it convenient for people who have other commitments.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="images/arrow.jpg" />	Register on free of cost<br />
                                                <img src="images/arrow.jpg" />	then, simply login and enjoy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td height="100%" width="5%"></td>
                            </tr>

                        </table>
                    
                    </div>
                            
        </div>

<?php include("footer.html"); ?>