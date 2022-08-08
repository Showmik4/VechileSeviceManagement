<?php include 'home.php';
	require_once '../Controller/EmployeeContrroller.php';
	$services = getEmployee();
?>
<!--All Products starts -->
<head>
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

h3{
    text-align: center;
    font-size: 20px;
}


</style>


</head>
<div class="center">
	<h3 >All Employee</h3>
	
	<div id="suggesstion"></div>
	<table id="customers">
		<thead>
			<th>Sl#</th>
		
			<th>Name</th>
			<th>Phone</th>
            <th>Address</th>
            <th>Join Date</th>
			<th>Salary</th>
			
			
			
            <th>Edit</th>
            
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($services as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["name"]."</td>";
						echo "<td>".$p["phone"]."</td>";
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["joinning_date"]."</td>";
                        echo "<td>".$p["salary"]."</td>";
						
                   
                      

						echo '<td><a class="button" href="edit_employee.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
					
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>


