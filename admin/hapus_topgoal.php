<?php
include 'koneksi.php';

	$hapusdata=mysql_query("DELETE  FROM topgoal where id_goal='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampiltopgoal.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampiltopgoal.php';</script>";
	} 

?>