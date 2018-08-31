<?php
include 'koneksi.php';
$SQL ="SELECT * FROM galeri WHERE id_galeri='$_GET[id]'";
$qGambar =mysql_query($SQL);
$row =mysql_fetch_array($qGambar);

if(file_exists("../bootstrap/gambar/galery/$row[gambar_galeri]")){
unlink("../bootstrap/gambar/galery/$row[gambar_galeri]");
	}

	$hapusdata=mysql_query("DELETE FROM galeri where id_galeri='$_GET[id]'");
	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilgaleri.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilgaleri.php';</script>";
	} 
?>
