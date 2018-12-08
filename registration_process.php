<!Doctype html>
<html>
<head>
<title>Add data</title>
</head>
<body>
<br>
<a href="registration.php">Add data</a>
</br>
<?php
include_once("config.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone_no=$_POST['phone_no'];
$city=$_POST['city'];

mysqli_select_db($db,"practical_test");
$query1="insert into registration(name,email,password,phone_no,city)values('$name','$email','$password','$phone_no','$city')";
if(!mysqli_query($db,$query1))
{
	echo ("error:description:".mysqli_error($db));
}
else
{
	echo"<font color='green'>data added sucessfully";
	echo"<br><a href='index.php'>view result</a></br>";
}	
?>
</body>
</html>