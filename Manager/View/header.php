<html lang="en">
<head>
    <title>header</title>


</head>
<body>
    <center><img src="../Photo/header22.jpg" width="1500" height="200"></center>
    <br>
    <div class="topnav" id="myTopnav">

  <a href="home.php" class="active">Home</a>
  <a href="all_services_by_ajax.php" class="active">Dashboard</a>

 
  <a href="profile.php">View Profile</a>
  <a href="edit_profile.php">Manage Profile</a>
  <a href="update_password.php">Update Password</a>

  <a href="add_services.php">Add Service</a>
 
  <a href="all_services.php">All Services</a>
  <a href="add_promocode.php">Coupon</a>
  <a href="view_customer.php">Customer Information</a>
  <a href="view_feedback.php">Customer Feedback</a>
  <a href="view_payment_history.php">Payment History</a>
  <a href="add_employee.php">Add Employee</a>
  <a href="view_employee.php"> Employee</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
