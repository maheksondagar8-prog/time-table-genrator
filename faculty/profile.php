<?php
	include("main.php"); 	
	include("header.html"); 
?>

        <div style="margin-top:60px;margin-bottom:60px;background-image:url('../images/bg.png');">
		
		

	<table>
	<tr>
		<td></td>
		<td>

                    <?php
	           include("../config.php");
                            $q="select * from faculty where fid='$u'";
	                    $r = mysqli_query($con,$q);
	                    $c = mysqli_num_rows($r);
                             if ($c>0) {
                             if($row = mysqli_fetch_array($r))
                             {

								$pic =$row['photo'];
                             echo "<table style='background-color: rgb(176,131,131)' width='100%'>";
                             echo "<tr>";
                            echo "<td colspan='2' align='center'>";
                                echo "<h2>Profile</h2>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "Faculty ID :".$row['fid'];
                            echo "</td>";
                            echo "<td rowspan='3' align='right' valign='top'>";
                                 echo "<img src='../".$pic."' hspace='0px' vspace='0px' width='129' height='130' style='margin-left: 10px;
										margin-bottom: 5px;float: left; border:thin;background-color:#FF0000'/>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "Password :".$row['pass'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                               echo "Name :".$row['name'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br>";
                               echo "Email :".$row['email'];
                              echo "<tr>";
                            echo "<td><br>";
                                echo "Mobile :".$row['contact'];
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br><br>";
                              echo "";
                               echo "</td></tr>";
                            echo "<tr><td>  <br><br>  ";
                            echo "</td>";
                        echo "</tr>";
                                              
                    echo "</table>";
                                                             
                    
                echo "</td>";
           echo "</tr>";
        echo "</table>";}}
        ?>
		</td>
		<td></td>
	</tr>
	</table>

        </div>

<?php include("footer.html"); ?>