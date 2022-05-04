<?php require_once ('C:/xampp/htdocs/webbanhang/admin/db/dbhelper.php'); 
    $id =$fullname= $age = $adress = $phone = '';
    if (!empty($_POST)) {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
        }
        
        if (isset($_POST['age'])) {
            $age = $_POST['age'];
        }
        if (isset($_POST['adress'])) {
            $adress = $_POST['adress'];
        }
        if (isset($_POST['phone'])) {
          $phone = $_POST['phone'];
      }
        
        if (!empty($fullname)) {
            //Luu vao database
            if ($id == '') {
                $sql = 'insert into nhanvien(fullname,age,adress,phone) values ( "'.$fullname.'", "'.$age.'","'.$adress.'","'.$phone.'")';
            } else {
                $sql = 'update nhanvien set  fullname = "'.$fullname.'", age = "'.$age.'", adress = "'.$adress.'", phone = "'.$phone.'" where id = '.$id;
            }
    
            execute($sql);
    
            header('Location: index.php');
            die();
        }
    }
    if (isset($_GET['id'])) {
        $id       = $_GET['id'];
        $sql      = 'select * from nhanvien where id = '.$id;
        $nhanvien = executeSingleResult($sql);
        if ($nhanvien != null) {
            $fullname = $nhanvien['fullname'];
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Quản lý nhân viên</title>
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
	    <a class="nav-link" href="../catelogy">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../product/">Quản Lý Sản Phẩm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../employer/">Quản Lý Nhân Viên</a>
	  </li>

	</ul>
</head>
<body>
    
  <div class="container">

  <form method ="post">
  
  <div class="form-group">
  <label for="fullname">Điền Tên Nhân Viên</label>
  <input type="text" name="id" value="<?=$id?>" hidden="true">
    <input name="fullname"class="form-control" placeholder="Nhập tên nhân viên">
  </div>
  <div class="form-group">
    <label for="age">Tuổi</label>
    <input name="age"class="form-control" placeholder="Nhập tuổi">
  </div>
  <div class="form-group">
    <label for="adress">Địa chỉ</label>
    <input name="adress"class="form-control" placeholder="Nhập địa chỉ">
  </div>
  <div class="form-group">
    <label for="phone">Số Điện Thoại</label>
    <input name="phone"class="form-control" placeholder="Nhập SDT">
  </div>
  </div>
  <div class="container"><button type="submit" class="btn btn-primary">Thêm</button></div>
  
</form>
    </div>

</body>
</html>