<?php 
include 'koneksi.php';
$id = $_POST['id'];
$ruang = $_POST['ruang'];
$status = $_POST['status'];
$mata_kuliah = $_POST['mata_kuliah'];
$dosen = $_POST['dosen'];
$kehadiran = $_POST['kehadiran'];
$keterangan = $_POST['keterangan'];
mysql_query("UPDATE jumat4 SET ruang='$ruang', status='$status', mata_kuliah='$mata_kuliah', dosen='$dosen', kehadiran='$kehadiran', keterangan='$keterangan' WHERE id='$id'");
header("location:editjumat.php");
?>