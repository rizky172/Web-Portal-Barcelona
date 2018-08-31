<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM kontak where id_kontak='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilkontak.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilkontak.php';</script>";
	} 

?>