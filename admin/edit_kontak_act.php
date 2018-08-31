<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$hp	    = $_POST['hp'];
	$alamat	= $_POST['alamat'];
	$pesan	= $_POST['pesan'];
	$simpan = mysql_query("UPDATE kontak SET
							nama_kontak    = '$nama',
							email    = '$email',
							hp     = '$hp',
							alamat   = '$alamat',
							pesan      = '$pesan' where id_kontak='$_GET[id]'") or die(mysql_error());

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilkontak.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>