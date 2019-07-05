<?php
	session_start();
	$re= session_destroy();
	if($re){
		header('location:signin.php');
	}
?>