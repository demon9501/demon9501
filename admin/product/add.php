<?php
require_once ('D:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');

$price =$thumbnail= $content = $title= $id= $id_category = '';
if (!empty($_POST)) {
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	if (isset($_POST['price'])) {
		$price = $_POST['price'];
	}
	if (isset($_POST['thumbnail'])) {
		$thumbnail = $_POST['thumbnail'];
	}
	if (isset($_POST['content'])) {
		$content = $_POST['content'];
	}
	if (isset($_POST['id_category'])) {
		$id_category = $_POST['id_category'];
	}
	
	if (!empty($price)) {
		
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into product(title, price, content,thumbnail,id_category,created_at,updated_at) values ("'.$title.'", "'.$price.'", "'.$content.'","'.$thumbnail.'","'.$id_category.'","'.$created_at.'","'.$updated_at.'")';
		} else {
			$sql = 'update product set title = "'.$title.'", id = "'.$id.'", price = "'.$price.'", thumbnail = "'.$thumbnail.'", content = "'.$content.'", id_category = "'.$id_category.'" where id = '.$id;
		}

		execute($sql);

		header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from product where id = '.$id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		$title = $product['title'];
		$id = $product['id'];
		$price = $product['price'];
		$thumbnail = $product['thumbnail'];
		$content = $product['content'];
		$id_category = $product['id_category'];
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
	    <a class="nav-link" href="../catelogy/">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Quản Lý Sản Phẩm</a>
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
					  <label for="price">sản phẩm:</label>	
					  <input type="text" name="id" value="<?=$id?>" hidden="true">				 
					  <select class="form-control"name="id_category"id="id_category">
					  	<option> lựa chọn</option>
	<?php
	$sql          = 'select * from category';
$categoryList = executeResult($sql);
foreach ($categoryList as $item ) {
	echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
	# code...
}
	?>
					  </select>
					</div>
					<div class="form-group">
					  <label for="price">Giá Bán:</label>					 
					  <input required="true" type="number" class="form-control" id="price" name="price" value="<?=$price?>">
					</div>
					<div class="form-group">
					  <label for="thumbnail">Hình ảnh:</label>					 
					  <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail"value="<?=$thumbnail?>">
					  
					</div>
					<div class="form-group">
					  <label for="title">Nội Dung:</label>					 
					   <textarea class="form-control" rows="5" name="title" id="title"><?=$title?></textarea>
					</div>
					
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>