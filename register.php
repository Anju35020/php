<?php
$conn=mysqli_connect("localhost","root","","test");


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    
	$ins=$conn->query("SELECT * FROM register1 WHERE email='$email'");
	$inss=mysqli_fetch_array($ins);

	if ($inss) 
	{
		echo "<script>alert('Already Exist!.....');</script>";
	}
	else
	{
	

	$ins=$conn->query ("INSERT INTO register1 (name,email,password) VALUES ('$name','$email','$password')");
    if($ins){
    	echo "yes";
    }else
    {
    	echo "no";
    }
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" methode="POST">
	<label>Name</label>		
	<input type="name" name="name" placeholder="Name"><br><br>
	<label>Email</label>
	<input type="email" name="email" placeholder="Email"><br><br>
	<label>Password</label>
	<input type="password" name="password" placeholder="Password"><br><br>
	<input type="submit" name="submit" placeholder="submit">
	
</form>
</body>
</html>
