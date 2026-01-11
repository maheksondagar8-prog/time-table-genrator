<?php
 session_start();
 $u = $_SESSION['facSession'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }
?>