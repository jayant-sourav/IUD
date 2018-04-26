
<?php
	
	include("dbcon.php");
	
	$id= $_REQUEST['id'];
	
	$sql= "delete from school where id=$id ";
	$run= mysql_query($sql);
	
	echo "<script> alert('Record deleted'); window.location='index.php'; </script>";
	
?>