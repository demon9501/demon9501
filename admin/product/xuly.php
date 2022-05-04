<?php
include 'D:/xampp/htdocs/webbanhang/admin/db/log.php';
if (isset($_POST['upload'])) {
$errors= array();
$file_name = $_FILES['thumbnail']['thumbnail'];
$file_size = $_FILES['thumbnail']['size'];
$file_tmp = $_FILES['thumbnail']['tmp_name'];
$file_type = $_FILES['thumbnail']['type'];
$file_parts =explode('.',$_FILES['thumbnail']['thumbnail']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if($file_size > 2097152) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$thumbnail = $_FILES['thumbnail']['thumbnail'];
$target = "photo/".basename($thumbnail);
$sql = "INSERT INTO thumbnails (thumbnail) VALUES ('$thumbnail')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Đã upload thành công!");</script>';
}else{
echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
}
}
$result = mysqli_query($con, "SELECT * FROM product");
?>
