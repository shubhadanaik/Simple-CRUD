<?php

include("config.php");
$id=$_GET['id'];
$result = mysqli_query($con, "delete from registration where id=$id");
header("Location:index.php");	
?>