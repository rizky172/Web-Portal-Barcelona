<?php
include 'koneksi.php';
$SQL ="SELECT * FROM club WHERE id_club='$_GET[id]'";
$qGambar =mysql_query($SQL);
$row =mysql_fetch_array($qGambar);

if(file_exists("../bootstrap/gambar/$row[gambar_club]")){
unlink("../bootstrap/gambar/$row[gambar_club]");
	}
	$hapusdata=mysql_query("DELETE  FROM profil_club where id_club='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus');
			window.location.href='tampilclub.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus');
		window.location.href='tampilclub.php';</script>";
	} 

?>