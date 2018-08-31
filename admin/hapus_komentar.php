<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM komentar where id_komentar='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilkomentar.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilkomentar.php';</script>";
	} 

?>