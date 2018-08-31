<form method="POST" action="">
<table  class="tabel-pemain table-responsive table">
  <tbody>
    <tr>
      <td>
      <?PHP
                  $result = mysql_query("SELECT * FROM profil_pemain");
                  while($data=mysql_fetch_array($result)){
      ?>
        <button type="button" class="btn-pemain btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $data['id_pemain']?>"><?php echo $data['nama_panggilan']?></button>
      <!-- Modal -->
          <div class="modal fade" id="myModal<?php echo $data['id_pemain']?>" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">
                      <img src="../bootstrap/gambar/barca1.png" class="bglogo1">
                    </div>
                </div>
                  <div class="modal-body">
                  <h1><?php echo $data['nama_pemain']?></h1>
                    <img src="../bootstrap/gambar/pemain/<?php echo $data['gambar_pemain']; ?>" class="tb-pemain-img">
                      <?PHP
                        require ('tabel/messi.php');
                      ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn-pemain btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
          <?PHP } ?>
        </td>
      </tr>  
  </tbody>
</table>
</form>

