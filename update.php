<?php
$con= mysqli_connect("localhost","root","","practice");

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$id=intval($_GET['id']);
	$sql=mysqli_query($con,"update reg set name='$name',email='$email',password='$password', contact='$contact' where id='$id'");
}

$id=intval($_GET['id']);

$query=mysqli_query($con,"select * from reg where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update.php</title>
</head>
<body>
<form method="post" action="">
	<input type="name" name="name" value="<?php echo $row['name'];?>"><br><br>
	<input type="email" name="email" value="<?php echo $row['email'];?>"><br><br>
	<input type="password" name="password" value="<?php echo $row['password'];?>"><br><br>
	<input type="number" name="contact" value="<?php echo $row['contact'];?>"><br><br>
	<input type="submit" name="submit" value="Update">
	
</form>

<?php
}
?>
</body>
</html>