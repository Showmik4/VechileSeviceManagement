<?php
include 'home.php';
include '../Controller/EmployeeContrroller.php';



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service</title>

  <style>
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}
  </style>
</head>
<body>

<div class="form">

    <h1 align="center">Add Employee</h1>
    <hr>
    <br>

    <div id="error"> </div>
    <form name="form" action="" onsubmit="return validation()"  method="post" enctype="multipart/form-data">
    <h5><?php echo $err_db; ?></h5>
      <table align="center">
        <tr>
          <td>Name</td>
          <td>: <input id="catgory" type="text" name="name" value="<?php echo $name?>"  ><br>
          <span id="nameErr" style="color:red;"><?php echo $nameErr;?></span></td>
        </tr>

		<tr>
          <td>phone</td>
          <td>: <input id="cost" type="text" name="phone" value="<?php echo $phone?>" ><br>
          <span id="phoneErr" style="color:red;"><?php echo $phoneErr;?></span></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>: <input id="cost" type="text" name="address" value="<?php echo $address?>" ><br>
          <span id="addressErr" style="color:red;"><?php echo $addressErr;?></span></td>
        </tr>

        <tr>
          <td>Joinning Date</td>
          <td>: <input id="cost" type="datetime-local" name="joinning_date" value="<?php echo $joindate?>" ><br>
          <span id="joindateErr" style="color:red;"><?php echo $joindateErr;?></span></td>
        </tr>

        <tr>
          <td>Salary</td>
          <td>: <input id="cost" type="text" name="salary" value="<?php echo $salary?>" ><br>
          <span id="salaryErr" style="color:red;"><?php echo $salaryErr;?></span></td>
        </tr>

                 
          

      <tr>
        
         <td align="center"><input class="button" type="submit" name="add_employee" value="Add Employee"></td>
      </tr>


    </table>


    </form>
  
</div>



    
<script src="../JS/employee.js"></script>




</body>
</html>

