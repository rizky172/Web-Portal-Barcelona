<?php
include 'koneksi.php';
$SQL ="SELECT * FROM profil_pemain WHERE id_pemain='$_GET[id]'";
$qGambar =mysql_query($SQL);
$row =mysql_fetch_array($qGambar);

if(file_exists("../bootstrap/gambar/pemain/$row[gambar_pemain]")){
unlink("../bootstrap/gambar/pemain/$row[gambar_pemain]");
	}
	$hapusdata=mysql_query("DELETE  FROM profil_pemain where id_pemain='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilpemain.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilpemain.php';</script>";
	} 

?>