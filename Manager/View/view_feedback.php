



<?php include 'home.php';
	include '../Model/conn.php';
	
?>

<style>
#customers {
   margin: 8px 350px;
   text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
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
  text-align: center;
  background-color: #04AA6D;
  color: white;
}

h3{
    text-align: center;
    
}

</style>
<!--All Products starts -->

<div class="center">
	<h3 class="text">Customers Feedback</h3>
	
	<div id="suggesstion"></div>
	<table id="customers">
		<thead>
			
        <th>Category</th>
			<th>Message</th>
			
			
    
			
			
           
           
		</thead>
		<tbody>
			<?php
         
         

         $faculty_id=$_SESSION['id'];

         


         $result=mysqli_query($conn,"SELECT `feedback`.`message`,`services`.`category`FROM `services`
         INNER JOIN `feedback` ON `feedback`.`order_id`= `services`.`id`
         
       ");
         
         while($row=mysqli_fetch_assoc($result)){?>

          <tr>
          <td><?=$row['category']  ?></td>
          <td><?=$row['message']  ?></td>
        
       
         



          </tr>

         <?php
         }

         print_r($row);

          
          ?>
			
		</tbody>
	</table>
</div>
