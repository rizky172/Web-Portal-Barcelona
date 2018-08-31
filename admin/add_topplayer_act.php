<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$nama		= $_POST['nama'];
	$posisi		= $_POST['posisi'];
	$negara		= $_POST['negara'];
	$simpan 	= mysql_query("INSERT INTO topplayer SET
							nama    		= '$nama',
							posisi    		= '$posisi',
							negara   		= '$negara' ") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampiltopplayer.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>