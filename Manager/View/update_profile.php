<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"manager");


$query="update users set username='$_POST[username]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'";

$query_run=mysqli_query($connection,$query);

if($query_run){

    echo "<h1 style='color:green'>Profile updated successfully</h1>";
    header("Location: profile.php");
}

?>


