<?php

$user = $_GET['id'];

$status = $_GET['abc'];

include("../config.php");

$q = "update reg SET status='$status' WHERE uname='$user'";

$r = mysqli_query($con,$q);

header("Location: verifystudent.php");

?>