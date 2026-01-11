<?php

$u = $_GET['id'];

include("../config.php");

$q = "delete from subj_ce where sid='$u'";

$r = mysqli_query($con,$q);

if($r > 0)
{
	echo "<script>alert('Record Deleted Successfully');window.location='subj_ce.php';</script>";		
}
else
{
	echo "<script>alert('Error: Record Could not be deleted');window.location='subj_ce.php';</script>";
}

?>