<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$nama_club			= $_POST['nama_club'];
	$julukan_club	    = $_POST['julukan_club'];
	$tentang_club		= $_POST['tentang_club'];
	$tanggal_berdiri	= $_POST['tanggal_berdiri'];
	$tempat_club		= $_POST['tempat_club'];
	$pendiri_club		= $_POST['pendiri_club'];
	$lagu_club			= $_POST['lagu_club'];
	$rival				= $_POST['rival'];
	$sejarah_rival		= $_POST['sejarah_rival'];
	$juara				= $_POST['juara'];
	$lokasi_file=$_FILES['image']['tmp_name'];
    $nama_file	=$_FILES['image']['name'];
	$simpan = mysql_query("INSERT INTO profil_club SET
							nama_club    		= '$nama_club',
							julukan_club     	= '$julukan_club',
							tentang_club	   	= '$tentang_club',
							tanggal_berdiri   	= '$tanggal_berdiri',
							tempat_club   		= '$tempat_club',
							pendiri_club   		= '$pendiri_club',
							lagu_club   		= '$lagu_club',
							rival   			= '$rival',
							sejarah_rival   	= '$sejarah_rival',
							juara   			= '$juara',
							gambar_club		= '$nama_file'") or die(mysql_error());

    move_uploaded_file($lokasi_file,"../bootstrap/gambar/$nama_file");

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilclub.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>