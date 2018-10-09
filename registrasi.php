<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="database.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td> : <input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : <input type="text" name="NIM"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td> : <input type="radio" name="Kelas" value="D3MI-4101">D3MI-4101</input>
					<input type="radio" name="Kelas" value="D3MI-4102">D3MI-4102</input>
					<input type="radio" name="Kelas" value="D3MI-4103">D3MI-4103</input>
					<input type="radio" name="Kelas" value="D3MI-4104">D3MI-4104</input>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : <input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki</input>
					<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan</input>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td> : <input type="checkbox" name="Hobi" value="Berenang">Berenang</input>
					<input type="checkbox" name="Hobi" value="Badminton">Badminton</input>
					<input type="checkbox" name="Hobi" value="Basket">Basket</input>
					<input type="checkbox" name="Hobi" value="Menggambar">Menggambar</input>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td> : <select name="Fakultas">
					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
					<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
					<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
					<option value="Fakultas Elektro">Fakultas Elektro</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="textarea" name="Alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>