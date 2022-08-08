<?php 



	session_start();
	session_destroy();
	
	if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"])){
		setcookie("username", '', time() - (1));
		setcookie("password", '', time() - (1));
	}

	header('location:login.php');

	
	


?>