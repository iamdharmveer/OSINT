<?php
if(mysql_connect("localhost","root","")){
	if(mysql_select_db("process"))
	echo "Connection Establish";
}
else
mysql_error();
?>