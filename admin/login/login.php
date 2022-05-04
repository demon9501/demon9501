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


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:../../qlfastfood/trangtru.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:../../admin/catelogy/index.php");
	}

	else
	{
		echo "username or password incorrect";
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

	<h1>Trang đăng nhập</h1>
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
		
		<input type="submit" value="Đăng nhập">
	</div>


	</form>


	<br><br>
 </div>
</center>

</body>
</html>

