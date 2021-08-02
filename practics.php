<?php>
$conn=mysql_connect("localhost","root","aa");
if(!$conn){
	echo "Do not connected";
}
if(isset($POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['password'];
	$password=$_POST['password'];
	("INSERT INTO register (name,email,password)VALUES('$name','$email','$password')");
    if($ins){
    	echo "yes";
    }else
    {
    	echo "no";
    }
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="submit" placeholder="submit">
	
</form>
</body>
</html>