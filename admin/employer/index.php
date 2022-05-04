<?php
require_once ('D:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Nhân viên</title>
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
		<button class="btn btn-success ">
			<a href="../../../webbanhang/qlfastfood/trangtru.php">Trang Chủ</a>
		</button>
	</ul>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active" href="../catelogy/">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../product/">Quản Lý Sản Phẩm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../employer/">Quản Lý Nhân viên</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../customers/">Quản Lý Khách hàng</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Quản Lý Hóa đơn</a>

	  </li>
 <li class="nav-item">
	    <a class="nav-link active" href="../loginfix/">Quản Lý Tài khoản</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Nhân Viên</h2>
			</div>
			<div class="panel-body">
				<a href="add.php">
					<button class="btn btn-success" style="margin-bottom: 15px;">Thêm Nhân Viên</button>
				</a>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>							
							<th>Tên Nhân Viên</th>
							<th>Tuổi</th>
							<th>Địa Chỉ</th>
							<th>Số Điện Thoại</th>
						</tr>
					</thead>
					<tbody>
					<?php
//Lay danh sach danh muc tu database
$sql          = 'select * from nhanvien';
$nhanvienList = executeResult($sql);

$index = 1;
foreach ($nhanvienList as $item) {
	echo '<tr>
				<td>'.($index++).'</td>				
				<td>'.$item['fullname'].'</td>	
				<td>'.$item['age'].'</td>
				<td>'.$item['adress'].'</td>
				<td>'.$item['phone'].'</td>		
									
				<td>
					<a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
				</td>
				<td>
					<button class="btn btn-danger" onclick="deleteNhanvien('.$item['id'].')">Xoá</button>
				</td>
			</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteNhanvien(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
</body>
</html>