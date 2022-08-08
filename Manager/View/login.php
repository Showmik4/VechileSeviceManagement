<?php
session_start();
include('../Model/conn.php');

?>
<!DOCTYPE html>
<html>

<head>
<style>


label {
  color: black;
  padding: 8px;
}

h2 {
  color: black;
  padding: 8px;
}

input[type=text], select {
  
  width: 40%;
  padding: 12px 20px;
  margin: 8px 350px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

label{

  margin: 8px 350px; 
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 350px;
  cursor: pointer;
}


</style>

	<title>Login</title>
</head>

<body>
	<script src="js/login.js"></script>



	
<fieldset>
				<div style="text-align: center;">
					<h2>Login Form</h2>
					<form method="POST" name="loginForm" onsubmit="return validation()" action="loginprocess.php">

						<div>
							<label>Username:</label> <input id="username"  type="text" value="<?php if (isset($_COOKIE["username"])) {
																														echo $_COOKIE["username"];
																													} ?>" name="username"><br><br>
							<span id="usernameErr" style="color: red;"></span>
						</div>
						<diV >
							<label>Password:</label> <input id="password" type="text" value="<?php if (isset($_COOKIE["password"])) {
																														echo $_COOKIE["password"];
																													} ?>" name="password"><br><br>
							<span id="passwordErr" style="color: red;"></span>
						</div>
						<input  type="checkbox" name="remember" <?php if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
																	echo "checked";
																} ?>> Remember me <br><br>
						<div >
							<input class="button" type="submit"  value="Login" name="login">
						</div>


					</form>
					<h1><a class="button" href="signin.php">Signup</a></h1>

				</div>
</fieldset>	

	<script src="../JS/log.js"></script>
	<span>
		<?php
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
		?>
	</span>
</body>

</html>