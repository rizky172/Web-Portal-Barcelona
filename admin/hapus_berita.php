<?php
include 'koneksi.php';
$SQL ="SELECT * FROM berita WHERE id_berita='$_GET[id]'";
$qGambar =mysql_query($SQL);
$row =mysql_fetch_array($qGambar);

if(file_exists("../bootstrap/gambar/beranda/$row[gambar_berita]")){
unlink("../bootstrap/gambar/beranda/$row[gambar_berita]");
	}
	$hapusdata=mysql_query("DELETE  FROM berita where id_berita='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilberita.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilberita.php';</script>";
	} 

?>