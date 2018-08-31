<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$user	= $_POST['user'];
	$pass	=md5 ($_POST['pass']);
	$nama	= $_POST['nama'];
	$level	= $_POST['level'];
	$simpan = mysql_query("INSERT INTO admin SET
							user_admin   = '$user',
							pass_admin   = '$pass',
							nama         = '$nama',
							level   = '$level'") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampiladmin.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>