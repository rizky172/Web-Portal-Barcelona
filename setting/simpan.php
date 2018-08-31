<form action="" method="POST">
		<table align="center" border="0">
			<tbody>
				<tr>
					<td>Id Karyawan</td>
					<td>
						<input type="text" name="idkaryawan" value="" placeholder="Masukan IDKaryawan" required="">
					</td>
				</tr>
				<tr>
					<td>Nip</td>
					<td>
						<input type="text" name="nip" value="" placeholder="Masukan Nip" required="">
					</td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>
						<input type="text" name="namalengkap" value="" placeholder="Masukan Nama Lengkap" required="">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="reset" name="reset" value="Reset">
						<input type="submit" name="simpan" value="Simpan">
					</td>
				</tr>
			</tbody>
		</table>
</form>
	<?PHP
		include 'koneksi.php';
		if(isset($_POST['simpan']))
		{
			$idkaryawan = $_POST['idkaryawan'];
			$nip = $_POST['nip'];
			$namalengkap = $_POST['namalengkap'];
			
			$simpan = $koneksi->query("INSERT INTO tbkaryawan (id_karyawan,nip,namalengkap) VALUES ('".$idkaryawan."','".$nip."','".$namalengkap."')");
			if($simpan){
				echo "<script>
				alert('Data Karyawan Berhasil Di Simpan !');
				window.location.href='data.php';</script>";
			}else{
				echo "<script> alert('Data Bengkel Gagal di Simpan !');</script>";
			}
		}
	?>