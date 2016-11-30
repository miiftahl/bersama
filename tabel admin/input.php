<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Halaman Admin</h1>
	</div>
	
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>ruang</td>
				<td><input type="text" name="ruang"></td>					
			</tr>	
			<tr>
				<td>status</td>
				<td><input type="text" name="status"></td>					
			</tr>	
			<tr>
				<td>mata_kuliah</td>
				<td><input type="text" name="mata_kuliah"></td>					
			</tr>
			<tr>
				<td>dosen</td>
				<td><input type="text" name="dosen"></td>					
			</tr>
			<tr>
				<td>kehadiran</td>
				<td><input type="text" name="kehadiran"></td>					
			</tr>	
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>