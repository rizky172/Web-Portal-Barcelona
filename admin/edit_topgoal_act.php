<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$nama		= $_POST['nama'];
	$totalgoal	= $_POST['totalgoal'];
	$karier		= $_POST['karier'];
	$simpan = mysql_query("UPDATE topgoal SET
							nama    		= '$nama',
							total_goal    	= '$totalgoal',
							karier		    = '$karier' where id_goal='$_GET[id]'") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampiltopgoal.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>