<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM topplayer where id_player='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampiltopplayer.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampiltopplayer.php';</script>";
	} 

?>