<!DOCTYPE html>
<html>
<head>
	<title>Form Data Pegawai</title>
</head>
<body>
	<center><h2> Form Data Pegawai</h2> </center> 
	<br> </br>
	<form method="POST" action="soal3_simpan.php">
		<table width="300" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="100">ID:</td>
				<td><input type="text" name="ID_DP"></td>
			</tr>
			<tr>
				<td width="100">Nama:</td>
				<td><input type="text" name="nama_pegawai"></td>
			</tr>
			<tr>
				<td width="100">Jenis Kelamin:</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td width="100">Jabatan:</td>
				<td><input type="text" name="JABATAN"></td>
			</tr>
			<tr>
				<td width="100">Alamat:</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td width="100">Gaji:</td>
				<td><input type="text" name="Gaji"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<br>
					<input type="submit" name="btnSubmit" value="Submit">
					<input type="reset" name="reset" value="Reset"></br>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>