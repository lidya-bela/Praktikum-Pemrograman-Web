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
	$simpan = mysqli_query($conn, "INSERT INTO registrasi (tgl_daftar, jenis_pendaftaran, tgl_masuk, NIS, nomor_peserta, PAUD, TK, nomor_SKHUN, nomor_Ijazah, hobi, cita) VALUES ('$_POST[tgl_daftar]','$_POST[jenis_pendaftaran]', '$_POST[tgl_masuk]', '$_POST[NIS]', '$_POST[nomor_peserta]', '$_POST[PAUD]', '$_POST[TK]', '$_POST[nomor_SKHUN]', '$_POST[nomor_Ijazah]', '$_POST[hobi]', '$_POST[cita]')");

//jika berhasil simpan
if ($simpan){
	echo "<script>
	alert('Data berhasil disimpan!');
	document.location='tugas_formregistrasi.php';
	</script>";
}else{
	echo "<script>
	alert('Gagal menyimpan data!');
	document.location='tugas_formregistrasi.php';
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
$error_tgl_daftar = "";
$error_jenis_pendaftaran = "";
$error_tgl_masuk = "";
$error_NIS = "";
$error_nomor_peserta = "";
$error_PAUD = "";
$error_TK = "";
$error_nomor_SKHUN = "";
$error_nomor_Ijazah = "";
$error_hobi = "";
$error_cita = "";

$tgl_daftar = "";
$jenis_pendaftaran = "";
$tgl_masuk = "";
$NIS = "";
$nomor_peserta = "";
$PAUD = "";
$TK = "";
$nomor_SKHUN = "";
$nomor_Ijazah = "";
$hobi = "";
$cita = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["tgl_daftar"]))
	{
		$error_tgl_daftar = "Tanggal Pendaftaran tidak boleh kosong";
	}
	else{
		$tgl_daftar = cek_input($_POST["tgl_daftar"]);
	}
	if(empty($_POST["jenis_pendaftaran"]))
		{
			$error_jenis_pendaftaran = "Jenis Pendaftaran tidak boleh kosong";
		}else{
			$jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
		}
	if(empty($_POST["tgl_masuk "]))
		{
			$error_tgl_masuk  = "Tanggal Masuk tidak boleh kosong";
		}else{
			$tgl_masuk  = cek_input($_POST["tgl_masuk "]);
		}
	if(empty($_POST["NIS"]))
		{
			$error_NIS = "NIS tidak boleh kosong";
		}else{
			$NIS = cek_input($_POST["NIS"]);
		}
	if(empty($_POST["nomor_peserta"]))
		{
			$error_nomor_peserta = "Nomor Peserta tidak boleh kosong";
		}else{
			$nomor_peserta = cek_input($_POST["nomor_peserta"]);
		}
	if(empty($_POST["PAUD"]))
		{
			$error_PAUD = "Pertanyaan ini tidak boleh kosong";
		}else{
			$PAUD = cek_input($_POST["PAUD"]);
		}
	if(empty($_POST["TK"]))
		{
			$error_TK = "Pertanyaan ini tidak boleh kosong";
		}else{
			$PAUD = cek_input($_POST["TK"]);
		}
	if(empty($_POST["nomor_SKHUN"]))
		{
			$error_nomor_SKHUN = "No. Seri SKHUN tidak boleh kosong";
		}else{
			$nomor_SKHUN = cek_input($_POST["nomor_SKHUN"]);
		}
	if(empty($_POST["nomor_Ijazah"]))
		{
			$error_nomor_Ijazah = "No. Seri Ijazah tidak boleh kosong";
		}else{
			$nomor_Ijazah = cek_input($_POST["nomor_Ijazah"]);
		}
	if(empty($_POST["hobi"]))
		{
			$error_hobi = "Hobi tidak boleh kosong";
		}else{
			$hobi = cek_input($_POST["hobi"]);
		}
	if(empty($_POST["cita"]))
		{
			$error_cita = "Cita-cita tidak boleh kosong";
		}else{
			$cita = cek_input($_POST["cita"]);
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
				Registrasi Peserta Didik
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <div class="form-group">
					<label>Tanggal: </label>
					<input type="date" name="tgl_daftar" class="form-control <?php echo ($error_tgl_daftar !="" ? "is-invalid" : ""); ?>" id="tgl_daftar" placeholder="yyyy-mm-dd" value="<?php echo $tgl_daftar; ?>"><span class="warning"><?php echo $error_tgl_daftar; ?></span>
				</div>

			<div class="form-group">
					<label>Jenis Pendaftaran: </label>
					<select name ="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is-invalid" : ""); ?>" id="jenis_pendaftaran">
						<option value="">--- Pilih ---</option>
						<option value="Siswa Baru">Siswa Baru</option>
						<option value="Pindahan">Pindahan</option>
					</select>
						<span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
				</div>

			<div class="form-group">
					<label>Tanggal Masuk Sekolah: </label>
					<input type="date" name="tgl_masuk" class="form-control <?php echo ($error_tgl_masuk !="" ? "is-invalid" : ""); ?>" id="tgl_masuk" placeholder="yyyy-mm-dd" value="<?php echo $tgl_masuk; ?>"><span class="warning"><?php echo $error_tgl_masuk; ?></span>
				</div>

			<div class="form-group">
					<label>NIS: </label>
					<input type="text" name="NIS" class="form-control <?php echo ($error_NIS !="" ? "is-invalid" : ""); ?>" id="NIS" placeholder="NIS" value="<?php echo $NIS; ?>"><span class="warning"><?php echo $error_NIS; ?></span>
				</div>

			<div class="form-group">
					<label>Nomor Peserta Ujian: </label>
					<input type="text" name="nomor_peserta" class="form-control <?php echo ($error_nomor_peserta !="" ? "is-invalid" : ""); ?>" id="nomor_peserta" placeholder="Nomor Peserta Ujian adalah 20 Digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP" value="<?php echo $nomor_peserta; ?>"><span class="warning"><?php echo $error_nomor_peserta; ?></span>
				</div>

			<div class="form-group">
					<label>Apakah pernah PAUD: </label>
						<select name ="PAUD" class="form-control <?php echo ($error_PAUD !="" ? "is-invalid" : ""); ?>" id="PAUD">
						<option value="">--- Pilih ---</option>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
						</select>
					 <span class="warning"><?php echo $error_PAUD; ?></span>
				</div>

			<div class="form-group">
					<label>Apakah pernah TK: </label>
					<select name ="TK" class="form-control <?php echo ($error_TK !="" ? "is-invalid" : ""); ?>" id="TK">
						<option value="">--- Pilih ---</option>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
						</select> <span class="warning"><?php echo $error_TK; ?></span>
				</div>

			<div class="form-group">
					<label>No. Seri SKHUN Sebelumnya: </label>
					<input type="text" name="nomor_SKHUN" class="form-control <?php echo ($error_nomor_SKHUN !="" ? "is-invalid" : ""); ?>" id="nomor_SKHUN" placeholder="Diisi 16 Digit yang tertera di SKHUN SD -diisi Bagi PD Jenjang SMP" value="<?php echo $nomor_SKHUN; ?>"><span class="warning"><?php echo $error_nomor_SKHUN; ?></span>
				</div>

			<div class="form-group">
					<label>No. Seri Ijazah Sebelumnya: </label>
					<input type="text" name="nomor_Ijazah" class="form-control <?php echo ($error_nomor_Ijazah !="" ? "is-invalid" : ""); ?>" id="nomor_Ijazah" placeholder="Diisi 16 Digit yang tertera di Ijazah SD -diisi Bagi PD Jenjang SMP" value="<?php echo $nomor_Ijazah; ?>"><span class="warning"><?php echo $error_nomor_Ijazah; ?></span>
				</div>

			<div class="form-group">
					<label>Hobi: </label>
					<select name ="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : ""); ?>" id="hobi">
						<option value="">--- Pilih ---</option>
						<option value="Olah Raga">Olah Raga</option>
						<option value="Kesenian">Kesenian</option>
						<option value="Membaca">Membaca</option>
						<option value="Menulis">Menulis</option>
						<option value="Travelin">Travelin</option>
						<option value="Lainnya">Lainnya</option>
					</select>
						<span class="warning"><?php echo $error_hobi; ?></span>
				</div>

			<div class="form-group">
					<label>Cita-cita: </label>
					<select name ="cita" class="form-control <?php echo ($error_cita !="" ? "is-invalid" : ""); ?>" id="cita">
						<option value="">--- Pilih ---</option>
						<option value="PNS">PNS</option>
						<option value="TNI/POLRI">TNI/POLRI</option>
						<option value="Guru/Dosen">Guru/Dosen</option>
						<option value="Dokter">Dokter</option>
						<option value="Politikus">Politikus</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
						<option value="Lainnya">Lainnya</option>
					</select>
						<span class="warning"><?php echo $error_cita; ?></span>
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
		<li class="page-item"><a class="page-link" href="tugas_form2.php">Next</a></li>
		</ul>
		</nav>
</body>
</html>