<?php
include "koneksi.inc.php";

$username = $_POST['username'];
$password = $_POST['password'];
$error="";

$sql="select * from user where username='$username' and password='$password';";
$qry=mysqli_query($conn, $sql) or die("Proses Login gagal");
$cek = mysqli_num_rows($qry);

if($cek>0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:beranda.php");

}else{
	$error="Username atau password tidak sesuai!";
}
?>