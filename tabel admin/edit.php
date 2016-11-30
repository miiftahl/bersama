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
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM jadwal WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>ruang</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="ruang" value="<?php echo $data['ruang'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>status</td>
				<td><input type="text" name="status" value="<?php echo $data['status'] ?>"></td>					
			</tr>	
			<tr>
				<td>mata_kuliah</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['mata_kuliah'] ?>"></td>					
			</tr>
			<tr>
				<td>dosen</td>
				<td><input type="text" name="dosen" value="<?php echo $data['dosen'] ?>"></td>					
			</tr>
			<tr>
				<td>kehadiran</td>
				<td><input type="text" name="kehadiran" value="<?php echo $data['kehadiran'] ?>"></td>					
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>