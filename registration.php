<!doctype html>
<?php
include_once("config.php");
?>
<html>
<head>
<title>Registration</title>

</head>
<body>
<form action="registration_process.php" method="POST" name="'form1" >
<div class="form-group row">
  <div class="col-xs-4">

<td>
<table width="80%" color="#cccccc">
<tr>
<td>Name</td>
<td><input type="text" name="name" pattern="[a-zA-Z][a-zA-Z ]{2,}" required></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number,one uppercase & one lowercase letter, and at least 8 or more characters" required ></td>
</tr>

<tr>
<td>Mobile No.</td>
<td><input type="text" name="phone_no" pattern="[789][0-9]{9,}" title="Must contain 10 digit number starting form 7,8 or 9"required></td>
</tr>

<tr>
<td>City</td>
<td><input type="text" name="city" required></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Register"></td>
<td><input type="Reset" name="submit" value="Reset">
<input type="button" onclick="location.href='login.php'" name="submit" value="Already Registered?Login"></td>

</tr>
</table>
</td>
</form>
</body>
</html>