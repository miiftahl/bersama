<?php 
include 'koneksi.php';
$ruang = $_POST['ruang'];
$status = $_POST['status'];
$mata_kuliah = $_POST['mata_kuliah'];
$dosen = $_POST['dosen'];
$kehadiran = $_POST['kehadiran'];
$keterangan = $_POST['keterangan'];
mysql_query("INSERT INTO kamis3 VALUES('','$ruang','$status','$mata_kuliah','$dosen','$kehadiran','$keterangan')");
header("location:input43.php");
?>