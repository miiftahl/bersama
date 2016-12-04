<html>
	<head>
	<meta http-equiv="Refresh" content="10;url=senin1.php">
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
		<h3>SESI : <span class="blink_text">2</span></h3>
		<br/>
		<table border="1" width='800'>
    		<tr><th>NO</th><th>RUANG</th><th>STATUS</th><th>MATA KULIAH</th><th>DOSEN</th><th>KEHADIRAN</th><th>KETERANGAN</th></tr>
    <?php
    include 'koneksi.php';
    $jadwal = mysqli_query($koneksi, "SELECT * from senin2");
    $no=1;
    foreach ($jadwal as $row){
        echo "<tr>
            <td>".$row['nomer']."</td>
            <td>".$row['ruang']."</td>
            <td>".$row['status']."</td>
            <td>".$row['mata_kuliah']."</td>
            <td>".$row['dosen']."</td>
            <td>".$row['kehadiran']."</td>
            <td>".$row['keterangan']."</td>
              </tr>";
        $no++;
    }
    ?>
</table><br/>
<p align="center"><marquee bgcolor=#00FFFF >Jadwal Jurusan Sistem Informasi Semester Ganjil 2016</marquee></p>
<div id='goingtop'><a href='http://is.its.ac.id/' target='_blank' title='Sistem Informasi ITS'><img alt='blogger-madura' height='100px' src='http://thimbletack.weebly.com/uploads/5/2/5/2/52526063/8396425.jpg' style='left:5px; bottom:5px; position: fixed;' width='100px'/></
</body>
</html>