<?php
if (!isset($_SESSION)) {
	session_start();
}

include '../Model/db_config.php';
//$uid = "";
//$err_uid = "";
//$password = "";
//$username = "";
//$err_username = "";
//$err_pass = "";
$err_db = "";
$idErr = "";
$id = "";
$rs = "";

$img = "";
$err_p_image = "";

$id=$username = $password = $email = $mobile = $address= "";
 $idErr=$usernameErr = $passwordErr = $emailErr =$mobileErr =$addressErr  = "";
$successfulMessage = $errorMessage = "";
$hasError = false;

if (isset($_POST["sign_up"])) //sign_up $_SERVER['REQUEST_METHOD']=='POST'
{
	
    if (empty($_POST['id'])) {
		$idErr = "* id required.";
		$hasError = true;
	} else {
		if (checkUserId($_POST['id'])) {
			$idErr = "* id already exist. Try another.";
			$hasError = true;
		} else if ($_POST['id'] < 0) {
			$idErr = "* id cannot be negative";
			$hasError = true;
		} else {
			$id = $_POST['id'];
		}
	}


	if (empty($_POST['username'])) {
		$usernameErr = "* Userame required.";
		$hasError = true;
	} else {
		$username = $_POST["username"];
	}

	

	if (empty($_POST['password'])) {
		$passwordErr = "* password required.";
		$hasError = true;
	} else {
		$password = $_POST["password"];
	}

	if (empty($_POST['email'])) {
		$emailErr = "* email required.";
		$hasError = true;
	} else {
		$s = strpos($_POST["email"], "@");
		if ($s != false) {
			$t = strpos($_POST["email"], ".", $s + 1);
			if ($t != false) {
				$email = $_POST["email"];
			} else {
				$emailErr = "*Invalid email";
			}
		} else {
			$emailErr = "*Invalid email";
		}
	}

    
	if (empty($_POST['mobile'])) {
		$mobileErr = "* mobile  required.";
		$hasError = true;
	} else {
		$mobile = $_POST["mobile"];
	}


	if (empty($_POST['address'])) {
		$addressErr = "* address required.";
		$hasError = true;
	} else {
		$address = $_POST["address"];
	}


	if (!$hasError) {

		$rs = insertUser($id, $username, $password, $email,$mobile, $address);
		if ($rs === true) {
			$successfulMessage = "Registration Successful";
			header("Location: login.php");
			$err_db = $rs;
		} else {
			$errorMessage = "Registration Unsuccessful";
		}
	}
} 





function insertUser($id, $username, $password, $email,$moblie, $address)
{
	$query = "insert into users values ('$id','$username','$password','$email','$moblie','$address')";
	return execute($query);
}

function authenticateUser($uid, $password)
{
	// var_dump($uid);
	//var_dump($password);
	$query = "select * from employee where id=$uid and password='$password'";
	$rs = get($query);
	//var_dump($rs);
	if (count($rs) > 0) {
		return true;
	}
	return false;
}


function typecheck($uid)
{
	$query = "select usertype from employee where id='$uid'";
	$rs = get($query);
	return $rs;
}


function checkUserId($id)
{

	$query = "select * from users where id=$id";
	$rs = get($query);
	//var_dump($rs);
	if (count($rs) > 0) {
		return true;
	}
	return false;
}
