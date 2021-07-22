<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$nic=$_POST['nic'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE students SET name='$name',age='$age',address='$address',nic='$nic' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$name = $row['name'];
	$age = $row['age'];
	$address = $row['address'];
	$nic = $row['nic'];
}
?>
<html>
<head>	
	<title>Edit Student Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_student" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>age</td>
				<td><input type="text" name="age" value=<?php echo $age;?>></td>
			</tr>
			<tr> 
				<td>address</td>
				<td><input type="text" name="address" value=<?php echo $address;?>></td>
			</tr>
			<tr>

				<td>nic</td>
				<td><input type="text" name="nic" value=<?php echo $nic;?>></td>
			</tr>
			<tr>


				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

