<?php

$connect=mysqli_connect("localhost","root","","manager");
$select="SELECT * FROM promocode";
$ex=mysqli_query($connect,$select);
while($row=mysqli_fetch_array($ex)){?>

<tr>
<td><?php echo $row['coupon_code'];?></td>

<td><?php echo $row['discount'];?></td>
<td><?php echo $row['status'];?></td>





</tr>


<?php

}



?>