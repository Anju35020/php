<?php
$con=mysqli_connect("localhost","root","","practice");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$ins=$con->query("insert into reg(name,email,password,contact) values ('$name','$email','$password','$contact')");
	if($ins){
		
	echo "Data Inserted";
	}
	else
	{
	echo "Error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration_Form</title>
</head>
<body>
	<h1>Create Account</h1>
<form method="post" action="">
	<label>Name:</label><br>
	<input type="text" name="name" placeholder="Enter Your Name"><br>
	<label>Email:</label><br>
	<input type="email" name="email" placeholder="Enter Your Email"><br>
	<label>Password:</label><br>
	<input type="password" name="password" placeholder="Enter Your Password"><br>
	<label>Contact:</label><br>
	<input type="number" name="contact" placeholder="Enter Your Contact"><br><br>
	<input type="submit" name="submit" value="Register">
	<a href="login.php">Login</a>

	
</form>
</body>
</html>