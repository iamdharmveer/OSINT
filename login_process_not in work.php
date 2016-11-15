<?php
$uname = $_POST['username'];
$pass = $_POST['password'];
session_start();
if( $uname == "max" && $pass == "admin" ){
	$_SESSION['flag'] = "pen";
	header("location:admin.php");
}
else {
	$error = 1;
	header("location:login_page.php?login-attempt=$error");
}
?>	