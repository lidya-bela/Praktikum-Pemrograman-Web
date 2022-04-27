<?php
echo "<center>Nama: ".$_GET['nama']."</center> <br>";
echo "<center>Email: ".$_GET['email']."</center> <br>";
date_default_timezone_set('Asia/Jakarta');
$date= new DateTime('now');
echo "<center>Jam & Tanggal Login: ".$date->format('H:i:s A & d-m-Y');
?>