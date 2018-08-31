<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM setup_slide where id_slide='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilslider.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilslider.php';</script>";
	} 

?>