
<?php 
	
	include("dbcon.php");
	
	if(isset($_POST['submit']))
		{
			$id= $_POST['id'];
			$name= $_POST['name'];
			$gender= $_POST['gender'];
			$city= $_POST['city'];
			$hobby= $_POST['hobby'];
			
			$ext= implode($hobby);
			$pic=$ext;
			
			$filename= $_FILES['photo']['name'];
			$tempname= $_FILES['photo']['tmp_name'];
			

 $iname= implode(',',$filename);
		 
		$i= 0;
		
		while($i<count($filename))
		{
		
		move_uploaded_file($tempname[$i],"image/$filename[$i]");
		$i++;
		
		}
	
		$sql= "INSERT INTO `school`(`id`, `name`, `gender`, `image`, `city`, `hobby`) VALUES ('$id','$name','$gender','$iname','$city','$pic')";
		$run= mysql_query($sql);
		
		echo "<script> alert('Record Inserted'); window.location='index.php';</script>";
	}
?>
<html>
	<body>
		<script src="test.js"> </script>
		<form  method="post" enctype="multipart/form-data" onsubmit="return valid();">
		
				<table border="1" align="center" style="margin-top:90px;">
				
			<tr>
				<th colspan="2" align="center"> Insert Record Form</th>
			</tr>
			<tr>
				<td>Enter Student Id :</td>
				<td><input type="text" name="id" id="id"/></td>
			</tr>
			<tr>
				<td>Enter Student Name :</td>
				<td><input type="text" name="name" id="name"/></td>
			</tr>
			<tr>
				<td>Select Gender :</td>
				<td><input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female</td>
			</tr>
			<tr>
				<td>Select Student Image :</td>
				<td><input type="file" name="photo[]" id="photo" multiple/></td>
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
				<td colspan="2" align="center"><input type="submit" name="submit" value="Insert Record"/></td>
			</tr>
		</table>
	</form>
	
	</body>
</html>