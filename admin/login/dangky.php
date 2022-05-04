<?php

$host="localhost";
$user="pma";
$password="";
$db="webbanhang";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="insert into login (username,password) values('$username','$password') ";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		echo"Đăng ký thành công";
	}
	else
	{
		echo"Đăng ký thất bại";
	}

	

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>

	<h1>Trang đăng ký</h1>
	<br><br><br><br>
	<div style="background-color: grey; width: 500px;">
		<br><br>


		<form action="#" method="POST">

	<div>
		<label>Tài khoản</label>
		<input type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>Mật khẩu</label>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>
		
		<input type="submit" value="Đăng Ký">
	</div>
	</form>
	<br><br>
	<a href="login.php" > Về lại trang đăng nhập</a>
 </div>
</center>

</body>
</html>

