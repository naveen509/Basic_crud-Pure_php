<!DOCTYPE html>
<html>
<head>



    <title>Homepage</title>

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body>



<a href="add.php">Add New Student</a><br/><br/>

<div class="container">

    <table class="table table-hover" width='80%' border=1>


<thead>
    <tr>
        <th>Name</th> <th>age</th> <th>address</th> <th>nic</th> <th>Update</th>
    </tr>

</thead>

 <tbody>

    <?php
        // Create database connection using config file
        include_once("config.php");

        // Fetch all users data from users table
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);


      // output data of each row
      if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['nic']."</td>";
                echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
                echo "</tr>";
            }
        }

    ?>

 </tbody>

    </table>

</div>

</body>
</html>