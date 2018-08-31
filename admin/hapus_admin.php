<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM admin where id_admin='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampiladmin.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilberita.php';</script>";
	} 

?>