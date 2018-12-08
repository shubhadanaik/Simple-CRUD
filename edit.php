<!DOCTYPE html>
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
	$name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_no = $_POST['phone_no'];
    $city = $_POST['city'];          
        //updating the table
        $result = mysqli_query($con, "UPDATE registration SET name='$name',email='$email',password='$password',phone_no='$phone_no',city='$city' WHERE id=$id");
        header("Location: index.php");    
}
?>
<?php
$id = $_GET['id']; 

$result = mysqli_query($con, "SELECT * FROM registration WHERE id=$id"); 
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
  $email = $res['email'];
    $password = $res['password'];	
    $phone_no = $res['phone_no'];
    $city = $res['city'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
		
		<tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $password;?>"></td>
            </tr>
            
			<tr> 
                <td>Mobile No.</td>
                <td><input type="text" name="phone_no" value="<?php echo $phone_no;?>"></td>
            </tr>
			<tr> 
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>


