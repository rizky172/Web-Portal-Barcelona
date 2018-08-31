<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$judul 		= $_POST['nama_promo'];
	$konten 	= $_POST['konten'];
	$lokasi_file=$_FILES['image']['tmp_name'];

  if(empty($lokasi_file)){

     $edit = mysql_query("UPDATE setup_slide  SET 
						   	judul = '$judul',
							konten			= '$konten' where id_slide='$_GET[id]'") or die(mysql_error());

    if ($edit){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilslider.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} else {

	$judul 		= $_POST['nama_promo'];
	$konten 	= $_POST['konten'];
	$lokasi_file=$_FILES['image']['tmp_name'];
	$nama_file=$_FILES['image']['name'];
	move_uploaded_file($lokasi_file,"../img/$nama_file");
	$query=mysql_query("UPDATE setup_slide SET 
						   	judul           = '$judul',
							konten			= '$konten',
							gambar			= '$nama_file' where  id_slide='$_GET[id]'") or die(mysql_error());


if ($query){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilslider.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}

}

} 


?>