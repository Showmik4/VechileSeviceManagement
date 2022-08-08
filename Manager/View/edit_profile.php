<?php

//include  '../Model/db_config.php';
include 'home.php';

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"manager");

$username="";
$email="";

$mobile="";

$address="";


$query="Select * from users where id='$_SESSION[id]'";

$query_run=mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($query_run)){

      $username=$row['username'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $address=$row['address'];
}




?>

<!DOCTYPE html>
<html>
<head>
<style> 
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

h2{
  text-align: center;
}
</style>
</head>
<body>
<div>
<h2>Update Profile</h2>

<form action="update_profile.php" method="post" enctype="multipart/form-data">
  <label for="fname">Username</label>
  <input type="text" id="fname" name="username" value="<?php echo $username ?>"><br>
  <label for="lname">Email</label>
  <input type="text" id="lname" name="email" value="<?php echo $email ?>"><br>

  <label for="lname">Mobile</label>
  <input type="text" id="lname" name="mobile" value="<?php echo $mobile ?>"><br>

  <label for="lname">Address</label>
  <input type="text" id="lname" name="address" value="<?php echo $address ?>"><br>

  <button type="submit" class="button" name="update">Update</button>
</form>
</div>
</body>
</html>






