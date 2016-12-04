<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<a href="lihatjadwal.php" class="btn btn-primary">Lihat Jadwal</a>
  	<a href="inputdata.php" class="btn btn-success">Input Data</a>
  	<a href="editdata.php" class="btn btn-success">Edit Data</a>
  	<a href="editnotifikasi.php" class="btn btn-success">Edit Notifikasi</a>
        <a href="login/logout.php" class="btn btn-danger">Logout</a>
	<h3><p align="left">Tambah Data</p></h3>
<form action="entry.php" method="post">		
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
