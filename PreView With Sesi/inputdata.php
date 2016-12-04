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
<table class=table> 
<caption>Optional table caption.</caption> 
<thead> <tr> <th>Sesi</th> <th>Senin</th> <th>Selasa</th> <th>Rabu</th> <th>Kamis</th> <th>Jumat</th> </tr> </thead> 
<tbody> 
<tr> <th scope=row>1</th> <td><a href="input/senin1.php">07.00-09.30</a></td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope=row>2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope=row>3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr>
 </tbody> 
</table>
  </body>
</html>
