<?php

session_start();

$emailid=$pwd='';

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailid = $_POST["email"];
	$pwd = $_POST["password"];
	$pwd = md5($pwd);
}

// var_dump($_POST);

include_once "data.php";

 $sql = "select email,password from users where email='$emailid' && password='$pwd'";
 $result  = mysqli_query($conn,$sql);

 print_r($result);

if(mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['email'] = $row['email'];
	$_SESSION['logged'] = TRUE;

	header("location: welcome.php");
	exit;
}
else
{
  header("location: register.php");
  exit;
}
	

?>