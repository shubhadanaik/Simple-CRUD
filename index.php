<!Doctype html>
<?php
include_once("config.php");
$result=mysqli_query($con,"select * from registration order by id asc");
?>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="registration.php">Add data</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php">Logout</a></br>

<br><table width='50%' border=0>
<tr bgcolor='#CCCCCC'>

<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
		<th>Password</th>
		<th>Phone No.</th>
		<th>City</th>
		<th>Update</th>
      </tr>
    </thead>

    
</tr></br>
<?php

while($res=mysqli_fetch_array($result)){
	echo"<tr>";
	echo"<td>".$res['name']."</td>";
	echo"<td>".$res['email']."</td>";
	echo"<td>".$res['password']."</td>";	
	echo"<td>".$res['phone_no']."</td>";
	echo"<td>".$res['city']."</td>";
	echo"<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\"
	onclick =\"return confirm('are you sure u want to delete?')\">Delete</a></td>"; 
}	
?>
</td>
</table>
</body>
</html>