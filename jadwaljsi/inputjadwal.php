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
        <h3><strong>INPUT JADWAL</strong></h3>
      <table class="table table-bordered">
      	<thead>
      		<tr>
      			<th><center>SESI</center></th>
      			<th><center>SENIN</center></th>
      			<th><center>SELASA</center></th>
      			<th><center>RABU</center></th>
      			<th><center>KAMIS</center></th>
      			<th><center>JUMAT</center></th>
      		</tr> 
      	</thead> 
      	<tbody>
      		<tr>
      			<th scope=row><center>1</center></th>
      			<td><center><a href="input11.php">07.00 - 09.30</a></center></td>
      			<td><center><a href="input21.php">07.00 - 09.30</a></center></td>
      			<td><center><a href="input31.php">07.00 - 09.30</a></center></td>
      			<td><center><a href="input41.php">07.00 - 09.30</a></center></td>
      			<td><center><a href="input51.php">07.00 - 09.30</a></center></td> 
      		</tr>
      		<tr>
      			<th scope=row><center>2</center></th>
      			<td><center><a href="input12.php">09.45 - 12.15</a></center></td>
      			<td><center><a href="input22.php">09.45 - 12.15</a></center></td>
      			<td><center><a href="input32.php">09.45 - 12.15</a></center></td>
      			<td><center><a href="input42.php">09.45 - 12.15</a></center></td>
      			<td><center><a href="input52.php">09.45 - 12.15</a></center></td>
      		</tr> 
      		<tr>
      			<th scope=row><center>3</center></th>
      			<td><center><a href="input13.php">12.45 - 15.15</a></center></td> 
      			<td><center><a href="input23.php">12.45 - 15.15</a></center></td> 
      			<td><center><a href="input33.php">12.45 - 15.15</a></center></td> 
      			<td><center><a href="input43.php">12.45 - 15.15</a></center></td> 
      			<td><center><a href="input53.php">12.45 - 15.15</a></center></td> 
      		</tr>
      		<tr>
      			<th scope=row><center>4</center></th>
      			<td><center><a href="input14.php">15.30 - 18.00</a></center></td>
      			<td><center><a href="input24.php">15.30 - 18.00</a></center></td> 
      			<td><center><a href="input34.php">15.30 - 18.00</a></center></td> 
      			<td><center><a href="input44.php">15.30 - 18.00</a></center></td> 
      			<td><center><a href="input54.php">15.30 - 18.00</a></center></td> 
      		</tr>
      	</tbody>
      </table>
      </div>
  </body>
</html>
