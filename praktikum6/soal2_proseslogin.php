<?php
if(isset($_GET['nama']) AND isset($_GET['email'])){
	$nama=$_GET['nama'];
	$email=$_GET['email'];
	$nama=htmlspecialchars($nama);
	$email=strip_tags($email);
}
if(empty($nama) and empty($email)){
	header("Location:soal2_nama_dan_email_kosong.php");
}
else if(empty($nama)){
	header("Location:soal2_namakosong.php");
}
else if(empty($email)){
	header("Location:soal2_emailkosong.php");
}
	else{
		include "soal1_hasillogin.php";
}
?>