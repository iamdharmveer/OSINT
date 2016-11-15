<?php
session_start();
$compare = $_SESSION['flag'];
	if($compare == "pen")
		echo "Welcome Sir ! Ready to Work";
	else{
		$error=1;
		header("location:login_page.php?login-error=$error");
	}
?>
<form action="logout.php" method="post">
<input type="submit" name="logout" value="logout" />
</form>
