<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM selasa1 WHERE id='$id'")or die(mysql_error());
header("location:editselasa.php");
?>