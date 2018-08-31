<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$nama		= $_POST['nama'];
	$totalgoal	= $_POST['totalgoal'];
	$karier		= $_POST['karier'];
	$simpan 	= mysql_query("INSERT INTO topgoal SET
							nama    		= '$nama',
							total_goal    	= '$totalgoal',
							karier   		= '$karier' ") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampiltopgoal.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>