<?PHP
	include 'koneksi.php';
	if(isset($_GET['id'])){
		$id_karyawan = $_GET['id'];
		$query = $koneksi->query("SELECT * FROM tbkaryawan WHERE id_karyawan = '".$id_karyawan."'");
		$data = $query->fetch_object();
	}else{
		echo "<script>alert('Anda Belum Memilih Data !');history.go(-1);</script>";
	}
?>

<form action="" method="POST">
	<table align="center" border="0">
		<tbody>
			<tr>
				<td>ID Karyawan</td>
				<td>
					<input type="text" value="<?PHP echo $data->id_karyawan ?>" name="idkaryawan" placeholder="Masukan ID Karyawan" readonly required>
				</td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>
					<input type="text" name="nip" value="<?PHP echo $data->nip ?>" placeholder="Masukan NIP" required>
				</td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>
					<input type="text" name="namalengkap" value="<?PHP echo $data->namalengkap ?>"  placeholder="Masukan Nama Lengkap"  required>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<a href="data.php"><input type="button" name="batal" value="Batal"></a>
					<input type="submit" name="rubah" value="Rubah">
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?PHP
	if(isset($_POST['rubah']))
	{
		$id_karyawan = $_POST['idkaryawan'];
		$nip = $_POST['nip'];
		$namalengkap = $_POST['namalengkap'];

		$rubahdata = $koneksi->query("UPDATE tbkaryawan SET id_karyawan = '".$id_karyawan."',nip = '".$nip."',namalengkap = '".$namalengkap."' WHERE id_karyawan = '".$_GET['id']."'");
		if($rubahdata){
			echo "<script>alert('Data Karyawan Berhasil di rubah !');window.location.href='data.php';</script>";
		}else{
			echo "<script>alert('Data Karyawan Gagal di Rubah !');</script>";
		}
	}
?>