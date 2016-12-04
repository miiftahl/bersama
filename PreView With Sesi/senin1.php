<html>
	<head>
	<meta http-equiv="Refresh" content="10;url=senin2.php">
		<title>JADWAL SI</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
.blink_text {

animation:1s blinker linear infinite;
-webkit-animation:1s blinker linear infinite;
-moz-animation:1s blinker linear infinite;

 color: red;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 </style>
	</head>
	<body>
		<h2>INFORMASI PERKULIAHAN</h2>
		Hari : 
		<a href="senin1.php"><button type="button" class="btn btn-success">Senin</button></a>
		<a href="selasa1.php"><button type="button" class="btn btn-default">Selasa</button></a>
		<a href="rabu1.php"><button type="button" class="btn btn-default">Rabu</button></a>
		<a href="kamis1.php"><button type="button" class="btn btn-default">Kamis</button></a>
		<a href="jumat1.php"><button type="button" class="btn btn-default">Jumat</button></a>
		<br/>
		<h3>SESI : <span class="blink_text">1</span></h3>
		<br/>
		<table border="1" width='800'>
    		<tr><th>NO</th><th>RUANG</th><th>STATUS</th><th>MATA KULIAH</th><th>DOSEN</th><th>KEHADIRAN</th><th>KETERANGAN</th></tr>

   <?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM senin1")or die(mysql_error());
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
</table><br/>
<p align="center"><marquee bgcolor=#00FFFF >Jadwal Jurusan Sistem Informasi Semester Ganjil 2016</marquee></p>
<div id='goingtop'><a href='http://is.its.ac.id/' target='_blank' title='Sistem Informasi ITS'><img alt='blogger-madura' height='100px' src='http://thimbletack.weebly.com/uploads/5/2/5/2/52526063/8396425.jpg' style='left:5px; bottom:5px; position: fixed;' width='100px'/>
</body>
</html>