<?php

include '../Controller/UserController.php';

?>

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

h4 {
  color: black;
  
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

input[type=number], select {
  
  width: 40%;
  padding: 12px 20px;
  margin: 8px 350px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  
  width: 40%;
  padding: 12px 20px;
  margin: 8px 350px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea[id=address], select {
  
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


</head>

<!--sign up starts -->

<body>

	<fieldset>

		<div style="text-align: center;">
			<h1 class="text text-center">Registration</h1>
			<br>
			<span style=" color : green;"><?php echo "<b>" . $successfulMessage  . "</b>"; ?></span>
			<span style=" color : green;"><?php echo "<b>" . $errorMessage  . "</b>"; ?></span>

			<form action="" method="post" name="RegistrationForm" onsubmit="return validation()" class="mx-1 mx-md-4 " enctype="multipart/form-data">
				<h5><?php echo $err_db; ?></h5>


				<div>

					<h4 class="text">User Id</h4>
					<input type="number" name="id" id="uid" value="<?php echo $id; ?>"><br> 
					<span id="uidErr" style="color: red;"><?php echo $idErr; ?></span>

				</div>


				<div>
					<h4 class="text">Username</h4>
					<input type="text" name="username" id="username" autocomplete="off" value="<?php echo $username; ?>"><br>

					<span id="usernameErr" style="color: red;"><?php echo $usernameErr; ?></span>

				</div>

				<div>
					<h4 class="text">Password</h4>
					<input type="password" name="password" id="password" autocomplete="off" value="<?php echo $password; ?>"><br>

					<span id="passwordErr" style="color: red;"><?php echo $passwordErr; ?></span>
				</div>

				<div>
					<h4 class="text">Email</h4>
					<input type="text" name="email" id="email" autocomplete="off" value="<?php echo $email; ?>"> <br>

					<span id="emailErr" style="color: red;"><?php echo $emailErr; ?></span>
				</div>

				<div>
					<h4 class="text">Mobile</h4>
					<input type="text" name="mobile" id="mobile" autocomplete="off" value="<?php echo $mobile; ?>"><br>
					<span id="mobileErr" style="color: red;"><?php echo $mobileErr; ?></span>
				</div>



				<div>
					<h4 class="text">Address</h4>
					<textarea  name="address" id="address" autocomplete="off"><?php echo $address; ?></textarea><br>
					<span id="addressErr" style="color: red;"><?php echo $addressErr; ?></span>
				</div>













				<div>

					<input type="submit" name="sign_up" class="button" value="Sign Up"><br>

					<button class="button"><a href="login.php">Already Registered</a></button>
				</div>

			</form>


		</div>

	</fieldset>
	<script src="../JS/sign.js"></script>
	<!--sign up ends -->

</body>

</html>