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
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}

.read {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 2px;
  cursor: pointer;
}

#customers {
  margin: 8px 350px;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


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

input[type=number], select {
  
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
  padding: 10px;
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
  display: inline-block;
  align-items: center;
}


</style>
</head>
<body>

<div class="container">
	
			<form action="save_coupon.php" method="POST">

            <table align="center">
				
							
                                <div>
								<label>Coupon Code</label>
								<input type="text" class="form-control" name="coupon_code" id="coupon" readonly="readonly" required="required"/>
								<br />
								<button id="generate" class="button" type="button"><span class="glyphicon glyphicon-random"></span> Generate</button>
                                </div>
                                
						
							
                                <div>
                            <label>Discount</label>
                            <input type="number" class="form-control" name="discount" min="10" required="required"/>
                            </div>
							
				
					
				
                        <div id="outer">
						
					    <button name="save" class="button "><span class="glyphicon glyphicon-save"></span> Save</button>
                        
					    <div>

            </table>
              
			</form>
	
<div>
  
       

       <button class="read" >Find Promocode</button> <br> <br>

           <table id="customers">
               <thead>
               <th>Promocode</th>
                   <th>Discount</th>
               
                   <th>Status</th>
                 
                 


               <tbody id="tbody">
                
               </tbody >
              
               </thead>
           </table>


</div>


   </div>

 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="../JS/promocode.js"></script>

    <script src="../JS/main.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#generate').on('click', function(){
			$.get("get_coupon.php", function(data){
				$('#coupon').val(data);
			});
		});
	});
</script>





</body>
</html>

