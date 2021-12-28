<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webphukiendt';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
	mysqli_select_db($conn,$csdl);

	// $conn = mysqli_connect("localhost", "root", "", "webphukiendt") or die('Ket noi thanh cong!');
    //     mysqli_set_charset($conn,"utf8");

?>