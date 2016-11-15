<?php
include('connection.php');
$passwd_1 = $_POST['password'];
$passwd_2 = $_POST['rpassword'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$username = $_POST['username'];

if( $passwd_1 == $passwd_2){
//mysql_query("insert into signup values ('$_POST['fullname']', '$_POST['email']', '$_POST['address']', '$_POST['city']', '$_POST['country']' ,'$_POST['username']','$_POST['password']')");
mysql_query("insert into signup values ('$fullname', '$email', '$address', '$city', '$country' ,'$username','$passwd_1')");
echo "thank you";
}
else {
	echo "Sign Up failed ! Server too busy";
	error_reporting(1);
}
?>