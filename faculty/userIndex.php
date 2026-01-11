<?php
	include("main.php"); 	
	include("header.html");
?>

        <div style="width:950px;height:510px;background-image:url('../images/bg.png');">
        
                    <div style="width:300px;height:400px;float:left;text-align:left;">
                    
                    <center>
		   	    <table style="width:240px;height:300px;margin-top:10px;" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="height: 30px; background-image: url('../images/news1.png' ); background-repeat: no-repeat; background-attachment: scroll"></td>
        </tr>
        <tr>
            <td style="height: 250px; background-color:White;border-left:1px solid #D3D3D3;border-right:1px solid #D3D3D3;">
            
            <marquee scrollamount="4" direction="up" style="color:black;" onmouseover="this.stop();" onmouseout="this.start();">
	    
		                <?php	
				include("../config.php");
			
				$q = "select * from newsTable";
			
				$r = mysqli_query($con,$q);
			
				$c = mysqli_num_rows($r);
			
				if($c>0)
				{
					while($row = mysqli_fetch_array($r))
					{
						echo "<a target='_blank' href='view.php?id=".$row['newsid']."' style='text-align:justify;'> * ".$row['news']."<br><br></label>";			
					}
				}
				else
				{
					echo "No Data to Display";
				}
			
				?>

            </marquee>

            </td>
        </tr>
        <tr>
            <td style="height: 20px; background-image: url('../images/news4.png'); background-repeat: no-repeat; background-attachment: scroll"></td>
        </tr>
    </table>
	</center>
                    
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
                                                        <td height="100%" width="30%"><img src="../images/Picture9.jpg" width="206" height="100" /></td>
                                                        <td height="100%" width="60%" style="text-align:justify;">

                                                           This helps us ensure that the drugs we sourse are not just inexpensive, but also comfirm to world-class standard of manufacturing and quality control.We do belive that helping our customers is as good as helping you as it gives us satisfaction.																		</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h3>Subjects Panel</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../images/arrow.jpg"> <a style="color:blue;" href="CETable.php"> View CE Time Table </a> <br />
                                                <img src="../images/arrow.jpg"> <a style="color:blue;" href="ITTable.php"> View IT Time Table </a> <br />
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