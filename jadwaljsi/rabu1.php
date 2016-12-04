<!DOCTYPE html>
<html>
<head>
	<title>Jadwal SI</title>
	<meta http-equiv="Refresh" content="60;url=rabu2.php">
	<link href="css/khansa.css" rel="stylesheet" media="screen">
	<link rel="icon" href="https://pbs.twimg.com/profile_images/524118748303618048/f_WgXs0N_400x400.jpeg" type="image/x-icon" />
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
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
 
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #32C0AF;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #32C0AF;
}
</style>
</head>
<body>

<div class="container-fluid">
<ul>
		<div align="left">
		<h2><strong><font color="white">.::INFORMASI PERKULIAHAN::.</font></strong></h2>
		</div>
	</ul><br>
	<a href="senin1.php"><button type="button" class="btn btn-default">SENIN</button></a>
	<a href="selasa1.php"><button type="button" class="btn btn-default">SELASA</button></a>
	<a href="rabu1.php"><button type="button" class="btn btn-info">RABU</button></a>
	<a href="kamis1.php"><button type="button" class="btn btn-default">KAMIS</button></a>
	<a href="jumat1.php"><button type="button" class="btn btn-default">JUMAT</button></a>
	<div class="row">
		<div class="col-md-8"><br>
		<div class=table-responsive><br>
	<table border="1" class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>RUANG</th>
			<th>STATUS</th>
			<th>MATA KULIAH</th>
			<th>DOSEN</th>
			<th>KEHADIRAN</th>
			<th>KETERANGAN</th>		
		</tr>
		</thead>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM rabu1")or die(mysql_error());
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
		</tr>
		<?php } ?>
	</table><br><center><iframe src="jam.php"></center></iframe></div>
		</div>
		<div class="col-md-4"><br>
		<h2>SESI : <span class="blink_text"><font color="red"><strong>1</strong></font></span></h2>		
		<iframe width="420" height="500" src="notif.php"></iframe>
		</div>
	</div>
<p align="center"><marquee bgcolor="#32C0AF" style='left:5px; bottom:5px; position: fixed;'>Jadwal Jurusan Sistem Informasi Semester Ganjil 2016</marquee></p>
<div id='goingtop'><a href='http://is.its.ac.id/' target='_blank' title='Sistem Informasi ITS'><img alt='blogger-madura' height='100px' src='http://thimbletack.weebly.com/uploads/5/2/5/2/52526063/8396425.jpg' style='left:5px; bottom:5px; position: fixed;' width='100px'/></div>
</div>
</body>
</html>