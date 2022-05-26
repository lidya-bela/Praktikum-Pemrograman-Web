<?php
include "admin/koneksi.inc.php";
//memindahkan nilai data form ke variabel
$vnama = $_POST['Nama'];
$vjkel = $_POST['jkel'];
$vemail = $_POST['Email'];
$valamat = $_POST['Alamat'];
$vkota = $_POST['Kota'];
$vpesan = $_POST['Pesan'];
$sql = "INSERT kontak set Nama='$vnama', 
jkel='$vjkel',
Email='$vemail',
Alamat='$valamat',
Kota='$vkota',
Pesan='$vpesan'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
header("location:kontak.php");
?>