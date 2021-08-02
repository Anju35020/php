<?php 
$conn=mysqli_connect("localhost","root","","test");

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$ins=$conn->query("INSERT INTO form(fname,lname,email,password,cpassword) VALUES('$fname','$lname',$email','$password',$'cpassword')");
	if($ins){
		echo "Inserted";
	}else{
		echo "Not Inseretd";
	}

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>fetch the infromation</title>
	<style type="text/css">
		.box{
			border:solid;
			height: 500px;
			width: 400px;
			background-color: lightgray;
            margin-left:450px;
	}
	.center{
		margin-left: 30px;
	}
	</style>
</head>
<body>
	<div class="box">
		<div class="center">

		<h2>Registeration Form</h2><br>
		<form action="" method="post">
<label><b>First Name:</b></label><br>
<input type="text" name="fname" placeholder="First Name" size="30px"><br><br>
<label><b>Last Name:</label></b><br>
<input type="text" name="lname" placeholder="Last Name" size="30px"><br><br>
<label><b>Email:</label></b><br>
<input type="text" name="email" placeholder="Email" size="30px"><br><br>
<label><b>Password:</label></b><br>
<input type="text" name="password" placeholder="Password" size="30px"><br><br>
<label><b>Confirm Password:</b></label><br>
<input type="text" name="cpassword" placeholder="Confirm Password" size="30px"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>