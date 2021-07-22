<html>
<head>



	<title>Add student</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 


</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>



<div class="container">
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 


				<td>Name</td>
				
				<td><input type="text" name="name"><br></br></td>
			</tr>
			
			<tr> 
				<td>age</td>

				<td><input type="text" name="age"><br></br></td>
			</tr>
			
			<tr> 
				<td>address</td>
				<td><input type="text" name="address"><br></br></td>
			</tr>
			
			<tr> 
				<td>NIC</td>
				<td><input type="text" name="nic"><br></br></td>
			</tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	   </div>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$nic = $_POST['nic'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO students(name,age,address,nic) VALUES('$name','$age','$address','$nic')");
		
		// Show message when user added
		echo "student added successfully. <a href='index.php'>View Students</a>";
	}
	?>
</body>
</html>
