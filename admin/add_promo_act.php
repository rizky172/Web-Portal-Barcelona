<?php
session_start();
include 'koneksi.php';
if (isset($_POST['simpan']))
{
	
	$judull 		= $_POST['judul'];
	$lokasi_file=$_FILES['image']['tmp_name'];
    $nama_file	=$_FILES['image']['name'];

    

	$simpan = mysql_query("INSERT INTO gambar_slide SET
							judul_slide 		= '$judull',
							gambar_slide			= '$nama_file'
							") or die(mysql_error());

    move_uploaded_file($lokasi_file,"../bootstrap/gambar/$nama_file");	

	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilslider.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 

?>