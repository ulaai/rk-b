<?php

session_start();
$act = isset($_GET['act']) ? $_GET['act']:""; 
if ($act=="ceklogin") {
	$g_user = $_POST['user'];
	$g_pass = $_POST['pass'];
	if (($g_user == "5114100104" && $g_pass=="limabelas")) {
		$_SESSION['sudahLogin']="iyasudah";
		header("location:admin/index.html");
	}
	else if (($g_user == "2114100076" && $g_pass=="rahasia")) {
		$_SESSION['sudahLogin']="iyasudah";
		header("location:admin/index2.html");
	}
	else if (($g_user == "admin" && $g_pass=="admin")) {
		$_SESSION['sudahLogin']="iyasudah";
		header("location:admin/index3.html");
	} 
	else {
		echo "<script>
		alert('Username atau Password yang anda masukkan salah! Coba lagi');
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar">
		<a href="index.html" class="logo font1"><b class="font2">ReservaRoom</b></a>
	</div>
	<div class="col-md-12 badan">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<div class="col-md-12 center judul">
				<p class="font2 atas">Masukkan NRP</p>
				<div class="garis"></div>
			</div>
			<div class="col-md-12 center form-login">
			<form role="form" method="post" action="?act=ceklogin">
				<p class="font2"><input type="text" name="user" placeholder="NRP" required></p>
				<p class="font2"><input type="password" name="pass" placeholder="Password" required></p>
				<button type="submit" class="button tombol font2 jarak">Masuk</button>
				<p class="font1 tulisanKecil atas">Belum punya akun? <a href="daftar.html" class="font2">Daftar disini</a></p>
			</form>
			</div>
		</div>
	</div>
</body>
</html>