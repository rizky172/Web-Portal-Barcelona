<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM pertandingan where id_pertandingan='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilpertandingan.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilpertandingan.php';</script>";
	} 

?>