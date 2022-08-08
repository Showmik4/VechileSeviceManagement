<?php include 'home.php';
	require_once '../Controller/EmployeeContrroller.php';
	
	
	$id = $_GET["id"];
	$pr= getEmployees($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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

h5{

	font-size: 15px;
	text-align: center;
	color: #4CAF50;
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
<h2>Update Employee</h2>
<h5 class="text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
  <label for="category">Name</label>
  <input type="text"  name="name" value="<?php echo $pr["name"];?>"><br>
  <label for="lname">Phone</label>
  <input type="text"  name="phone" value="<?php echo $pr["phone"];?>"><br>

  <label for="lname">Address</label>
  <input type="text"  name="address" value="<?php echo $pr["address"];?>"><br>

  

  <label for="lname">Salary</label>
  <input type="text"  name="salary" value="<?php echo $pr["salary"];?>"><br>

  

  <button type="submit" class="button" name="edit_employee">Update</button>
</form>
</div>
</body>
</html>
<!--edit category ends -->
