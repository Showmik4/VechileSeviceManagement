<?php
	if(isset($_POST['login'])){
		
		session_start();
		include('../Model/conn.php');
	
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$query=mysqli_query($conn,"select * from `users` where username='$username' && password='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("username", $row['username'], time() + ( 60)); 
				setcookie("password", $row['password'], time() + ( 60)); 
			}
			
			$_SESSION['id']=$row['id'];
			header('location:home.php');
		}
	}
	else{
		header('location:login.php');
		$_SESSION['message']="Please Login!";
	}  
?>