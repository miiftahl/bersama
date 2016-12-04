<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/main.css" rel="stylesheet" media="screen">
	<link href="css/styles.css" rel="stylesheet" media="screen">
	<link rel="icon" href="https://pbs.twimg.com/profile_images/524118748303618048/f_WgXs0N_400x400.jpeg" type="image/x-icon" />
</head>
<body>
<div class="container" align="left"><br>
    	<a href="admin.php"><button type="button" class="btn btn-default">HOME</button></a>
        <a href="senin1.php"><button type="button" class="btn btn-primary">LIHAT JADWAL</button></a>
        <a href="inputjadwal.php"><button type="button" class="btn btn-success">INPUT JADWAL</button></a>
        <a href="editjadwal.php"><button type="button" class="btn btn-success">EDIT JADWAL</button></a>
        <a href="editnotifikasi.php"><button type="button" class="btn btn-success">EDIT NOTIFIKASI</button></a>
        <a href="login/logout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a>
      
      </div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8"><br>
		<h3>SESI 1</h3>
	<table border="1" class="table table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>ruang</th>
			<th>status</th>
			<th>mata_kuliah</th>
			<th>dosen</th>
			<th>kehadiran</th>
			<th>keterangan</th>
			<th>Opsi</th>		
		</tr></thead>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM kamis1")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tbody>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['dosen']; ?></td>
			<td><?php echo $data['kehadiran']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td>
				<a href="edit11.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus11.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr></tbody>
		<?php } ?>
	</table>
	<h3>SESI 2</h3>
	<table border="1" class="table table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>ruang</th>
			<th>status</th>
			<th>mata_kuliah</th>
			<th>dosen</th>
			<th>kehadiran</th>
			<th>keterangan</th>
			<th>Opsi</th>		
		</tr></thead>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM kamis2")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tbody>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['dosen']; ?></td>
			<td><?php echo $data['kehadiran']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td>
				<a href="edit12.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus12.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr></tbody>
		<?php } ?>
	</table>
	<h3>SESI 3</h3>
	<table border="1" class="table table-bordered">
		<thead>
		<tr>
			<th>id</th>
			<th>ruang</th>
			<th>status</th>
			<th>mata_kuliah</th>
			<th>dosen</th>
			<th>kehadiran</th>
			<th>keterangan</th>
			<th>Opsi</th>		
		</tr></thead>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM kamis3")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tbody>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['dosen']; ?></td>
			<td><?php echo $data['kehadiran']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td>
				<a href="edit13.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus13.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr></tbody>
		<?php } ?>
	</table>
	<h3>SESI 4</h3>
	<table border="1" class="table table-bordered">
		<thead>
		<tr>
			<th>id</th>
			<th>ruang</th>
			<th>status</th>
			<th>mata_kuliah</th>
			<th>dosen</th>
			<th>kehadiran</th>
			<th>keterangan</th>
			<th>Opsi</th>		
		</tr></thead>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM kamis4")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tbody>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['dosen']; ?></td>
			<td><?php echo $data['kehadiran']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td>
				<a href="edit14.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus14.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr></tbody>
		<?php } ?>
	</table></div></div></div>
</body>
</html>