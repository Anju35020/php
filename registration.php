<?php
$conn=mysqli_connect("localhost","root","","test");
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
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$ins=$conn->query ("insert into registration (name,email,password) values('$name','$email','$password')");
    if($ins){
    	echo "yes";
    }else
    {
    	echo "no";
    }
}
?>
