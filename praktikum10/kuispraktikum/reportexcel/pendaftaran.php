<?php
include('koneksi_pendaftaran.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Berkebutuhan Khusus');
$sheet->setCellValue('J1', 'Alamat');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Dusun');
$sheet->setCellValue('N1', 'Kelurahan');
$sheet->setCellValue('O1', 'Kecamatan');
$sheet->setCellValue('P1', 'Kode Pos');
$sheet->setCellValue('Q1', 'Tempat Tinggal');
$sheet->setCellValue('R1', 'Transportasi');
$sheet->setCellValue('S1', 'Nomor Hp');
$sheet->setCellValue('T1', 'Nomor Telepon');
$sheet->setCellValue('U1', 'Email');
$sheet->setCellValue('V1', 'KPS');
$sheet->setCellValue('W1', 'Nomor KPS');
$sheet->setCellValue('X1', 'Kewarganegaraan');
$query = mysqli_query($conn, "select*from dp");
$i=2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A' .$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jk']);
	$sheet->setCellValue('D'.$i, $row['NISN']);
	$sheet->setCellValue('E'.$i, $row['NIK']);
	$sheet->setCellValue('F'.$i, $row['tempat']);
	$sheet->setCellValue('G'.$i, $row['tgl_lahir']);
	$sheet->setCellValue('H'.$i, $row['agama']);
	$sheet->setCellValue('I'.$i, $row['BK']);
	$sheet->setCellValue('J'.$i, $row['alamat']);
	$sheet->setCellValue('K'.$i, $row['RT']);
	$sheet->setCellValue('L'.$i, $row['RW']);
	$sheet->setCellValue('M'.$i, $row['dusun']);
	$sheet->setCellValue('N'.$i, $row['kelurahan']);
	$sheet->setCellValue('O'.$i, $row['kecamatan']);
	$sheet->setCellValue('P'.$i, $row['kode_pos']);
	$sheet->setCellValue('Q'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('R'.$i, $row['transportasi']);
	$sheet->setCellValue('S'.$i, $row['nomor_hp']);
	$sheet->setCellValue('T'.$i, $row['nomor_tlp']);
	$sheet->setCellValue('U'.$i, $row['email']);
	$sheet->setCellValue('V'.$i, $row['KPS']);
	$sheet->setCellValue('W'.$i, $row['nomor_KPS']);
	$sheet->setCellValue('X'.$i, $row['kewarganegaraan']);
	$i++;
}
$styleArray = [
'borders' => [
'allBorders' => [
'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
],
],
];
$i = $i - 1;
$sheet->getStyle('A1:X' .$i)->applyFromArray($styleArray);
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftaran Siswa Baru.xlsx');
?>