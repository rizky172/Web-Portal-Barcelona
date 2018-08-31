<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$laga	    = $_POST['laga'];
	$jadwal		= $_POST['jadwal'];
	$home		= $_POST['home'];
	$away		= $_POST['away'];
	$simpan = mysql_query("UPDATE pertandingan SET
							laga    = '$laga',
							jadwal    = '$jadwal',
							home     = '$home',
							away      = '$away' where id_pertandingan='$_GET[id]'") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilpertandingan.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>