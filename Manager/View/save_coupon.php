<?php
	require_once '../Model/conn.php';
	if(ISSET($_POST['save'])){
		$coupon_code = $_POST['coupon_code'];
		$discount = $_POST['discount'];
		$status = "Valid";
		$query = mysqli_query($conn, "SELECT * FROM `promocode` WHERE `coupon_code` = '$coupon_code'") ;
		$row = mysqli_num_rows($query);
 
		if($row > 0){
			echo "<script>alert('Coupon Already Used!')</script>";
			echo "<script>window.location = 'add_promocode.php'</script>";
		}else{
			mysqli_query($conn, "INSERT INTO `promocode` VALUES('', '$coupon_code', '$discount', '$status')") ;
			echo "<script>alert('Coupon Saved!')</script>";
			echo "<script>window.location = 'add_promocode.php'</script>";
		}
	}
?>