<?php
$connect=mysqli_connect("localhost","root","","manager");
$select="SELECT * FROM services";
$ex=mysqli_query($connect,$select);
while($row=mysqli_fetch_array($ex)){?>

<tr>
<td><?php echo $row['category'];?></td>

<td><?php echo $row['cost'];?></td>

<td><img src="../service_images/<?php echo $row['image'];?>" width='80px' height='100px'  ></td>

 

</tr>


<?php

}



?>