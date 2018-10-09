<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$Nama = $_POST['Nama'];
	$NIM = $_POST['NIM'];
	$Kelas = $_POST['Kelas'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Hobi = $_POST['Hobi'];
	$Fakultas = $_POST['Fakultas'];
	$Alamat = $_POST['Alamat'];

	$sql = "INSERT INTO data (Nama,NIM,Kelas,JenisKelamin,Hobi,Fakultas,Komentar) values ('$Nama','$NIM',
	'$Kelas','$JenisKelamin','$Hobi','$Fakultas','$Alamat')";
	if (mysqli_connect($connect, $sql)) {
		echo "Database sudah masuk";
	}else{
		echo "error";
	}
}
?>