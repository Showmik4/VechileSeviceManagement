



<?php include 'home.php';
	include '../Model/conn.php';
	
?>

<style>


  
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
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<!--All Products starts -->

<div class="center">
	<h3 class="text">Payment History</h3>
	
	<div id="suggesstion"></div>
	<table id="customers">
		<thead>
			
			
			<th>Customer Name</th>
            <th>Address</th>
			<th>Phone</th>
			<th>Service Category</th>
            <th>Paid</th>
    
			
			
           
           
		</thead>
		<tbody>
			<?php
         
         

         $faculty_id=$_SESSION['id'];

         


         $result=mysqli_query($conn,"SELECT 
         payment_history.id,payment_history.customer_id,payment_history.service_id,payment_history.paid,customer.name,customer.address,customer.phone, services.category 
       FROM  payment_history 
         INNER JOIN customer ON customer.id = payment_history.customer_id
         INNER JOIN services ON services.id = payment_history.service_id
                  
                 ");
         
         while($row=mysqli_fetch_assoc($result)){?>

          <tr>

          <td><?=$row['name']  ?></td>
         
          <td><?=$row['address']  ?></td>
          <td><?=$row['phone']  ?></td>
          <td><?=$row['category']  ?></td>
          <td><?=$row['paid']  ?></td>
          

         

          </tr>

         <?php
         }

         

          
          ?>

<?php
if(isset($_GET['id'])){


    

     $id=$_GET['id'];
     $book_id=$_GET['book_id'];
    
     $date=date('d-m-y');

  

        //mysqli_query($conn,"UPDATE `issue_book` SET `return_date`='$date' WHERE `id`=`$id`;");

        $result=mysqli_query($conn,"UPDATE `issue_book` SET `return_date`='$date' WHERE `id`=$id;" );

        if($result){
            mysqli_query($conn,"UPDATE `library_books` SET `available_qty`=`available_qty`+1 WHERE `id`=$book_id" );

            ?>
            <script type="text/javascript">
      
              alert("Book Returned Successfully")
              javascript:history.go(-1);
            </script>
      
           <?php

       

     

        }

        else{

          
            ?>
            <script type="text/javascript">
      
              alert("Book Returned Failed")
            </script>
      
           <?php

       
        }

}
?>
			
		</tbody>
	</table>
</div>
