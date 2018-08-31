<form method="POST" action="">
  <table class="tb-pemain" align="center">
    <caption class="tb-pemain-judul">PROFILE</caption>
      <tr>
        <th>Nama Lengkap</th>
        <td><?php echo $data['nama_pemain']?></td>
      </tr>
      <tr>
        <th>Nama Panggilan</th>
        <td><?php echo $data['nama_panggilan']?></td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td><?php echo $data['tanggal_lahir']?></td>
      </tr>
      <tr>
        <th>Umur</th>
        <td><?php echo $data['umur']?></td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <td><?php echo $data['tempat_lahir']?></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td><?php echo $data['negara']?></td>
      </tr>
      <tr>
        <th>Tinggi Badan</th>
        <td><?php echo $data['tinggi_badan']?></td>
      </tr>
      <tr>
        <th>Berat Badan</th>
        <td><?php echo $data['berat_badan']?></td>
      </tr>
      <tr>
        <th>Posisi</th>
        <td><?php echo $data['posisi']?></td>
      </tr>
      <tr>
        <th>Nomor Punggung</th>
        <td><?php echo $data['nomor_punggung']?></td>
      </tr>
      <tr>
        <th>Tim Nasional</th>
        <td><?php echo $data['tim_nasional']?></td>
      </tr>
            <tr>
        <th>Karier</th>
        <td><?php echo $data['karier']?></td>
      </tr>
   </table>
</form>