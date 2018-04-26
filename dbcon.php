
<?php
	
		$hostname="localhost";
		$username="root";
		$password="";
		$database="jayant";
		
	$con= mysql_connect($hostname,$username,$password) or die ("Couldn't Connect");
	
	mysql_select_db($database,$con) or die ("Database not found");
	
?>