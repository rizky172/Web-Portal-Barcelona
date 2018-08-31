<?PHP
	if (isset($_POST['simpan'])) {
  	$judul       = $_POST['judul'];
  	$konten     = $_POST['isi'];
    $nama_photo    = $_FILES['gambar']['name'];
    $type = $_FILES['gambar']['type'];
    $ukuran = $_FILES['gambar']['size'];
    
    if ($type != "image/gif" && $type != "image/jpg" && $type != "image/jpeg" ) {
      echo "<script>alert('format harus jpg/jpeg/gif');</script>";
    }else if($ukuran>10000000){
      echo "<script>alert('Gambar maximal 10 MB');</script>";
    }else{
    $uploadir = '../bootstrap/gambar/galery/';
    $rnd = date("YmdHis");
    $nama_file_upload=$rnd.'-'.$nama_photo;
    $alamatfile=$uploadir.$nama_file_upload;
    
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $alamatfile)) {
       $sql = mysql_query("INSERT INTO galeri SET
                            judul_galeri    	= '$judul',
                            isi_galeri          = '$konten', 
                            gambar_galeri       = '$nama_file_upload' ") or die(mysql_error());  

  if ($sql){
    echo "<script>
      alert ('Data Berhasil disimpan');
      window.location.href='tampilgaleri.php';</script>";

  }else{
    echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
    }
  } 
  }
}
?>
