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
// $id = $_REQUEST['id'];
	
$fetch=$conn->query('SELECT * FROM reg ORDER BY id DESC LIMIT 3');

// $cnt=id;
while($fetchs=mysqli_fetch_array($fetch)){

// 	// $del = $conn->query("DELETE FROM reg WHERE id='$id'");
// 	// if($del){
// 	// }else{
// 	// }

	if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from reg where id = '".$_GET['id']."'");
                  // $_SESSION['delmsg']="Category deleted !!";
		  }

?>

	<tr>
		<td><?php echo $fetchs['id'];?></td>
		<td><?php echo $fetchs['name']?></td>
		<td><?php echo $fetchs['email'];?></td>
		<td><?php echo $fetchs['password'];?></td>
		<td><?php echo $fetchs['contact'];?></td>
		<td><a href="userlist.php?id=<?php echo $fetchs['id']?>&del=delete">Delete</a></td>
		<td><a href="update.php?id=<?php echo $fetchs['id']?>" >Edit</i></a></td>
	</tr>

<?php
}
?>

</table>
</body>
</html>