<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM kamis1 WHERE id='$id'")or die(mysql_error());
header("location:editkamis.php");
?>