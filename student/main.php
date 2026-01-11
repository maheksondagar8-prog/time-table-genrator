<?php
 session_start();
 $u = $_SESSION['userSession'];
 $sem = $_SESSION['sem'];
 $course = $_SESSION['course'];
 $division = $_SESSION['division'];
 
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

?>