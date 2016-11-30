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

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data jadwal</h3>
	<table border="1" class="table">
		<tr>
			<th>id</th>
			<th>ruang</th>
			<th>status</th>
			<th>mata_kuliah</th>
			<th>dosen</th>
			<th>kehadiran</th>
			<th>keterangan</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM jadwal")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['dosen']; ?></td>
			<td><?php echo $data['kehadiran']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>