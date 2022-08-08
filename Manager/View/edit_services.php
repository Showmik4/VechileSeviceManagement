<?php include 'home.php';
	require_once '../Controller/ServiceController.php';
	
	
	$id = $_GET["id"];
	$pr= getservice($id);
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
<h2>Update Services</h2>
<h5 class="text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
  <label for="category">Category</label>
  <input type="text"  name="category" value="<?php echo $pr["category"];?>"><br>
  <label for="lname">Email</label>
  <input type="text"  name="cost" value="<?php echo $pr["cost"];?>"><br>

 

  <button type="submit" class="button" name="edit_service">Update</button>
</form>
</div>
</body>
</html>
<!--edit category ends -->
