



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

</style>
<!--All Products starts -->

<div class="center">
	<h3 class="text">Customers</h3>
	
	<div id="suggesstion"></div>
	<table id="customers">
		<thead>
			
			
			<th>Customer Name</th>
			<th>Customer Address</th>
			<th>Phone</th>
            <th>Service Category</th>
    
			
			
           
           
		</thead>
		<tbody>
			<?php
         
         

         $faculty_id=$_SESSION['id'];

         


         $result=mysqli_query($conn,"SELECT `customer`.`name`,`customer`.`address`, `customer`.`phone`,`services`.`category`FROM `services`
         INNER JOIN `customer` ON `customer`.`service_id`= `services`.`id`
         
       ");
         
         while($row=mysqli_fetch_assoc($result)){?>

          <tr>
         
          <td><?=$row['name']  ?></td>
          <td><?=$row['address']  ?></td>
          <td><?=$row['phone']  ?></td>
          <td><?=$row['category']  ?></td>
         
         



          </tr>

         <?php
         }

         print_r($row);

          
          ?>
			
		</tbody>
	</table>
</div>
