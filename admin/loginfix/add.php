<?php
require_once ('D:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');

$username = $password = '';
if (!empty($_POST)) {
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	if (!empty($name)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into login(username, password) values ("'.$username.'", "'.$password.'")';
		} else {
			$sql = 'update login set username = "'.$username.'", password = "'.$password.'" where id = '.$id;
		}

		execute($sql);

		header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from login where id = '.$id;
	$category = executeSingleResult($sql);
	if ($category != null) {
		$name = $category['name'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Danh Mục Sản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../product/">Quản Lý Sản Phẩm</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Danh Mục Sản Phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					
					<div class="form-group">
					  <label for="username">user:</label>					 
					  <input required="true" type="text" class="form-control" id="username" name="username">
					</div>
					<div class="form-group">
					  <label for="password">pass:</label>					 
					  <input required="true" type="text" class="form-control" id="password" name="password">
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>