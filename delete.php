<!DOCTYPE html>
<html>
<head>
	<title>UserList</title>
</head>
<body>
<table border="1px"  bgcolor="lightgreen">
	<tr>
		<th>Sno</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Contact</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>

<?php
include 'connect.php';
$id = $_REQUEST['id'];
	// $id=intval($_GET['id']);

$fetch=$conn->query('SELECT * FROM reg ORDER BY id DESC LIMIT 3');
while($fetchs=mysqli_fetch_array($fetch)){

	$del = $conn->query("DELETE FROM reg WHERE id='$id'");
	if($del){
		// echo "<script>window.location.href='userlist.php';</script>";
	}else{
		// echo "<script>window.location.href='userlist.php';</script>";
	}
?>

	<tr>
		<td><?php echo $fetchs['id']?></td>
		<td><?php echo $fetchs['name']?></td>
		<td><?php echo $fetchs['email'];?></td>
		<td><?php echo $fetchs['password'];?></td>
		<td><?php echo $fetchs['contact'];?></td>
		<td><a href="userlist.php?id=<?php echo $fetchs['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i>
		Delete</a></td>
		<td><a href="update.php">Update</a></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>


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