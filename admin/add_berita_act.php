<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	$judul 		= $_POST['judul'];
	$isi 		= $_POST['isi'];
	$lokasi_file=$_FILES['image']['tmp_name'];
    $nama_file	=$_FILES['image']['name'];

    // echo "$nama_file";
    // die();

	$simpan = mysql_query("INSERT INTO berita SET
							judul_berita	= '$judul',
							isi_berita		= '$isi',
							gambar_berita	= '$nama_file' ") or die(mysql_error());

    move_uploaded_file($lokasi_file,"../bootstrap/gambar/beranda/$nama_file");	

	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilberita.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>