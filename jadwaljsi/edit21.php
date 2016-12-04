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
</head>
<body>
<div class="container" align="left">
    <br>
    	<a href="admin.php"><button type="button" class="btn btn-default">HOME</button></a>
        <a href="senin1.php"><button type="button" class="btn btn-primary">LIHAT JADWAL</button></a>
        <a href="inputjadwal.php"><button type="button" class="btn btn-success">INPUT JADWAL</button></a>
        <a href="editjadwal.php"><button type="button" class="btn btn-success">EDIT JADWAL</button></a>
        <a href="editnotifikasi.php"><button type="button" class="btn btn-success">EDIT NOTIFIKASI</button></a>
        <a href="login/logout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a><br><br>
        
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM selasa1 WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update21.php" method="post">		
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
				<td><input type="text" name="mata_kuliah" value="<?php echo $data['mata_kuliah'] ?>"></td>					
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
      </div>
	
</body>
</html>