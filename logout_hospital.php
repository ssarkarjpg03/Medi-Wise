<?php
	
	
	session_start();
	unset($_SESSION['hospitalid']);
	header("location:admin.php");


?>