<?php
$host="localhost";
$username="root";
$password="";
$database="practical_test";

$db=new mysqli($host,$username,$password,$database);

$con=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,'practical_test');
?>