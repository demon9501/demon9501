<?php
require_once ('C:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Khách Hàng</title>
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
				<h2 class="text-center">Quản Lý Khách Hàng</h2>
			</div>
			<div class="panel-body">
				<a href="add.php">
					<button class="btn btn-success" style="margin-bottom: 15px;">Thêm Khách Hàng</button>
				</a>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>							
							<th>Tên Khách Hàng</th>
							<th>Địa Chỉ</th>
							<th>Số Điện Thoại</th>
                            <th>Mã Hóa Đơn</th>
						</tr>
					</thead>
					<tbody>
					<?php
//Lay danh sach danh muc tu database
$sql          = 'select * from khachhang';
$khachhangList = executeResult($sql);

$index = 1;
foreach ($khachhangList as $item) {
	echo '<tr>
				<td>'.($index++).'</td>				
				<td>'.$item['tenkhach'].'</td>	
				<td>'.$item['diachi'].'</td>
				<td>'.$item['phone'].'</td>	
                <td>'.$item['mahoadon'].'</td>		
									
				<td>
					<a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
				</td>
				<td>
					<button class="btn btn-danger" onclick="deleteKhachhang('.$item['id'].')">Xoá</button>
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
		function deleteKhachhang(id) {
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