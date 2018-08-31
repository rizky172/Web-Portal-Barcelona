<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$judul 		= $_POST['judul'];
	$isi 		= $_POST['isi'];
	$lokasi_file=$_FILES['image']['tmp_name'];

  if(empty($lokasi_file)){

     $edit = mysql_query("UPDATE berita SET 
							judul_berita	= '$judul',
							isi_berita         ='$isi' where id_berita='$_GET[id]'") or die(mysql_error());

    if ($edit){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilberita.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} else {
	$judul 		= $_POST['judul'];
	$isi 		= $_POST['isi'];
	$lokasi_file=$_FILES['image']['tmp_name'];
	$nama_file=$_FILES['image']['name'];
	move_uploaded_file($lokasi_file,"../bootstrap/gambar/beranda/$nama_file");
	$query=mysql_query("UPDATE berita SET 
							judul_berita	= '$judul',
							isi_berita		= '$isi',
							gambar_berita			= '$nama_file' where id_berita='$_GET[id]' ") or die(mysql_error());


if ($query){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilberita.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}

}

}

?>