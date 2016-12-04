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
<div class="container" align="left">
    <br>
    	<a href="admin.php"><button type="button" class="btn btn-default">HOME</button></a>
        <a href="senin1.php"><button type="button" class="btn btn-primary">LIHAT JADWAL</button></a>
        <a href="inputjadwal.php"><button type="button" class="btn btn-success">INPUT JADWAL</button></a>
        <a href="editjadwal.php"><button type="button" class="btn btn-success">EDIT JADWAL</button></a>
        <a href="editnotifikasi.php"><button type="button" class="btn btn-success">EDIT NOTIFIKASI</button></a>
        <a href="login/logout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a><br><br>

	<h3>Input Data Baru</h3>
	<form action="entry43.php" method="post" class="form-horizontal">		
		<table>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="ruang">Ruang</label></td>
				<td><div class="col-sm-8"><input type="text" name="ruang" class="form-control"></div></td>					
			</tr>
			</div>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="status">Status</label></td>
				<td><div class="col-sm-8"><input type="text" name="status" class="form-control"></div></td>					
			</tr>	
			</div>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="mata_kuliah">MK</label></td>
				<td><div class="col-sm-8"><input type="text" name="mata_kuliah" class="form-control"></div></td>					
			</tr>
			</div>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="dosen">Dosen</label></td>
				<td><div class="col-sm-8"><input type="text" name="dosen" class="form-control"></div></td>					
			</tr>
			</div>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="kehadiran">Kehadiran</label></td>
				<td><div class="col-sm-8"><input type="text" name="kehadiran" class="form-control"></div></td>					
			</tr>	
			</div>
			<div class="form-group">
			<tr>
				<td><label class="control-label col-sm-2" for="keterangan">Keterangan</label></td>
				<td><div class="col-sm-8"><input type="text" name="keterangan" class="form-control"></div></td>					
			</tr>
			</div>
			<div class="form-group"> 
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-default"><input type="submit" value="Save"></button></td>					
			</tr>	
			</div>			
		</table>
	</form>
      </div>
</body>
</html>