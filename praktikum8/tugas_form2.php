<?php
//Koneksi ke Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBpendaftaran";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//ketika mengklik tombol simpan
if(isset($_POST['btnSimpan'])){
	$simpan = mysqli_query($conn, "INSERT INTO DP (nama, jk, NISN, NIK, tempat, tgl_lahir, agama, BK, alamat, RT, RW, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_tlp, email, KPS, nomor_KPS, kewarganegaraan) VALUES ('$_POST[nama]','$_POST[jk]', '$_POST[NISN]', '$_POST[NIK]', '$_POST[tempat]', '$_POST[tgl_lahir]', '$_POST[agama]', '$_POST[BK]', '$_POST[alamat]', '$_POST[RT]', '$_POST[RW]', '$_POST[dusun]', '$_POST[kelurahan]', '$_POST[kecamatan]', '$_POST[kode_pos]', '$_POST[tempat_tinggal]', '$_POST[transportasi]', '$_POST[nomor_hp]', '$_POST[nomor_tlp]', '$_POST[email]', '$_POST[KPS]', '$_POST[nomor_KPS]', '$_POST[kewarganegaraan]')");

//jika berhasil simpan
if ($simpan){
	echo "<script>
	alert('Data berhasil disimpan!');
	document.location='tugas_form2.php';
	</script>";
}else{
	echo "<script>
	alert('Gagal menyimpan data!');
	document.location='tugas_form2.php';
	</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
		.card {background-color: #C6DBDA;}
		.card-header {background-color: #336E7B ;color: #FFFFFF;}
	</style>
</head>
<body>
<?php
$error_nama = "";
$error_jk = "";
$error_NISN = "";
$error_NIK = "";
$error_tempat = "";
$error_tgl_lahir = "";
$error_agama = "";
$error_BK = "";
$error_alamat = "";
$error_RT = "";
$error_RW = "";
$error_dusun= "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kode_pos = "";
$error_tempat_tinggal = "";
$error_transportasi = "";
$error_nomor_hp = "";
$error_nomor_tlp = "";
$error_email = "";
$error_KPS = "";
$error_nomor_KPS = "";
$error_kewarganegaraan = "";


$nama = "";
$jk = "";
$NISN = "";
$NIK = "";
$tempat = "";
$tgl_lahir = "";
$agama = "";
$BK = "";
$alamat = "";
$RT = "";
$RW = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kode_pos = "";
$tempat_tinggal = "";
$transportasi = "";
$nomor_hp = "";
$nomor_tlp = "";
$email = "";
$KPS = "";
$nomor_KPS = "";
$kewarganegaraan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["nama"]))
	{
		$error_nama = "nama tidak boleh kosong";
	}
	else{
		$tgl_nama = cek_input($_POST["nama"]);
	}
	if(empty($_POST["jk"]))
		{
			$error_jk = "Jenis Kelamin tidak boleh kosong";
		}else{
			$jk = cek_input($_POST["jk"]);
		}
	if(empty($_POST["NISN"]))
		{
			$error_tgl_masuk  = "NISN tidak boleh kosong";
		}else{
			$NISN  = cek_input($_POST["NISN"]);
		}
	if(empty($_POST["NIK"]))
		{
			$error_NIS = "NIK tidak boleh kosong";
		}else{
			$NIK = cek_input($_POST["NIK"]);
		}
	if(empty($_POST["tempat"]))
		{
			$error_nomor_peserta = "tempat Lahir tidak boleh kosong";
		}else{
			$tempat = cek_input($_POST["tempat"]);
		}
	if(empty($_POST["tgl_lahir"]))
		{
			$error_tgl_lahir = "Pertanyaan ini tidak boleh kosong";
		}else{
			$tgl_lahir = cek_input($_POST["tgl_lahir"]);
		}
	if(empty($_POST["agama"]))
		{
			$error_agama = "Pertanyaan ini tidak boleh kosong";
		}else{
			$agama = cek_input($_POST["agama"]);
		}
	if(empty($_POST["BK"]))
		{
			$error_BK = "Pertanyaan ini tidak boleh kosong";
		}else{
			$BK = cek_input($_POST["BK"]);
		}
	if(empty($_POST["alamat"]))
		{
			$error_alamat = "alamat jalan tidak boleh kosong";
		}else{
			$alamat = cek_input($_POST["alamat"]);
		}
	if(empty($_POST["RT"]))
		{
			$error_RT = "RT tidak boleh kosong";
		}else{
			$RT = cek_input($_POST["RT"]);
		}
	if(empty($_POST["RW"]))
		{
			$error_RW = "RW tidak boleh kosong";
		}else{
			$RW = cek_input($_POST["RW"]);
		}
	}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;

}
?>
<div class="container">
		<h1 class="text-center">Formulir Peserta Didik</h1>
		<!-- Awal dari Card Form -->
		<div class="card">
			<div class="card-header">
				Data Pribadi
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <div class="form-group">
					<label>Nama Lengkap: </label>
					<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
				</div>

			<div class="form-group">
					<label>Jenis Kelamin: </label>
					<select name ="jk" class="form-control <?php echo ($error_jk !="" ? "is-invalid" : ""); ?>" id="jk">
						<option value="">--- Pilih ---</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
						<span class="warning"><?php echo $error_jk; ?></span>
				</div>

			<div class="form-group">
					<label>NISN: </label>
					<input type="text" name="NISN" class="form-control <?php echo ($error_NISN !="" ? "is-invalid" : ""); ?>" id="NISN" placeholder="NISN" value="<?php echo $NISN; ?>"><span class="warning"><?php echo $error_NISN; ?></span>
				</div>

			<div class="form-group">
					<label>NIK: </label>
					<input type="text" name="NIK" class="form-control <?php echo ($error_NIK !="" ? "is-invalid" : ""); ?>" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>"><span class="warning"><?php echo $error_NIK; ?></span>
				</div>

			<div class="form-group">
					<label>Tempat Lahir: </label>
					<input type="text" name="tempat" class="form-control <?php echo ($error_tempat !="" ? "is-invalid" : ""); ?>" id="tempat" placeholder="Tempat Lahir" value="<?php echo $tempat; ?>"><span class="warning"><?php echo $error_tempat; ?></span>
				</div>

			<div class="form-group">
					<label>Tanggal Lahir: </label>
					<input type="date" name="tgl_lahir" class="form-control <?php echo ($error_tgl_lahir !="" ? "is-invalid" : ""); ?>" id="tgl_lahir" placeholder="yyyy-mm-dd" value="<?php echo $tgl_lahir; ?>"><span class="warning"><?php echo $error_tgl_lahir; ?></span>
				</div>

			<div class="form-group">
					<label>Agama: </label>
						<select name ="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama">
						<option value="">--- Pilih ---</option>
						<option value="Islam">Islam</option>
						<option value="Kristen/Protestan">Kristen/Protestan</option>
						<option value="Katholik">Katholik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Khong Hu Chu">Khong Hu Chu</option>
						<option value="Lainnya">Lainnya</option>
						</select>
					 <span class="warning"><?php echo $error_agama; ?></span>
				</div>

			<div class="form-group">
					<label>Berkebutuhan Khusus: </label>
					<select name ="BK" class="form-control <?php echo ($error_BK !="" ? "is-invalid" : ""); ?>" id="BK">
						<option value="">--- Pilih ---</option>
						<option value="Tidak">Tidak</option>
						<option value="Netra">Netra</option>
						<option value="Rungu">Rungu</option>
						<option value="Grahita ringan">Grahita ringan</option>
						<option value="Grahita Sedang">Grahita Sedang</option>
						<option value="Daksa Ringan">Daksa Ringan</option>
						<option value="Daksa Sedang">Daksa Sedang</option>
						<option value="Laras">Laras</option>
						<option value="Wicara">Wicara</option>
						<option value="Tuna Ganda">Tuna Ganda</option>
						<option value="Hiper aktif">Hiper aktif</option>
						<option value="Cerdas Istimewa">Cerdas Istimewa</option>
						<option value="Bakat Istimewa">Bakat Istimewa</option>
						<option value="Kesulitan Belajar">Kesulitan Belajar</option>
						<option value="Narkoba">Narkoba</option>
						<option value="Indigo">Indigo</option>
						<option value="Down Sindrome">Down Sindrome</option>
						<option value="Autis">Autis</option>
						<option value="Lainnya">Lainnya</option>
						</select> <span class="warning"><?php echo $error_BK; ?></span>
				</div>

			<div class="form-group">
					<label>Alamat Jalan: </label>
					<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
				</div>

			<div class="form-group">
					<label>RT: </label>
					<input type="text" name="RT" class="form-control <?php echo ($error_RT !="" ? "is-invalid" : ""); ?>" id="RT" placeholder="RT" value="<?php echo $RT; ?>"><span class="warning"><?php echo $error_RT; ?></span>
				</div>

			<div class="form-group">
					<label>RW: </label>
					<input type="text" name="RW" class="form-control <?php echo ($error_RW !="" ? "is-invalid" : ""); ?>" id="RW" placeholder="RW" value="<?php echo $RW; ?>"><span class="warning"><?php echo $error_RW; ?></span>
				</div>

			<div class="form-group">
					<label>Nama Dusun: </label>
					<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
				</div>
			
			<div class="form-group">
					<label>Nama Kelurahan/ Desa: </label>
					<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Nama Kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
				</div>
			
			<div class="form-group">
					<label>Kecamatan: </label>
					<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
				</div>
			
			<div class="form-group">
					<label>Kode Pos: </label>
					<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
				</div>

			<div class="form-group">
					<label>Tempat Tinggal: </label>
					<select name ="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal !="" ? "is-invalid" : ""); ?>" id="tempat_tinggal">
						<option value="">--- Pilih ---</option>
						<option value="Bersama orang tua">Bersama orang tua</option>
						<option value="Wali">Wali</option>
						<option value="Kos">Kos</option>
						<option value="Asrama">Asrama</option>
						<option value="Panti Asuhan">Panti Asuhan</option>
						<option value="Lainnya">Lainnya</option>
					</select>
						<span class="warning"><?php echo $error_tempat_tinggal; ?></span>
				</div>

			<div class="form-group">
					<label>Moda Transportasi: </label>
					<select name ="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi">
						<option value="">--- Pilih ---</option>
						<option value="Jalan Kaki">Jalan Kaki</option>
						<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
						<option value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
						<option value="Jemputan Sekolah">Jemputan Sekolah</option>
						<option value="Kereta Api">Kereta Api</option>
						<option value="Ojek">Ojek</option>
						<option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
						<option value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek</option>
						<option value="Lainnya">Lainnya</option>
					</select>
						<span class="warning"><?php echo $error_transportasi; ?></span>
				</div>

				<div class="form-group">
					<label>Nomor HP: </label>
					<input type="text" name="nomor_hp" class="form-control <?php echo ($error_nomor_hp !="" ? "is-invalid" : ""); ?>" id="nomor_hp" placeholder="Nomor HP" value="<?php echo $nomor_hp; ?>"><span class="warning"><?php echo $error_nomor_hp; ?></span>
				</div>

				<div class="form-group">
					<label>Nomor Telepon: </label>
					<input type="text" name="nomor_tlp" class="form-control <?php echo ($error_nomor_tlp !="" ? "is-invalid" : ""); ?>" id="nomor_tlp" placeholder="Nomor Telepon" value="<?php echo $nomor_tlp; ?>"><span class="warning"><?php echo $error_nomor_tlp; ?></span>
				</div>

				<div class="form-group">
					<label>E-mail Pribadi: </label>
					<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
				</div>

				<div class="form-group">
					<label>Penerima KPS/PKH/KIP: </label>
						<select name ="KPS" class="form-control <?php echo ($error_KPS !="" ? "is-invalid" : ""); ?>" id="KPS">
						<option value="">--- Pilih ---</option>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
						</select>
					 <span class="warning"><?php echo $error_KPS; ?></span>
				</div>

				<div class="form-group">
					<label>No. KPS/KKS/PKH/KIP: </label>
					<input type="text" name="nomor_KPS" class="form-control <?php echo ($error_nomor_KPS !="" ? "is-invalid" : ""); ?>" id="nomor_KPS" placeholder="No. KPS/KKS/PKH/KIP" value="<?php echo $nomor_KPS; ?>"><span class="warning"><?php echo $error_nomor_KPS; ?></span>
				</div>

				<div class="form-group">
					<label>Kewarganegaraan: </label>
					<select name ="kewarganegaraan" class="form-control <?php echo ($error_kewarganegaraan !="" ? "is-invalid" : ""); ?>" id="kewarganegaraan">
						<option value="">--- Pilih ---</option>
						<option value="Indonesia (WNI)">Indonesia (WNI)</option>
						<option value="Asing(WNA)">Asing(WNA)</option>
						</select>
					<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
				</div>


			<div class="form-group">
					<button type="submit" class="btn btn-primary" name="btnSimpan">Simpan</button>
				</div>
			</form>
		</div>
	<!-- Akhir dari Card Form -->
	</div>
</div>
<nav aria-label="Page navigation example">
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="tugas_formregistrasi.php">Previous</a></li>
		</ul>
		</nav>
</body>
</html>