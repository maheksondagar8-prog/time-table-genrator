<?php

$u = $_GET['id'];

include("../config.php");

$q = "delete from subj_it where sid='$u'";

$r = mysqli_query($con,$q);

if($r > 0)
{
	echo "<script>alert('Record Deleted Successfully');window.location='subj_it.php';</script>";		
}
else
{
	echo "<script>alert('Error: Record Could not be deleted');window.location='subj_it.php';</script>";
}

?>