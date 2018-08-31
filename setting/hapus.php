<?PHP
	include 'koneksi.php';
	if(isset($_GET['id'])){
		$idkaryawan = $_GET['id'];
		$hapusdata = $koneksi->query("DELETE FROM tbkaryawan WHERE id_karyawan = '".$idkaryawan."'");
		if($hapusdata){
			echo "<script>alert('Data Karyawan Berhasil di Hapus !');
			window.location.href='data.php';</script>";
		}else{
			echo "<script>alert('Data Karyawan Gagal di Hapus !');</script>";
		}
	}else{
		echo "<script>alert<'Anda Belum Memilih Data !');history.go(-1);</script>";
	}
?>