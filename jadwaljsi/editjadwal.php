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
      <h3><strong>EDIT JADWAL</strong></h3>
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
      			<td><center><a href="editsenin.php">CLICK</a></center></td>
      			<td><center><a href="editselasa.php">CLICK</a></center></td>
      			<td><center><a href="editrabu.php">CLICK</a></center></td>
      			<td><center><a href="editkamis.php">CLICK</a></center></td>
      			<td><center><a href="editjumat.php">CLICK</a></center></td> 
      		</tr>
      	</tbody>
      </table>
      </div>
  </body>
</html>
