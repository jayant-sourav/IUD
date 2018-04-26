
<?php 
	
	include("dbcon.php");
	
	$id= $_REQUEST['id'];
	
	if(isset($_POST['submit']))
		{
			$name= $_POST['name'];
			$gender= $_POST['gender'];
			$city= $_POST['city'];
			$hobby= $_POST['hobby'];
			
			$ext= implode($hobby);
			$pic=$ext;
			
			$filename= $_FILES['photo']['name'];
			$tempname= $_FILES['photo']['tmp_name'];
			
			move_uploaded_file($tempname,"image/$filename");
		
		$sql= "UPDATE `school` SET `id`='$id',`name`='$name',`gender`='$gender',`image`='$filename',`city`='$city',`hobby`='$pic' WHERE id=$id";
		$run= mysql_query($sql);
		
		echo "<script> alert('Record Updated'); window.location='index.php';</script>";
	}
		$query= "select * from school where id=$id ";
		$run= mysql_query($query);
		$row= mysql_fetch_array($run);
?>
<html>
	<body>
		<form action="edit.php" method="post" enctype="multipart/form-data">
			<table border="1" align="center" style="margin-top:90px;">
				
			<tr>
				<th colspan="2" align="center"> Insert Record Form</th>
			</tr>
			<tr>
				<td>Enter Student Id :</td>
				<td><input type="text" name="id" value="<?php echo $row['id']; ?>" /></td>
			</tr>
			<tr>
				<td>Enter Student Name :</td>
				<td><input type="text" name="name" value="<?php echo $row['name']; ?>" /></td>
			</tr>
			<tr>
				<td>Select Gender :</td>
				<td><input type="radio" name="gender" value="male"<?php if($row['gender']=="male"){?> checked="checked"; <?php } ?> />Male
					<input type="radio" name="gender" value="female"<?php if($row['gender']=="female"){?> checked="checked"; <?php } ?> />Female
			</tr>
			<tr>
				<td>Select Student Image :</td>
				<td><input type="file" name="photo" /></td>
			</tr>
			<tr>
				<td>Select Student city :</td>
				<td><select name="city" id="city" />
					<option value="" name="Select City">Select City
					<option value="Ranchi" name="ranchi">Ranchi
					<option value="Kolkata" name="Kolkata">Kolkata
					<option value="Mumbai" name="Mumbai">Mumbai
					</td>
			</tr>
			<tr>	
				<td>Select Hobby :</td>
				<td><input type="checkbox" name="hobby[]" value="Writing" />Writing
					<input type="checkbox" name="hobby[]" value="Reading" />Reading
					<input type="checkbox" name="hobby[]" value="Singing" />Singing
					<input type="checkbox" name="hobby[]" value="Music" />Music
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Update Record"/></td>
			</tr>
		</table>
	</form>
	</body>
</html>