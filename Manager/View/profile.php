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
</style>
</head>
<body>

<h2>Profile Details</h2>
<div>
<form>
  <label>Username</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $username ?>"><br>
  <label>Email</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $email ?>"><br>

  <label>Mobile</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $mobile ?>"><br>

  <label>Address</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $address ?>">
</form>
</div>
</body>
</html>






