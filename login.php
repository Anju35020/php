<?php

include 'connect.php';

if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$chk=$conn->query("SELECT * FROM reg WHERE email='$email' && password='$password'");
	$chkk=mysqli_fetch_array($chk);
	if ($chkk) {
		header('location:reg.php');
	}else
	{
		echo "<script>alert('Wrong id and password'); window.location.href='login.php';</script>";
	}
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
</head>
<body>
		<form action="" class="ab" method="post">
		<label>E-mail:</label><br>
		<input type="email" name="email" required class="form-control"><br>
		<label>Password:</label><br>
		<input type="password" name="password" required class="form-control"><br><br>
		<input type="submit" class="btn btn-success" name="login" value="login">
	</form>
	</div>		
</body>
</style>
</html>