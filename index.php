
<?php
	
	include("dbcon.php");
	
	$sql= "select * from school";
	$run= mysql_query($sql);
	
	?>
<html>
	<body>
	
		<table border="1" align="center">
			<tr>
				<th colspan="7" bgcolor="399999"><h3>List Of All Student<h3></th>
			</tr>
			<tr>
				<th>Student Id</th>
				<th>Student Name</th>
				<th>Gender</th>
				<th>Student Image</th>
				<th>Student City</th>
				<th>Student Hobby</th>
				<th>Action</th>
			</tr>
		<?php
			while($row=mysql_fetch_array($run))
			{
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['gender']; ?></td>


<td>	
			<?php
				$img= explode(",",$row['image']);
				foreach($img as $i) :
			?>
				<img src= "image/<?php echo $i; ?>" width="200px;" height="150px"/>
				
				
			<?php
			endforeach;
			?>
		</td>

					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['hobby']; ?></td>
					<td><a href="delete.php?id=<?php echo $row['id']; ?>"/>Delete | <a href="edit.php?id=<?php echo $row['id']; ?>"/>Edit </td>
				</tr>
			<?php
			}
			?>
		</table>
		<center><a href="insert.php">Insert New Record</a></center>
	</body>
</html>
			
			
		