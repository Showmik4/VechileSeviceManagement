<?php

include '../Model/conn.php';
include 'home.php';





$id=$_SESSION["id"];


if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["current_password"] == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . $_POST["new_password"] . "' WHERE id='" . $_SESSION["id"] . "'");
       echo  "<h2>Password Changed</h2>";
    } else{
      echo  "<h2 color:red>Invalid</h2>";
    }
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  display: inline-block;
  align-items: center;
}
  </style>
</head>
<body>

<div class="form">

    <h1 align="center">Update Password</h1>
    <hr>
    <br>

    <div id="error"> </div>
    <form id="form" onsubmit="return validation()" action=""  method="post" enctype="multipart/form-data">
      
      <table align="center">
        <tr>
          <td>Enter Current Password</td>
          <td>: <input id="old_password" type="password" name="current_password"></td><br>
          <span id="oldpassErr" style="color:red;"></span></td>
        </tr>

       <tr>
        <td>Enter New Password</td>
          <td>: <input id="new_password" type="password" name="new_password"></td>  <br>
          <td><span id="newpassErr" style="color:red;"></span></td>
        </tr>

        <tr>
        <td>Enter Confirm Password</td>
          <td>: <input id="con_password" type="password" name="confirm_password"></td>  <br>
          <td><span id="conpassErr" style="color:red;"></span></td>
        </tr>

       

		
      


    
    



      <tr>
       
       <td><input class="button" type="submit" value="change">Update Password</input></td> 
      </tr>


    </table>


    </form>
  
</div>



    





</body>
</html>

<script src="../JS/update_password.js">

</script>