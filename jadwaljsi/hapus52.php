<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM jumat2 WHERE id='$id'")or die(mysql_error());
header("location:editjumat.php");
?>