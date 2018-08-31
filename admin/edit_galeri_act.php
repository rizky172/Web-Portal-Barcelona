<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	
	$judul 		= $_POST['judul'];
	$konten 	= $_POST['isi'];
	$lokasi_file=$_FILES['image']['tmp_name'];

  if(empty($lokasi_file)){

     $edit = mysql_query("UPDATE galeri SET 
						   	judul_galeri            = '$judul',
							isi_galeri				= '$konten' where id_galeri='$_GET[id]'") or die(mysql_error());

    if ($edit){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilgaleri.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} else {
    $judul 		= $_POST['judul'];
	$konten 	= $_POST['isi'];
	$lokasi_file=$_FILES['image']['tmp_name'];
	$nama_file=$_FILES['image']['name'];
	move_uploaded_file($lokasi_file,"../bootstrap/gambar/galery/$nama_file");
	$query=mysql_query("UPDATE galeri SET 
						   	judul_galeri          = '$judul',
							isi_galeri			= '$konten',
							gambar_galeri			= '$nama_file' where id='$_GET[id]' ") or die(mysql_error());


if ($query){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilgaleri.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}

}

}

?>