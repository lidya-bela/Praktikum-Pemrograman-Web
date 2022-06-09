<?php
session_start();
include "koneksi.inc.php";
if(!isset($_SESSION['username'])){
	header("location:form_login.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BERANDA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		body{
			background-color: #141E27;
			color: #F7F7F7;}
		}
		.container {color: #F9F9F9;}
		.nav-item {display: flex; vertical-align: middle; align-content: center;color: #F9F9F9;}
		.nav-item a {color:;}
	</style>
</head>
<body>
	<div class="container">
		<br>
		<br>
	<center><h2> <b> Selamat datang, <?php echo $_SESSION['username'] ?> pada hari <?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d-m-Y');?> </h2></center>
		<br>
		<br>
		<br>
			<li class="nav-item bg-warning nav-justified">
			<a class="nav-link active text-dark" href="form_guestbook.php">INPUT GUESTBOOK</a>
			</li>
			<br>
			<li class="nav-item bg-warning nav-justified">
			<a class="nav-link active text-dark" href="cetak.php" align="center">LIHAT GUESTBOOK</a>
			</li>
			<br>
			<li class="nav-item bg-warning nav-justified">
			<a class="nav-link active text-dark" href="http://localhost:8012/praktikum10/kuispraktikum/form_login.php">LOG OUT</a>
			</li>
		</center>
</body>
</html>