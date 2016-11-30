<html>
	<head>
		<title> Jadwal Jurusan Sistem Informasi </title>
	</head>
		<body>
		<p align="center"><marquee bgcolor=#00FFFF >Jadwal Jurusan Sistem Informasi Semester Ganjil 2016</marquee></p>

			<?php
			//membuat koneksi ke database
			  $host = 'localhost';
			  $user = 'root';      
			  $password = '';      
			  $database = 'db_jadwal';  
	    
			  $konek_db = mysqli_connect($host, $user);

			  $find_db = mysqli_select_db($konek_db, $database) ;
			?>

			<center> 
			MENAMPILKAN JADWAL JURUSAN SISTEM INFORMASI 
			<br>
			<br>

	<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

			<table  border='1' Width='800'>  
			<tr>
			    <th> nomor </th>
			    <th> ruang </th>
			    <th> status </th>
			    <th> mata_kuliah </th>
			    <th> dosen </th>
			    <th> kehadiran </th>
			    <th> keterangan </th>
			</tr>

			<?php  
			// Perintah untuk menampilkan data
			$queri="SELECT * FROM jadwal" ;  //menampikan SEMUA data dari tabel jadwal

			$hasil=MySQLI_query ($konek_db, $queri);    //fungsi untuk SQL

			// perintah untuk membaca dan mengambil data dalam bentuk array
			while ($data = mysqli_fetch_array ($hasil)){
			$id = $data['nomer'];
			 echo "    
			        <tr>
			        <td>".$data['nomer']."</td>
			        <td>".$data['ruang']."</td>
			        <td>".$data['status']."</td>
			        <td>".$data['mata_kuliah']."</td>
			        <td>".$data['dosen']."</td>
			        <td>".$data['kehadiran']."</td>
			        <td>".$data['keterangan']."</td>
			        </tr> 
			        ";
			        
			}

			?>

			</table>

</center>
		</body>
</html>
