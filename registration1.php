<html>
<head>
<title>Form Page</title>
</head>
<body style="background:linear-gradient(pink,skyblue,pink);">
<a href="registeration_form.php">Register</a>
<a href="subscription_form.php">Subscribe</a>
<a href="login_form.php">Login</a><br><br>

<?php
$con=mysqli_connect("localhost","root","","test");
?>

<h1>Registeration Form</h1>
<form method="post" action="">
<b>Name: </b><input type=text size=50 name=myname placeholder="Enter your name here"><br><br>
<b>Email: </b><input type=email size=50 name=email placeholder="Enter your email here"><br><br>
<b>Password: </b><input type="password" name="pass" placeholder="Enter your password here" size="50px"><br><br>
<b>Contact No: </b><input type="tel" name="tel" placeholder="Enter your telephone number here" size="50px"><br><br>
<input type=submit name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit'])){
$name=$_POST['myname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$contact=$_POST['tel'];
$c=$con->query("select * from registration1 where email='$email'");
$check=mysqli_fetch_assoc($c);
if($check){
echo "Email id already used..!!";
}
else{
$ins=$con->query("insert into registration1(name,email,password,contact) values ('$name','$email','$pass','$contact')");
if($ins){
echo "Data Inserted";
}
else
{
echo "Error";
}
}
}
?>

s</body>
</html>