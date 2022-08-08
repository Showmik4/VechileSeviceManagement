<?php
include 'home.php';
include '../Controller/ServiceController.php';



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

    <h1 align="center">Add Services</h1>
    <hr>
    <br>

    <div id="error"> </div>
    <form name="form" action="" onsubmit="return validation()"  method="post" enctype="multipart/form-data">
    <h5><?php echo $err_db; ?></h5>
      <table align="center">
        <tr>
          <td>Category Name</td>
          <td>: <input id="catgory" type="text" name="category" value="<?php echo $category?>"  ><br>
          <span id="catErr" style="color:red;"><?php echo $categoryErr;?></span></td>
        </tr>

		<tr>
          <td>Cost </td>
          <td>: <input id="cost" type="text" name="cost" value="<?php echo $cost?>" ><br>
          <span id="costErr" style="color:red;"><?php echo $costErr;?></span></td>
        </tr>

        <tr>
        <td>Image</td>
        <td>: <input id="img" type="file" name="image" value="<?php echo $service_image?>" ><br>
        <span id="imgErr" style="color:red;"></span><?php echo $service_imageErr;?></td>
      </tr>


      

        

     
    
    

      

      <tr>
        
         <td align="center"><input class="button" type="submit" name="add_service" value="Add Service"></td>
      </tr>


    </table>


    </form>
  
</div>



    
<script src="../JS/service.js"></script>




</body>
</html>

