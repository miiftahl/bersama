<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM senin3 WHERE id='$id'")or die(mysql_error());
header("location:editsenin.php");
?>