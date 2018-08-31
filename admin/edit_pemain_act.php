<?php
session_start();
include 'koneksi.php';
if (isset($_POST['edit']))
{
	$nama_pemain		= $_POST['nama_pemain'];
	$nama_panggilan	    = $_POST['nama_panggilan'];
	$tanggal_lahir		= $_POST['tanggal_lahir'];
	$umur				= $_POST['umur'];
	$tempat_lahir		= $_POST['tempat_lahir'];
	$negara				= $_POST['negara'];
	$tinggi_badan		= $_POST['tinggi_badan'];
	$berat_badan		= $_POST['berat_badan'];
	$posisi				= $_POST['posisi'];
	$no_punggung		= $_POST['no_punggung'];
	$timnas				= $_POST['timnas'];
	$karier				= $_POST['karier'];
  if(empty($lokasi_file)){
     $edit = mysql_query("UPDATE profil_pemain SET 
     						nama_pemain    		= '$nama_pemain',
							nama_panggilan     	= '$nama_panggilan',
							tanggal_lahir   	= '$tanggal_lahir',
							umur   				= '$umur',
							tempat_lahir   		= '$tempat_lahir',
							negara   			= '$negara',
							tinggi_badan   		= '$tinggi_badan',
							berat_badan   		= '$berat_badan',
							posisi   			= '$posisi',
							nomor_punggung   	= '$no_punggung',
							tim_nasional   		= '$timnas',
							karier		   		= '$karier' where id_pemain='$_GET[id]'") or die(mysql_error());

    if ($edit){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilpemain.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} else {
	$nama_pemain		= $_POST['nama_pemain'];
	$nama_panggilan	    = $_POST['nama_panggilan'];
	$tanggal_lahir		= $_POST['tanggal_lahir'];
	$umur				= $_POST['umur'];
	$tempat_lahir		= $_POST['tempat_lahir'];
	$negara				= $_POST['negara'];
	$tinggi_badan		= $_POST['tinggi_badan'];
	$berat_badan		= $_POST['berat_badan'];
	$posisi				= $_POST['posisi'];
	$no_punggung		= $_POST['no_punggung'];
	$timnas				= $_POST['timnas'];
	$karier				= $_POST['karier'];
	$lokasi_file		=$_FILES['image']['tmp_name'];
    $nama_file			=$_FILES['image']['name'];
	$simpan = mysql_query("UPDATE profil_pemain SET
							nama_pemain    		= '$nama_pemain',
							nama_panggilan     	= '$nama_panggilan',
							tanggal_lahir   	= '$tanggal_lahir',
							umur   				= '$umur',
							tempat_lahir   		= '$tempat_lahir',
							negara   			= '$negara',
							tinggi_badan   		= '$tinggi_badan',
							berat_badan   		= '$berat_badan',
							posisi   			= '$posisi',
							nomor_punggung   	= '$no_punggung',
							tim_nasional   		= '$timnas',
							karier		   		= '$karier',
							gambar_pemain		= '$nama_file'") or die(mysql_error());

    move_uploaded_file($lokasi_file,"../bootstrap/gambar/pemain/$nama_file");

   	if ($simpan){
		echo "<script>
			alert ('Data Berhasil disimpan');
			window.location.href='tampilpemain.php';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
	}
} 
}

?>