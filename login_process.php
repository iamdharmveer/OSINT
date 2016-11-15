<?php
include('connection.php');
$uname=$_POST['username'];
$pass=$_POST['password'];
session_start();
if(mysql_query("select fname and lname from signup where fname = '$uname' and pass = '$pass'")){
			   $_SESSION['flag']="pen";
			   header("location:admin.php");
			   echo "Hello sir ! welcome";
			   }
else {
	echo "Connection failed";
	error_reporting(1);
}

?>