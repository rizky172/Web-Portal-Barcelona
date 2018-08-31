<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$laga	    = $_POST['laga'];
	$jadwal		= $_POST['jadwal'];
	$home		= $_POST['home'];
	$away		= $_POST['away'];
	$simpan 	= mysql_query("INSERT INTO pertandingan SET
							laga    = '$laga',
							jadwal    = '$jadwal',
							home     = '$home',
							away   = '$away' ") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilpertandingan.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>